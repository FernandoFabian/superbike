<?php

$model->$name = ($model->$name!='0000-00-00 00:00:00')? date('Y-m-d',strtotime($model->$name)) : date('Y-m-d');
 
$this->widget('zii.widgets.jui.CJuiDatePicker',
	array('model'=>$model,
		'attribute'=>$name,
		'value'=>$model->$name,
		'language' => 'es',
		'htmlOptions' => array(
			'readonly'=>"readonly"
		),
		'options'=>array(
			 'autoSize'=>true,
			 'defaultDate'=>$model->$name,
			 'dateFormat'=>'dd-mm-yy',
			 'buttonImage'=>Yii::app()->baseUrl.'/images/calendar_blank.png',
			 'buttonImageOnly'=>true,
			 'buttonText'=>'Fecha',
			 'selectOtherMonths'=>true,
			 'showAnim'=>'slide',
			 'showButtonPanel'=>true,
			 'showOn'=>'button',
			 'showOtherMonths'=>true,
			 'changeMonth' => 'true',
			 'changeYear' => 'true',

			/*'autoSize'=>false,
			'defaultDate'=>$model->$name,
			'dateFormat'=>'yy-mm-dd',
			'buttonImage'=>Yii::app()->baseUrl.'/images/create_new.gif',
			'buttonImageOnly'=>true,
			'buttonText'=>'Fecha',
			'selectOtherMonths'=>false,
			'showAnim'=>'slide',
			'showButtonPanel'=>false,
			//'showOn'=>'button',
			'showOtherMonths'=>false,
			//'changeMonth' => 'true',
			//'changeYear' => 'true',
			'minDate'=>'date("Y-m-d")', //fecha minima
			'maxDate'=>"+20Y", //fecha maxima
			*/
            /* optional: change visual
            * themeUrl: "where the themes for this widget are located?"
            * theme: theme name. Note that there must be a folder under themeUrl with the theme name
            * cssFile: specifies the css file name under the theme folder. You may specify a
            *          single filename or an array of filenames
            * try http://jqueryui.com/themeroller/
            */
            //'themeUrl' => Yii::app()->baseUrl.'/css/ui-darkness' ,
            //'theme'=>'ui-darkness',	//try 'bee' also to see the changes
            //'cssFile'=>array('jquery-ui-1.8.16.custom.css' /*,anotherfile.css, etc.css*/),
		),
	));
?>
