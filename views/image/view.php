<?php 
$folder = Shop::module()->productImagesFolder;

if($model->filename) 
	$path = Yii::app()->baseUrl. '/' . $folder . '/' . $model->filename;
	else
	$path = Shop::register('no-pic.jpg');

echo CHtml::image($path,
		$model->title,
		array(
			'title' => $model->title,
			'style' => 'margin: 10px;',
			'width' => isset($thumb) && $thumb
			? Shop::module()->imageWidthThumb 
			: Shop::module()->imageWidth)
		); ?>
<?php 

if(Shop::module()->useWithYum && Yii::app()->user->isAdmin() || Yii::app()->user->id == 'admin') 
	echo CHtml::link(Shop::t('Delete Image'),
			array('delete', 'id' => $model->id)); ?>
