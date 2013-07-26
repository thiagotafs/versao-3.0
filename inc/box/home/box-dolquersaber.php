<?
require_once("../app/painel/modulo-recursos/classes/class.Fachada.php");

$oFachadaRecursos = new FachadaRecursos();

$voDolPergunta = $oFachadaRecursos->recuperaTodosPergunta('WHERE publicado = 1 AND excluido = 0 ORDER BY id DESC limit 8');

if(is_array($voDolPergunta) && count($voDolPergunta) > 0){
	
	foreach($voDolPergunta as $nContPergunta => $oDolPergunta){
		
		if(is_object($oDolPergunta)){
			
			
			$voDolPerguntaComentario = $oFachadaRecursos->recuperaTodosPerguntaComentario('WHERE publicado = 1 AND excluido = 0 AND id_dol_pergunta = '.$oDolPergunta->getId()." ORDER BY id DESC");
			
			$tpl->CONT_QUERSABER_PAG = $nContPergunta + 1 ;
			
			$tpl->ID_PERGUNTA = $oDolPergunta->getId();
			
			$tpl->TITULO_QUERSABER = stripslashes(utf8_encode($oDolPergunta->getTitulo()));
			
			if($nContPergunta ==  0){
				
				$tpl->STATUS_PERGUNTA = "block";
				$tpl->ESTILO_QUERSABER_PAG = 'class="active pag-quer-saber"';
				
				}else{
					
					$tpl->STATUS_PERGUNTA = "none";
					$tpl->ESTILO_QUERSABER_PAG = 'class="pag-quer-saber"';
					
					}
			
			
			if(is_array($voDolPerguntaComentario)){
				
				$sUltimoComentarioFormat = stripslashes(utf8_encode($voDolPerguntaComentario[0]->getComentario()));
				$sUltimoComentario = strlen($sUltimoComentarioFormat) >= 45 ? substr($sUltimoComentarioFormat,0,45)."..." : $sUltimoComentarioFormat ;
				$tpl->COMENTARIO_QUERSABER = $sUltimoComentario;
				$tpl->BT_COMENTARIO = "leia mais e participe";
				}else{
					
					$tpl->COMENTARIO_QUERSABER = "Seja o primeiro a comentar!";
					$tpl->BT_COMENTARIO = "comente aqui";
					}
			
			$tpl->block("BLOCK_QUERSABER");
			$tpl->block("BLOCK_QUERSABER_PAG");
			
			}// verifica objeto
		
		}// loop das perguntas
	
	}// verifica se existe array

######### BOX DOL QUER SABER ##########
?>