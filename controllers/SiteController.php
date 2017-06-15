<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\ForbiddenHttpException;
use yii\db\ActiveRecord;
use app\models\ContactForm;
use app\models\LoginForm;
use app\models\Test;
use app\models\Item;
use app\models\Category;
use app\models\Page;
use app\models\MainSlider;
use app\models\Gallery;
use app\models\GalleryCat;
use app\models\Contacts;
use app\models\Articles;
use app\models\MailOrders;
use app\models\Callback;
use app\models\Feedback;
use yii\data\Pagination;
use yii\helpers\Url;

class SiteController extends AppController{

    public function behaviors(){
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }


    public function actions(){
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }


    public function actionIndex(){
        $cat_model = Category::find()->all();
        $item_model = Item::find()->all();
        $main_page = Page::findOne(1);
        $slider_model = MainSlider::find()->all();
        
        return $this->render('index', [            
            'item_model' => $item_model,
            'cat_model' => $cat_model,
            'main_page' => $main_page,
            'slider_model' => $slider_model,
        ]);
    }

    public function actionAbout(){
        $model = Page::findOne(2);
        return $this->render('about', [
            'model' => $model,
        ]);
    }
    
    
    public function actionGallery(){
        $gcat_model = GalleryCat::find()->all();
        $gallery_model = Gallery::find()->all();
        $page = Page::findOne(3);
        return $this->render('gallery', [
            'gcat_model' => $gcat_model,
            'gallery_model' => $gallery_model,
            'page' => $page,
        ]);
    }
    
    public function actionContacts(){
        $contact_model = Contacts::find()->one();
        $model = new ContactForm();
        $page = Page::findOne(4);
        if ($model->load(Yii::$app->request->post()) && $model->sendEmail(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
            'contact_model' => $contact_model,
            'page' => $page,
        ]);
    }

    public function actionCallbacksend(){
        if(isset($_REQUEST['phone']) && $_REQUEST['phone'] != ''){
            $message = 'Телефон: ' . $_REQUEST['phone']."\n";
            $message = $message.'Имя: ' . $_REQUEST['name'];
            
            mail(Yii::$app->params['adminEmail'], "Обратный звонок", $message); 
            $model = new Callback();
            $model->name = $_REQUEST['name'];
            $model->phone = $_REQUEST['phone'];
            $model->date = date('Y-m-d H:i:s');
            $model->save();

            return 'done';
        }else{
            return 'error';
        }

    }
    
    public function actionOrdermail(){
        if(Yii::$app->request->post()){
            $absoluteUrl = Url::home(true);
            
            $message = "Имя: ".$_REQUEST['name'];
            $message = $message."\nТелефон: ".$_REQUEST['phone'];
            $message = $message."\nEmail: ".$_REQUEST['email'];
            $message = $message."\nСообщение: ".$_REQUEST['comment'];
            $message = $message."\nЗаявка на заказ: ".$_REQUEST['item_title'];
            $message = $message."\nАдрес сайта: ".$absoluteUrl;
            
            $headers = 'From: no-replay@webmaster.com';
            
            mail(Yii::$app->params['adminEmail'], "Заявка с сайта", $message, $headers);
            
        /*  $model = new MailOrders();
            $model->title = $_REQUEST['name'];
            $model->item_id = $_REQUEST['item_title'];
            $model->phone = $_REQUEST['phone'];
            $model->email = $_REQUEST['email'];
            $model->comment = $_REQUEST['comment'];
            $model->date = date('Y-m-d H:i:s');
            $model->save();*/

            return 'done';
        }else{
            return 'error';
        }

    }
    
    public function actionFeedback(){
        if(Yii::$app->request->post()){
            $message = "Имя: ".$_REQUEST['name'];
            $message = $message."\n Телефон: ".$_REQUEST['phone'];
            $message = $message."\n Email: ".$_REQUEST['email']; 
            $message = $message."\n Сообщение: ".$_REQUEST['comment'];
    
            mail(Yii::$app->params['adminEmail'], "Обратная связь", $message);
    
             $model = new Feedback();
            $model->name = $_REQUEST['name'];
            $model->phone = $_REQUEST['phone'];
            $model->email = $_REQUEST['email'];
            $model->comment = $_REQUEST['comment'];
            $model->date = date('Y-m-d H:i:s');
            $model->save();

            return 'done';
        }else{
            return 'error';
        }

    }


    /*
    public function actionArticles(){
        $query = Articles::find()->orderBy(['id' => SORT_DESC]);
        
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 2]);
        $article_model = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
    
        return $this->render('articles', [
            'article_model' => $article_model,
            'pages' => $pages,
        ]);
    }
    
    public function actionArticle($id){
        $article_model = Articles::findOne($id);        
        
        return $this->render('article_detail', [
            'article_model' => $article_model,
        ]);
    }
  */
}