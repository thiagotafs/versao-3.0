<?
require("../app/biblioteca/Template.class.php");
  	
	session_start();
	
	$tpl = new Template("inicio-tpl.php");
    
	include('inc/box/global.php');
	#GLOBAL
		
	$tpl->addFile("BOX_HEAD", "head-tpl.php");
	require_once('head.php');
	#HEAD
	
	$tpl->addFile("BOX_TOPO", "topo-tpl.php");
	require_once('topo.php');
	#TOPO
	
	
	include("inc/box/home/box-enquete.php");
	#BOX ENQUETE	
	
	include("inc/box/home/box-dolquersaber.php");
	#BOX ENQUETE	
		
	$tpl->addFile("BOX_RODAPE", "rodape-tpl.php");
	require_once('rodape.php');
	#RODAPE
	
	$tpl->show();
	
?>