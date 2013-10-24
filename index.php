<?php
include_once ('global/function.php');

ob_start();

if($_GET['view'] == 'publications')
{
	include ('view/publications.php');
}
elseif($_GET['view'] == 'contact')
{
	include('view/contact.php');	
}
elseif($_GET['view'] == 'competences')
{
	include('view/competences.php');	
}
else
{
	include ('view/index.php');
}

$content = ob_get_clean();

include ('global/haut.php');
	echo $content;
include ('global/bas.php');

?>