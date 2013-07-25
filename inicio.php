<?
require("../app/biblioteca/Template.class.php");
  	
	session_start();
	
	$tpl = new Template("inicio-tpl.php");
    
	include('inc/box/global.php');
	#GLOBAL
		
	require_once('head.php');
	$tpl->addFile("BOX_HEAD", "head-tpl.php");
	#HEAD
	
	require_once('topo.php');
	$tpl->addFile("BOX_TOPO", "topo-tpl.php");
	#TOPO
	
	
	
	
	
	
	$tpl->addFile("BOX_RODAPE", "rodape-tpl.php");
	#RODAPE
	
	$tpl->show();
	
?>