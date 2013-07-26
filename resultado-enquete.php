<?
ini_set("display_errors",0);
require_once("../app/painel/modulo-recursos/classes/class.Fachada.php");

$oFachadaRecursos = new FachadaRecursos();

extract($_POST);

$voTotalEnquete = $oFachadaRecursos->recuperaTodosEnqueteVoto("WHERE id_alternativa in(SELECT id FROM dol_enquete_alternativa WHERE id_enquete = $fIdEnquete) ");
							
							$nVotoTotal = is_array($voTotalEnquete) ? $voTotalEnquete[0]->getId() : 0;
							
							$voAlternativa = $oFachadaRecursos->recuperaTodosEnqueteAlternativa("WHERE id_enquete = $fIdEnquete ORDER BY ordem ASC");
							
							
									
							if(is_array($voAlternativa)){
									
								foreach($voAlternativa as $oAlternativa){
									
									if(is_object($oAlternativa)){
										
										$nIdAlternativa = $oAlternativa->getId();
										
										$voTotalEnqueteEspecifico = $oFachadaRecursos->recuperaTodosEnqueteVoto("WHERE id_alternativa in(SELECT id FROM dol_enquete_alternativa WHERE id_enquete = $fIdEnquete ) AND id_alternativa = $nIdAlternativa");
										
										$nVotoEspecifico = is_array($voTotalEnqueteEspecifico) ? $voTotalEnqueteEspecifico[0]->getId() : 0;
										
										$nPorcentagem =  number_format( ($nVotoEspecifico*100) / $nVotoTotal,2) > 0 ? number_format( ($nVotoEspecifico*100) / $nVotoTotal,2) : 0;
										
										$sListResultado .= "<li style='list-style:none;padding:2px' ><span style='background-color:#469BC3;height:5px;width:".$nPorcentagem."px'></span>&nbsp;&nbsp;".stripslashes(utf8_encode($oAlternativa->getConteudo()))." ".$nPorcentagem."%</li>";
										
										
										}// se objeto
										
									}//loop
									
								}// se array
									
					
						echo trim($sListResultado."<li style=\"list-style:none;padding:2px;text-align:center;height:35px\">
						<button class='btn btn-inverse bt-voltar' id=\"$fIdEnquete\" type='button'>Voltar</button>
						</li>");			
						

?>
<script>
$(document).ready(function() {
   
    $(".bt-voltar").click(function(){
						console.log('teste')
                        $(".bt-enquete-result").each(function(){
                            $(this).html("Resultados")
                        })
			
                        var id_enquete = $(this).attr("id")
			
                        $("#form-enquete-"+id_enquete).css("display","block")
										
                        $("#result-"+id_enquete).css("display","none")
			
                    })
});
</script>