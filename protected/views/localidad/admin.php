<?php
/* @var $this LocalidadController */
/* @var $model Localidad */

$this->breadcrumbs=array(
	'Localidads'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Localidad', 'url'=>array('index')),
	array('label'=>'Create Localidad', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#localidad-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Localidads</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'localidad-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'loc_codigo',
		'loc_nombre',
		'loc_ubicación',
		'loc_caracteristicas',
		'loc_atractivos',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
