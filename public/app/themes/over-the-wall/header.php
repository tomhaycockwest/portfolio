<!doctype html>

<html lang="en-GB" class="no-js">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php wp_title(' | ', true, 'right'); ?>Keystone Games</title>

	<script src="https://use.typekit.net/irl8iba.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>

	<?php wp_head(); ?>
</head>

<body <?php body_class() ?>>

	<?php
		require 'app/components/navigation.php';
	?>
