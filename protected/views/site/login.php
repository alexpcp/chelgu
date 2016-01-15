<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<div class="new_class" align="center">
    <div class="login_block">
        <div class="login__form-title lp-text-30px">Вход в Личный кабинет</div>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>
    <div class="login_form__input-wrapper">
	   <div class="row">
		  <?php echo $form->labelEx($model,'username',array('class'=>'login_form__input-label')); ?>
		  <?php echo $form->textField($model,'username',array('class'=>'login_form__input','placeholder'=>'Введите логин')); ?>
		  <?php echo $form->error($model,'username'); ?>
	   </div>
    </div>

    <div class="login_form__input-wrapper login_form__input-wrapper-last ">
	   <div class="row">
		  <?php echo $form->labelEx($model,'password',array('class'=>'login_form__input-label')); ?>
		  <?php echo $form->passwordField($model,'password',array('class'=>'login_form__input','placeholder'=>'Введите пароль')); ?>
		  <?php echo $form->error($model,'password'); ?>
	   </div>
    </div>

	<div class="row rememberMe">
		<?php echo $form->label($model,'rememberMe'); ?>
       	<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>
    
    <div class="lk-form-block">
	   <div class="row buttons">
		  <?php echo CHtml::submitButton('Войти',array('class'=>'b-button b-button_green b-button_small')); ?>
	   </div>
    </div>

    <?php $this->endWidget(); ?>
        
    <div class="OAuth_icon">
        <a class="auth_icon" href="https://vk.com"> <img src="../images/VK.png"; height="40px";width="40px"></a>
        <a class="auth_icon" href="https://facebook.com"><img src="../images/facebook.png"; height="40px";width="40px"></a>
        <a class="auth_icon" href="https://twitter.com"><img src="../images/twitter.png"; height="40px";width="40px"></a>
        <a class="auth_icon" href="https://gmail.com"><img src="../images/gmail.png"; height="40px";width="40px"></a>
    </div>

        </div>
    </div>    
</div><!-- form -->
