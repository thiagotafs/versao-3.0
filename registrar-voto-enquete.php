<?
ini_set("display_errors",0);
require_once("../app/painel/modulo-recursos/classes/class.Fachada.php");

$oFachadaRecursos = new FachadaRecursos();

extract($_POST);

if(isset($_COOKIE["diarioonline_enquete"]) && $_COOKIE["diarioonline_enquete"] != ""){	
		
		
		
		if(strpos($_COOKIE["diarioonline_enquete"],"-")){
			//cria vetor com id da enquete, pois existem varios id de enquetes no cookie
			
			$vIdEnquete = explode("-",$_COOKIE["diarioonline_enquete"]);
			
			if(in_array($fIdEnquete,$vIdEnquete)){
				//se existe o id da enquete no vetor, entao o usuario nao pode mais votar
				
				$result = "0::";
				
				}else{
					// como nao existe o id da enquete no cookie entao o voto é armazenado
					
					//inicio adiciona
						
						$oVoto = new Dol_enquete_voto(NULL,abs($fIdAlternativa),$_SERVER['HTTP_X_FORWARDED_FOR'],date("d/m/Y"),date("H:i:s"));
						
						if($oFachadaRecursos->inserirDol_enquete_voto($oVoto)){
							
							$result = "1::";
							
							}
							
							$voTotalEnquete = $oFachadaRecursos->recuperaTodosEnqueteVoto("WHERE id_alternativa in(SELECT id FROM dol_enquete_alternativa WHERE id_enquete = $fIdEnquete) ");
							
							$nVotoTotal = is_array($voTotalEnquete) ?  $voTotalEnquete[0]->getId() : 0;
							
							$voAlternativa = $oFachadaRecursos->recuperaTodosEnqueteAlternativa("WHERE id_enquete = $fIdEnquete ORDER BY ordem ASC");
							
							
									
							if(is_array($voAlternativa)){
									
								foreach($voAlternativa as $oAlternativa){
									
									if(is_object($oAlternativa)){
										
										$nIdAlternativa = $oAlternativa->getId();
										
										$voTotalEnqueteEspecifico = $oFachadaRecursos->recuperaTodosEnqueteVoto("WHERE id_alternativa in(SELECT id FROM dol_enquete_alternativa WHERE id_enquete = $fIdEnquete ) AND id_alternativa = $nIdAlternativa");
										
										$nVotoEspecifico = is_array($voTotalEnqueteEspecifico) ?  $voTotalEnqueteEspecifico[0]->getId() : 0;
										
										$nPorcentagem =  substr( ($nVotoEspecifico*100) / $nVotoTotal,0,5) > 0 ? substr( ($nVotoEspecifico*100) / $nVotoTotal,0,5) : 0;
										
										$sListResultado .= "<li style='list-style:none;padding:2px' ><span style='background-color:#469BC3;height:5px;width:".$nPorcentagem."px'></span>&nbsp;&nbsp;".stripslashes(utf8_encode($oAlternativa->getConteudo()))." ".$nPorcentagem."%</li>";
										
										//$nTotalEnquete += $nPorcentagem;
										
										}// se objeto
										
									}//loop
									
								}// se array
									
									
							$result .= $sListResultado."<div style=\"color:#469BC3;font-size:13px !important\" id=\"msg-$fIdEnquete\">Voto cadastrado com sucesso!<br /></div>";
		
						// fim adicina
					
					setcookie("diarioonline_enquete",$_COOKIE["diarioonline_enquete"]."-".$fIdEnquete,time()+3600);
					
					}
			
			
			}else{
				//como nao existe "#" entao o usuario so votou uma vez, com isso a verificaçao com o cookie é direta
				
				if($fIdEnquete == $_COOKIE["diarioonline_enquete"]){
					//se id da enquete for igual ao cookie entao o usuario ja votou nessa enquete
					
					$result = "0::";
					
					}else{
						
						//inicio adiciona
						
						$oVoto = new Dol_enquete_voto(NULL,abs($fIdAlternativa),$_SERVER['HTTP_X_FORWARDED_FOR'],date("d/m/Y"),date("H:i:s"));
						
						if($oFachadaRecursos->inserirDol_enquete_voto($oVoto)){
							
							$result = "1::";
							
							}
							
							$voTotalEnquete = $oFachadaRecursos->recuperaTodosEnqueteVoto("WHERE id_alternativa in(SELECT id FROM dol_enquete_alternativa WHERE id_enquete = $fIdEnquete) ");
							
							$nVotoTotal = is_array($voTotalEnquete) ? $voTotalEnquete[0]->getId() : 0;
							
							$voAlternativa = $oFachadaRecursos->recuperaTodosEnqueteAlternativa("WHERE id_enquete = $fIdEnquete ORDER BY ordem ASC");
							
							
									
							if(is_array($voAlternativa)){
									
								foreach($voAlternativa as $oAlternativa){
									
									if(is_object($oAlternativa)){
										
										$nIdAlternativa = $oAlternativa->getId();
										
										$voTotalEnqueteEspecifico = $oFachadaRecursos->recuperaTodosEnqueteVoto("WHERE id_alternativa in(SELECT id FROM dol_enquete_alternativa WHERE id_enquete = $fIdEnquete ) AND id_alternativa = $nIdAlternativa");
										
										$nVotoEspecifico = is_array($voTotalEnqueteEspecifico) ? $voTotalEnqueteEspecifico[0]->getId() : 0;
										
										$nPorcentagem =  substr( ($nVotoEspecifico*100) / $nVotoTotal,0,5) > 0 ? substr( ($nVotoEspecifico*100) / $nVotoTotal,0,5) : 0;
										
										$sListResultado .= "<li style='list-style:none;padding:2px' ><span style='background-color:#469BC3;height:5px;width:".$nPorcentagem."px'></span>&nbsp;&nbsp;".stripslashes(utf8_encode($oAlternativa->getConteudo()))." ".$nPorcentagem."%</li>";
						
										
										//$nTotalEnquete += $nPorcentagem;
										
										}// se objeto
										
									}//loop
									
								}// se array
									
									
							$result .= $sListResultado."<div style=\"color:#469BC3;font-size:13px !important;\" id=\"msg-$fIdEnquete\">Voto cadastrado com sucesso!<br /></div>";
		
						// fim adicina
						
						setcookie("diarioonline_enquete",$_COOKIE["diarioonline_enquete"]."-".$fIdEnquete,time()+3600);
						
						}
			
				}
			
		
		
		
		}else{
		
		//inicio adiciona
		
		$oVoto = new Dol_enquete_voto(NULL,abs($fIdAlternativa),$_SERVER['HTTP_X_FORWARDED_FOR'],date("d/m/Y"),date("H:i:s"));
		
		if($oFachadaRecursos->inserirDol_enquete_voto($oVoto)){
			
			$result = "1::";
			
			}
			
			$voTotalEnquete = $oFachadaRecursos->recuperaTodosEnqueteVoto("WHERE id_alternativa in(SELECT id FROM dol_enquete_alternativa WHERE id_enquete = $fIdEnquete) ");
			
			$nVotoTotal = is_array($voTotalEnquete) ? $voTotalEnquete[0]->getId() : 0;
			
			$voAlternativa = $oFachadaRecursos->recuperaTodosEnqueteAlternativa("WHERE id_enquete = $fIdEnquete ORDER BY ordem ASC");
			
			
					
			if(is_array($voAlternativa)){
					
				foreach($voAlternativa as $oAlternativa){
					
					if(is_object($oAlternativa)){
						
						$nIdAlternativa = $oAlternativa->getId();
						
						$voTotalEnqueteEspecifico = $oFachadaRecursos->recuperaTodosEnqueteVoto("WHERE id_alternativa in(SELECT id FROM dol_enquete_alternativa WHERE id_enquete = $fIdEnquete ) AND id_alternativa = $nIdAlternativa");
						
						$nVotoEspecifico = is_array($voTotalEnqueteEspecifico) ? $voTotalEnqueteEspecifico[0]->getId() : 0;
						
						$nPorcentagem =  substr( ($nVotoEspecifico*100) / $nVotoTotal,0,5) > 0 ? substr( ($nVotoEspecifico*100) / $nVotoTotal,0,5) : 0;
						
						$sListResultado .= "<li style='list-style:none;padding:2px' ><span style='height:5px;width:".$nPorcentagem."px'></span>&nbsp;&nbsp;".stripslashes(utf8_encode($oAlternativa->getConteudo()))." ".$nPorcentagem."%</li>";
						
						//$nTotalEnquete += $nPorcentagem;
						
						}// se objeto
						
					}//loop
					
				}// se array
					
					
			$result .= $sListResultado."<div style=\"color:#333;font-size:13px !important;font-weight:bold\" id=\"msg-$fIdEnquete\">Voto cadastrado com sucesso!<br /></div>";
		
		// fim adicina
		
		setcookie("diarioonline_enquete",$fIdEnquete,time()+3600);
			
		}// Se nao existir cookie*/
		
		
		
		echo trim($result);
		
		
		
		
		
?>