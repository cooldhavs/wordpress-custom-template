<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>IFCNS</title>
<?php wp_head(); ?>
</head>

<?php if(is_front_page())
{
	$test_classes = array('test_class','just_class');
}
else
{
	$test_classes = array('no_class');
}?>

<body <?php body_class($test_classes); ?>>
<?php wp_nav_menu(array('theme_location'=>'primary')); ?>
<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />