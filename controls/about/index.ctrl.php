<?php

	header( 'Content-Type: ' . $Config->content_type . '; charset=' . $Config->charset );

	$WebPage->page = 'about/index';
	$WebPage->title = 'about: ' . $Config->site_name;
	$WebPage->heading = 'about: ' . $Config->site_name;
	$WebPage->view = 'html-layout.tpl.php';

	include $WebPage->view;