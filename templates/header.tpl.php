<?php

	$menu_items = array(
		'about' => array(
			'href' => '/about',
			'page' => 'about/index',
			'title' => 'about'
		)
	);

	$Nav = new Penn\Html\Helpers\Nav( $menu_items );
?>
<div id="header">
	<h1><a href="/"><?php echo $WebPage->heading; ?></a></h1>
	<?php echo $Nav->getNavAsUl( 'nav', $WebPage->page ) . PHP_EOL; ?>
</div>
