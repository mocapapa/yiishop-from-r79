<?php
$this->breadcrumbs=array(
	Shop::t('Shop')=>array('shop/index'),
	Shop::t('Categories')=>array('index'),
	$model->title,
);

?>

<h2> <?php echo $model->title; ?></h2>

<?php
	foreach($model->Products as $product) {
		$this->renderPartial('/products/_view', array('data' => $product));
}
?>


<div class="clear"> </div>


