<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;
/* @var $this yii\web\View */
/* @var $model app\models\Item */
/* @var $form yii\widgets\ActiveForm */
?>
<?if(isset($cat_model)){
    // Получаем список категорий товара
    foreach($cat_model as $cat){
	$options[$cat->id] = $cat->name;
    }
}?>
<div class="item-form">

    <?php $form = ActiveForm::begin(); ?>

   

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cat_id')->dropDownList($options);?>

    <?if($model->img != 'none'):?>
	<img height="200" src="<?=$model->img;?>">
    <?else:?>
	<i class="fa fa-picture-o fa-6" aria-hidden="true"></i>
    <?endif;?>
    <?=$form->field($file_model, 'imageFile')->fileInput()->label('[изменить]');?><br>   


    <?= $form->field($model, 'color')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'size')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'unit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'title')->textInput(['maxlength' => true]); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Сохранить' : 'Сохранить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
