<?php
$this->breadcrumbs=array(
	Shop::t('Images') =>array('index'),
	Shop::t('Upload'),
);

?>

<div id="shopcontent">

	<h2> <?php Shop::t('Upload Image'); ?></h2>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

</div>
