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
	#BOX DOL QUER SABER
	
	include("inc/box/home/box-filme-cartaz.php");
	#BOX CINEMA	
	
	include("inc/box/home/box-dol-agora.php");
	#BOX DOL AGORA	
	
	include("inc/box/home/box-dol-imoveis.php");
	#BOX DOL IMOVEIS
	
	include("inc/box/home/box-blogs.php");
	#BOX BLOGS	
	
	include("inc/box/home/box-ensaio.php");
	#BOX ENSAIO	
	
	include("inc/box/home/box-doltv-destaque.php");
	#BOX DOLTV DESTAQUE	
	
	include("inc/box/home/box-doltv-video.php");
	#BOX DOLTV VIDEOS	
	
		
	$tpl->addFile("BOX_RODAPE", "rodape-tpl.php");
	require_once('rodape.php');
	#RODAPE
	
	$tpl->show();
	
?>