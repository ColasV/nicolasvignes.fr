<?php if (!defined('PLX_ROOT')) exit; ?>
<!DOCTYPE html>
<html lang="<?php $plxShow->defaultLang() ?>">
<head>
<meta charset="<?php $plxShow->charset('min'); ?>">
<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0">
<title><?php $plxShow->pageTitle(); ?></title>
<?php $plxShow->meta('description') ?>
<?php $plxShow->meta('keywords') ?>
<?php $plxShow->meta('author') ?>
<link rel="icon" href="<?php $plxShow->template(); ?>/img/favicon.png" />
<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/bootstrap.min.css" media="screen"/>
<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/bootstrap-theme.min.css" media="screen"/>
<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/style.css" media="screen"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="<?php $plxShow->template(); ?>/js/bootstrap.min.js"></script>
<?php $plxShow->templateCss() ?>
<?php $plxShow->pluginsCss() ?>
<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" />
<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires') ?>" />
</head>

<body id="top">

	<nav role="navigation" class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<ul id="static-nav" class="nav navbar-nav">
				<li><?php $plxShow->mainTitle('link'); ?></li>
				<?php $plxShow->staticList($plxShow->getLang('HOME'),'<li id="#static_id" class="#static_status"><a href="#static_url" title="#static_name">#static_name</a></li>'); ?>
				<?php $plxShow->pageBlog('<li id="#page_id"><a class="#page_status" href="#page_url" title="#page_name">#page_name</a></li>'); ?>
			</ul>
		</div>
	</nav>

	<div class="container">

	<header role="banner">

		
		<!--<h2>
			<?php $plxShow->subTitle(); ?>
		</h2>-->

	</header>
