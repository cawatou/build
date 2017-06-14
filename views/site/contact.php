<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Контакты';
$this->params['breadcrumbs'][] = $this->title;
?>
<?//if(isset($contact_model)) echo "<pre>".print_r($contact_model, 1)."</pre>";?>

<div class="pre-content" style="height:400px">


</div><!-- .pre-content -->


<div id="main" class="clearfix">
    <div id="container" class="no-sidebar">
        <div id="content">


            <article id="post-136" class="clearfix post-136 page type-page status-publish hentry" role="article">
                <div class="entry-content clearfix">
                    <section class="wpb_row main_row  no-seperator" style="padding-top:70px; padding-bottom:35px;">
                        <div class="row-inner row-inner-fixed">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper">
                                                <h2><?=$page->title?></h2>
                                                <p><?=$page->description?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="wpb_row main_row  no-seperator" style="padding-top:35px; padding-bottom:70px;">
                        <div class="row-inner row-inner-fixed">
                            <div class="wpb_column vc_column_container vc_col-sm-4">
                                <div class="vc_column-inner vc_custom_1426022446972">
                                    <div class="wpb_wrapper">
                                        <div class="custom-list-item"><i class="fa fa-clock-o"
                                                                         style="color:#e74c3c"></i><span
                                                style="text-transform: uppercase;">Часы работы</span></div>
                                        <div class="vc_empty_space" style="height: 5px"><span
                                                class="vc_empty_space_inner"></span></div>

                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper">
                                                <p><strong>Понедельник: </strong>с 9.00 до 18.00<br/>
                                                    <strong>Вторник: </strong>с 9.00 до 18.00<br/>
                                                    <strong>Среда: </strong>с 9.00 до 18.00<br/>
                                                    <strong>Четверг: </strong>с 9.00 до 18.00<br/>
                                                    <strong>Пятница: </strong>с 9.00 до 18.00<br/>
                                                    <strong>Суббота: </strong>с 9.00 до 15.00<br/>
                                                    <strong>Воскресенье: </strong>Выходной</p>

                                            </div>
                                        </div>
                                        <div class="vc_empty_space" style="height: 60px"><span
                                                class="vc_empty_space_inner"></span></div>
                                        <div class="custom-list-item"><i class="fa fa-home"
                                                                         style="color:#e74c3c"></i><span
                                                style="text-transform: uppercase;">Наш адрес</span></div>
                                        <div class="vc_empty_space" style="height: 5px"><span
                                                class="vc_empty_space_inner"></span></div>

                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper">
                                                <p><?=$contact_model->address?><br/>
                                                    <strong>Тел: </strong><?=$contact_model->phone?><br/>
                                                    <strong>Email: </strong><a href="mailto:<?=$contact_model->email?>&lt;/"><?=$contact_model->email?></a><br/>
                                                </p>

                                            </div>
                                        </div>
                                        <div class="vc_empty_space" style="height: 60px"><span
                                                class="vc_empty_space_inner"></span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-8">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div role="form" class="wpcf7" id="wpcf7-f6-p136-o1" lang="en-US" dir="ltr">
                                            <div class="screen-reader-response"></div>
                                            <form class="wpcf7-form">
                                                <p>
                                                    <span class="wpcf7-form-control-wrap your-name">
                                                        <input type="text"
                                                          name="your-name"
                                                          value=""
                                                          size="40"
                                                          class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                          aria-required="true"
                                                          aria-invalid="false"
                                                          placeholder="Ваше имя"/>
                                                    </span>
                                                </p>
                                                <p>
                                                    <span class="wpcf7-form-control-wrap your-email">
                                                        <input type="email"
                                                           name="your-email"
                                                           value=""
                                                           size="40"
                                                           class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                           aria-required="true"
                                                           aria-invalid="false"
                                                           placeholder="Ваш Email"/>
                                                    </span>
                                                </p>                                                
                                                <p><span class="wpcf7-form-control-wrap your-message"><textarea
                                                            name="your-message" cols="40" rows="10"
                                                            class="wpcf7-form-control wpcf7-textarea"
                                                            aria-invalid="false"
                                                            placeholder="Сообщение"></textarea></span>
                                                </p>
                                                <p><input type="submit" value="Отправить"
                                                          class="wpcf7-form-control wpcf7-submit"/></p>
                                                <div class="wpcf7-response-output wpcf7-display-none"></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div><!-- .entry-content -->
            </article>


        </div><!-- #content -->
    </div><!-- #container -->

</div><!-- #main  -->








                                
