<?php
/* @var $this ProveedorController */
/* @var $model Proveedor */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'proveedor-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'prov_nombre'); ?>
		<?php echo $form->textField($model,'prov_nombre',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'prov_nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prov_giro'); ?>
		<?php echo $form->textField($model,'prov_giro',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'prov_giro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prov_telefono'); ?>
		<?php echo $form->textField($model,'prov_telefono'); ?>
		<?php echo $form->error($model,'prov_telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prov_email'); ?>
		<?php echo $form->textField($model,'prov_email',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'prov_email'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->