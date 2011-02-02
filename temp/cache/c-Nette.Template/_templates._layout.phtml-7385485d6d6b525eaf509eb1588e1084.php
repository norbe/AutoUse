<?php //netteCache[01]000216a:2:{s:4:"time";s:21:"0.94106300 1294924150";s:9:"callbacks";a:1:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:46:"C:\dev\www\AutoUse/app/templates/@layout.phtml";i:2;i:1294924144;}}}?><?php
// file …/templates/@layout.phtml
//

$_l = Nette\Templates\LatteMacros::initRuntime($template, NULL, '50ffc70292'); unset($_extends);

if (isset($presenter, $control) && $presenter->isAjax()) { Nette\Templates\LatteMacros::renderSnippets($control, $_l, get_defined_vars()); }

if (Nette\Templates\SnippetHelper::$outputAllowed) {
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="StyleSheet" type="text/css" href="<?php echo Nette\Templates\TemplateHelpers::escapeHtml($basePath) ?>/public/css/frontend/screen.css" />
	<script type="text/javascript" src="<?php echo Nette\Templates\TemplateHelpers::escapeHtml($basePath) ?>/public/libs/jquery/jquery.js"></script>
	<script type="text/javascript" src="<?php echo Nette\Templates\TemplateHelpers::escapeHtml($basePath) ?>/public/libs/jquery/jquery.livequery.js"></script>
	<script type="text/javascript" src="<?php echo Nette\Templates\TemplateHelpers::escapeHtml($basePath) ?>/public/libs/NetteAjax/jquery.nette.js"></script>
	<script type="text/javascript" src="<?php echo Nette\Templates\TemplateHelpers::escapeHtml($basePath) ?>/public/js/hideControl.js"></script>
</head>

<body>

<div id="content">
<?php } Nette\Templates\LatteMacros::callBlock($_l, 'content', $template->getParams()) ;if (Nette\Templates\SnippetHelper::$outputAllowed) { ?>
</div>
</body>
</html>

<?php
}
