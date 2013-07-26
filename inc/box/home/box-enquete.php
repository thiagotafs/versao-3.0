<?
require_once("../app/painel/modulo-recursos/classes/class.Fachada.php");

$oFachadaRecursos = new FachadaRecursos();

$voEnqueteDol = $oFachadaRecursos->recuperaTodosEnquete('WHERE visualizado in("home","home_noticia") AND publicado = 1 AND excluido = 0 ORDER BY id DESC limit 8');

if(is_array($voEnqueteDol) && count($voEnqueteDol) > 0){
	
	// INICIO VERIFICA DESTAQUE
	
	$nDestaqueEnquete = false;
	foreach($voEnqueteDol as $oEnqueteDol){
		if($oEnqueteDol->getDestaque() == 1){
			$nDestaqueEnquete = true;
			}		
		}
		
	//FIM VERIFICA DESTAQUE
	
	
	foreach($voEnqueteDol as $nContEnquete => $oEnqueteDol){
		if(is_object($oEnqueteDol)){
			
			$tpl->CONT_ENQUETE_PAG = $nContEnquete + 1;
			
			$tpl->ID_ENQUETE = $oEnqueteDol->getId();
			
			$tpl->ENQUETE_TITULO = stripslashes(utf8_encode($oEnqueteDol->getTitulo()));
			
			
			
			if($oEnqueteDol->getDestaque() == 1){
							$tpl->STATUS_ENQUETE = "block";
							$tpl->ESTILO_ENQUETE_PAG = 'class="active"';
							}else{
								$tpl->STATUS_ENQUETE = "none";
								$tpl->ESTILO_ENQUETE_PAG = "cursor:pointer";
								$nCont++;
								}
			
			if(!$nDestaqueEnquete && $nContEnquete == 0){
				
				$tpl->STATUS_ENQUETE = "block";
				$tpl->ESTILO_ENQUETE_PAG = 'class="active"';
				
				}
			
			$voEnqueteAlternativa = $oFachadaRecursos->recuperaTodosEnqueteAlternativa('WHERE id_enquete = '.$oEnqueteDol->getId().' ORDER BY ordem ASC');
			
			if(is_array($voEnqueteAlternativa)){
				foreach($voEnqueteAlternativa as $oEnqueteAlternativa){
					if(is_object($oEnqueteAlternativa)){
						
						$tpl->ALTERNATIVA_ID = $oEnqueteAlternativa->getId();
						$tpl->ALTERNATIVA_CONTEUDO = stripslashes(utf8_encode($oEnqueteAlternativa->getConteudo()));
						$tpl->block("BLOCK_ENQUETE_ALTERNATIVA");
						
						}// verifica se é objeto
						
					}// loop nas alternativas
					
				}// verifica vetor de alternativa
			
			$tpl->block("BLOCK_ENQUETE_PAG");
			
			$tpl->block("BLOCK_ENQUETE");
			
			}// verifica se enquete é objeto
			
			
			
		}// loop no vetor de enquete
	
	}
		
############# BOX ENQUETE ##############




?>