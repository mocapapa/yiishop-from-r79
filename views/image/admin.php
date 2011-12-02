<?php
$this->breadcrumbs=array(
	Shop::t('Images') =>array('index'),
	Shop::t('Manage'),
);

?>

<div id="shopcontent">

<h2> 
<?php 
echo Shop::t('Images for'); 
echo '&nbsp;' . $product->title; 
?>
</h2>

<?php
if($images)
	foreach($images as $image) {
		echo "<label> {$image->title} </label><br />";
		$this->renderPartial('view', array('model' => $image));
	}


echo '<br />';

echo CHtml::link(Shop::t('Cancel'), array('/shop/shop/admin')) . '<br />';
echo CHtml::link(Shop::t('Upload new Image'), array('create', 'product_id' => $product->product_id));


?>
</div>
