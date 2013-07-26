{BOX_HEAD}
{BOX_TOPO}
<!-- INICIO CORPO -->
<script type="text/javascript" src="js/enquete.js"> </script>

<script type="text/javascript">
	 $(document).ready(function(){	
	 
	 	$('.quersaber-link').click(function(){
			$('#form-perg-'+$('.quersaber-link').attr('id')).submit();
			})
	 	 			
		
		 $(".select-quer-saber").click(function(){
		
                        var id = $(this).attr("id")
		
                        $(".tpl-opiniao-centro").each(function(){
                            $(this).attr("style","display:none")
                        })
		
                        $(".pag-quer-saber").each(function(){
                            $(this).removeClass('active')
                        })
			
                         $('#pag-perg-'+id).addClass('active')
                        $("#quer-saber-"+id).attr("style","display:block")
                    
					});
										
					//PAGINAÇÂO DOL QUER SABER
		
		
					
					
        $('.carousel').carousel();
	 })
</script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="container marketing">
  <div class="row">
    
    <!-- inicio conteudo -->
    <div class="span8 mt-20">
    <!-- INICIO TEMPLATE 1 -->
    	<div class="row">
            <div class="span8 border-b mb-10">
                <p class="chapeu cor-noticia">Chapeu noticia</p>
                <h1><a href="noticia-interna.php">Reajuste no preço da farinha chegou a 40%</a></h1>
                <p class="mb-0"><a href="noticia-interna.php">Segundo dados divulgados pelo Departamento Intersindical de Estatística e Estudos Socioeconômicos (Dieese) nesta segunda-feira (15), o custo da alimentação básica dos paraenses</a></p>
                <p class="info-not"><img src="img/ico-data.png">10/05/2013 <a href="noticia-interna.php"><img src="img/ico-comentario.png">10 cometários</a></p>
                    <div class="clear"></div>
            </div>
            <div class="span4">
                <div class="border-b mb-10">
                	<p class="chapeu cor-esporte">Chapeu esporte</p>
                    <div class="not-img-1"><a href="noticia-interna.php"><img src="img/miniatura-1.jpg"></a></div>
                    <h2><a href="noticia-interna.php">Curro Velho abre inscrições para oficinas</a></h2>
                    <p class="info-not"><img src="img/ico-data.png">10/05/2013 <a href="noticia-interna.php"><img src="img/ico-comentario.png">10 cometários</a></p>
                    <div class="clear"></div>
                </div>
                <div class="border-b mb-10">
                    <p class="chapeu cor-entretenimento">Chapeu fama</p>
                    <h2><a href="noticia-interna.php">Curro Velho abre inscrições para oficinas</a></h2>
                    <p class="info-not"><img src="img/ico-data.png">10/05/2013 <a href="noticia-interna.php"><img src="img/ico-comentario.png">10 cometários</a></p>
                    <div class="clear"></div>
                </div>
            </div> <!-- fim coluna 1-->
            <div class="span4">
                <div class="border-b mb-10">
                    <p class="chapeu cor-noticia">Chapeu esporte</p>
                    <div class="not-img-1"><a href="noticia-interna.php"><img src="img/miniatura-1.jpg"></a></div>
                    <h2><a href="noticia-interna.php">Curro Velho abre inscrições para oficinas</a></h2>
                    <p class="info-not"><img src="img/ico-data.png">10/05/2013 <a href="noticia-interna.php"><img src="img/ico-comentario.png">10 cometários</a></p>
                    <div class="clear"></div>
                </div>
                <div class="border-b mb-10">
                        <p class="chapeu cor-esporte">Chapeu esporte</p>
                        <h2><a href="noticia-interna.php">Curro Velho abre inscrições para oficinas</a></h2>
                        <p class="info-not"><img src="img/ico-data.png">10/05/2013 <a href="noticia-interna.php"><img src="img/ico-comentario.png">10 cometários</a></p>
                    <div class="clear"></div>
                </div>
          </div> <!-- fim coluna 2-->
      </div>
    <!-- fim TEMPLATE 1 -->
    	<div class="row">
        	<div class="span4">
    			<div class="border-b mb-10">
                    <p class="chapeu cor-esporte">Chapeu esporte</p>
                    <div class="not-img-1"><a href="noticia-interna.php"><img src="img/miniatura-2.jpg"></a></div>
                    <h2><a href="noticia-interna.php">Curro Velho abre inscrições para oficinas</a></h2>
                    <p class="info-not"><img src="img/ico-data.png">10/05/2013 <a href="noticia-interna.php"><img src="img/ico-comentario.png">10 cometários</a></p>
                    <div class="clear"></div>
                </div>
                
                <div class="border-b mb-10">
                    <p class="chapeu cor-entretenimento">Chapeu fama</p>
                    <h2><a href="noticia-interna.php">Curro Velho abre inscrições para oficinas</a></h2>
                    <p class="info-not"><img src="img/ico-data.png">10/05/2013 <a href="noticia-interna.php"><img src="img/ico-comentario.png">10 cometários</a></p>
                    <div class="clear"></div>
                </div>
                <div class="border-b mb-10">
                    <p class="chapeu cor-noticia">Chapeu esporte</p>
                    <div class="not-img-1"><a href="noticia-interna.php"><img src="img/miniatura-1.jpg"></a></div>
                    <h2><a href="noticia-interna.php">Curro Velho abre inscrições para oficinas</a></h2>
                    <p class="info-not"><img src="img/ico-data.png">10/05/2013 <a href="noticia-interna.php"><img src="img/ico-comentario.png">10 cometários</a></p>
                    <div class="clear"></div>
                </div>
                <div class="border-b mb-10">
                    <p class="chapeu cor-esporte">Chapeu esporte</p>
                    <h2><a href="noticia-interna.php">Curro Velho abre inscrições para oficinas</a></h2>
                    <p class="info-not"><img src="img/ico-data.png">10/05/2013 <a href="noticia-interna.php"><img src="img/ico-comentario.png">10 cometários</a></p>
                    <div class="clear"></div>
                </div>
                <div class="border-b mb-10">
                    <p class="chapeu cor-noticia">Chapeu esporte</p>
                    <div class="not-img-1"><a href="noticia-interna.php"><img src="img/miniatura-1.jpg"></a></div>
                    <h2><a href="noticia-interna.php">Curro Velho abre inscrições para oficinas</a></h2>
                    <p class="info-not"><img src="img/ico-data.png">10/05/2013 <a href="noticia-interna.php"><img src="img/ico-comentario.png">10 cometários</a></p>
                    <div class="clear"></div>
                </div>
                <div class="border-b mb-10">
                    <p class="chapeu cor-esporte">Chapeu esporte</p>
                    <h2><a href="noticia-interna.php">Curro Velho abre inscrições para oficinas</a></h2>
                    <p class="info-not"><img src="img/ico-data.png">10/05/2013 <a href="noticia-interna.php"><img src="img/ico-comentario.png">10 cometários</a></p>
                    <div class="clear"></div>
                </div>
                <div class="box-area cor-dol visible-desktop">
                    <div class="box-conteudo">
                        <h3>DOL QUER SABER</h3>
                         
                        <!-- BEGIN BLOCK_QUERSABER -->
                        <div class="tpl-opiniao-centro" id="quer-saber-{ID_PERGUNTA}" style="display:{STATUS_PERGUNTA}">
                            <h5 class="mt-20"><a href="quersaber.php?id={ID_PERGUNTA}" style="color:inherit !important">{TITULO_QUERSABER}</a></h5>
                            <p class="dol-quer-saber">{COMENTARIO_QUERSABER}</p>
                            <div class="text-center">
                              
                              <form method="get" action="quersaber.php" id="form-perg-{ID_PERGUNTA}">
                                    <input type="hidden" name="id" value="{ID_PERGUNTA}">
                                    <button class="btn btn-inverse quersaber-link" id="{ID_PERGUNTA}" type="button">{BT_COMENTARIO}</button>                                    
                              </form>
                              
                            </div>
                        </div>
                        <!-- END BLOCK_QUERSABER -->
                        
                    </div><!-- fim box conteudo-->
                    <div class="bd-paginacao bg-cor-dol">
                    	<div class="pagination">
                          <ul>
                          	<!-- BEGIN BLOCK_QUERSABER_PAG -->
                            <li {ESTILO_QUERSABER_PAG}  id="pag-perg-{ID_PERGUNTA}"><span class="select-quer-saber" id="{ID_PERGUNTA}">{CONT_QUERSABER_PAG}</span></li>  
                            <!-- END BLOCK_QUERSABER_PAG -->                          
                          </ul>
                    	</div><!-- fim pagination-->
                    </div><!-- bd-paginacao -->
                </div><!-- fim box area dol quer saber-->
                <h3 class="cor-entretenimento">FAMA</h3>
                <div class="border-b mb-10">
                	<div class="box-area-img cor-entretenimento"><img src="img/miniatura-3.jpg"></div>
                    <p class="chapeu cor-entretenimento">Chapeu fama</p>
                    <h2><a href="noticia-interna.php">Curro Velho abre inscrições para oficinas</a></h2>
                    <p class="mb-0"><a href="noticia-interna.php">Segundo dados divulgados pelo Departamento Intersindical de Estatística e Estudos Socioeconômicos (Dieese) nesta segunda-feira (15), o custo da alimentação básica dos paraenses</a></p>
                    <p class="info-not"><img src="img/ico-data.png">10/05/2013 <a href="noticia-interna.php"><img src="img/ico-comentario.png">10 cometários</a></p>
                    <div class="clear"></div>
                </div>
                <div class="border-b mb-10">
                    <p class="chapeu cor-entretenimento">Chapeu fama></p>
                    <h2><a href="noticia-interna.php">Curro Velho abre inscrições para oficinas</a></h2>
                    <p class="info-not"><img src="img/ico-data.png">10/05/2013 <a href="noticia-interna.php"><img src="img/ico-comentario.png">10 cometários</a></p>
                    <div class="clear"></div>
                </div>
                <div class="border-b mb-10">
                    <p class="chapeu cor-entretenimento">Chapeu fama</p>
                    <div class="not-img-1"><a href="noticia-interna.php"><img src="img/miniatura-1.jpg"></a></div>
                    <h2><a href="noticia-interna.php">Curro Velho abre inscrições para oficinas</a></h2>
                    <p class="info-not"><img src="img/ico-data.png">10/05/2013 <a href="noticia-interna.php"><img src="img/ico-comentario.png">10 cometários</a></p>
                    <div class="clear"></div>
                </div>
      		</div><!-- fim coluna1 -->
            <div class="span4">
    			<div class="border-b mb-10">
                    <p class="chapeu cor-esporte">Chapeu esporte</p>
                                        <h2><a href="noticia-interna.php">Curro Velho abre inscrições para oficinas</a></h2>
                    <p class="info-not"><img src="img/ico-data.png">10/05/2013 <a href="noticia-interna.php"><img src="img/ico-comentario.png">10 cometários</a></p>
                    <div class="clear"></div>
                </div>
                
                <div class="border-b mb-10">
                    <p class="chapeu cor-entretenimento">Chapeu fama</p>
                    <div class="not-img-1"><a href="noticia-interna.php"><img src="img/miniatura-1.jpg"></a></div>
                    <h2><a href="noticia-interna.php">Curro Velho abre inscrições para oficinas</a></h2>
                    <p class="info-not"><img src="img/ico-data.png">10/05/2013 <a href="noticia-interna.php"><img src="img/ico-comentario.png">10 cometários</a></p>
                    <div class="clear"></div>
                </div>
                <div class="border-b mb-10">
                    <p class="chapeu cor-esporte">Chapeu esporte</p>
                    <div class="not-img-1"><a href="noticia-interna.php"><img src="img/miniatura-2.jpg"></a></div>
                    <h2><a href="noticia-interna.php">Curro Velho abre inscrições para oficinas</a></h2>
                    <p class="info-not"><img src="img/ico-data.png">10/05/2013 <a href="noticia-interna.php"><img src="img/ico-comentario.png">10 cometários</a></p>
                    <div class="clear"></div>
                </div>
                <div class="box-area cor-dol visible-desktop">
                    <div class="box-conteudo">
                        <h3>ENQUETE</h3>
                        
                        <!-- BEGIN BLOCK_ENQUETE -->
                        <div class="tpl-enquete-centro" id="enquete-{ID_ENQUETE}" style="display:{STATUS_ENQUETE}">
                        <p><a href="enquete-interna.php?id={ID_ENQUETE}" style="color:inherit !important">{ENQUETE_TITULO}</a></p>
                        <form class="form-horizontal" method="post" id="form-enquete-{ID_ENQUETE}">
                            							
                            <!-- BEGIN BLOCK_ENQUETE_ALTERNATIVA -->
                            <label class="radio">
                                <input type="radio" class="fAlternativa{ID_ENQUETE} fAlternativa" id="alt-{ALTERNATIVA_ID}" value="{ALTERNATIVA_ID}" name="fAlternativa"/>{ALTERNATIVA_CONTEUDO}
                            </label>
                            <!-- END BLOCK_ENQUETE_ALTERNATIVA -->
                            
                                                                                    
                            <div class="text-center">
                            <button class="btn btn-inverse bt-enquete-envia proc-enquete{ID_ENQUETE}" id="{ID_ENQUETE}" type="button">Votar</button>
                            <button class="btn btn-inverse bt-enquete-result" id="{ID_ENQUETE}" type="button">Resultados</button>
                            </div>
                        </form>
                        <div style="color:#333;font-weight:bold;font-size:13px !important;display:none" id="msg-{ID_ENQUETE}"></div>
                            <ul style="display:none;" id="result-{ID_ENQUETE}"></ul>
                        </div>
                        <!-- END BLOCK_ENQUETE -->
                        
                    </div><!-- fim box conteudo-->
                    <div class="bd-paginacao bg-cor-dol">
                    	<div class="pagination">
                          <ul>
                          <!-- BEGIN BLOCK_ENQUETE_PAG -->
                            <li {ESTILO_ENQUETE_PAG} id="pag-{ID_ENQUETE}" ><span id="{ID_ENQUETE}" class="select-enquete">{CONT_ENQUETE_PAG}</span></li>
                          <!-- END BLOCK_ENQUETE_PAG -->  
                          </ul>
                    	</div><!-- fim pagination-->
                    </div><!-- bd-paginacao -->
                </div><!-- fim box area ENQUETE-->
                <h3 class="cor-noticia">NOTICIAS</h3>
                <div class="border-b mb-10">
                	<div class="box-area-img cor-noticia"><img src="img/miniatura-3.jpg"></div>
                    <p class="chapeu cor-noticia">Chapeu noticia</p>
                    <h2><a href="noticia-interna.php">Curro Velho abre inscrições para oficinas</a></h2>
                    <p class="mb-0"><a href="noticia-interna.php">Segundo dados divulgados pelo Departamento Intersindical de Estatística e Estudos Socioeconômicos (Dieese) nesta segunda-feira (15), o custo da alimentação básica dos paraenses</a></p>
                    <p class="info-not"><img src="img/ico-data.png">10/05/2013 <a href="noticia-interna.php"><img src="img/ico-comentario.png">10 cometários</a></p>
                    <div class="clear"></div>
                </div>
                <div class="border-b mb-10">
                    <p class="chapeu cor-noticia">Chapeu noticia</p>
                    <h2><a href="noticia-interna.php">Curro Velho abre inscrições para oficinas</a></h2>
                    <p class="info-not"><img src="img/ico-data.png">10/05/2013 <a href="noticia-interna.php"><img src="img/ico-comentario.png">10 cometários</a></p>
                    <div class="clear"></div>
                </div>
                <div class="border-b mb-10">
                    <p class="chapeu cor-noticia">Chapeu noticia</p>
                    <div class="not-img-1"><a href="noticia-interna.php"><img src="img/miniatura-1.jpg"></a></div>
                    <h2><a href="noticia-interna.php">Curro Velho abre inscrições para oficinas</a></h2>
                    <p class="info-not"><img src="img/ico-data.png">10/05/2013 <a href="noticia-interna.php"><img src="img/ico-comentario.png">10 cometários</a></p>
                    <div class="clear"></div>
                </div>
                <div class="border-b mb-10">
                    <p class="chapeu cor-noticia">Chapeu noticia</p>
                    <h2><a href="noticia-interna.php">Curro Velho abre inscrições para oficinas</a></h2>
                    <p class="info-not"><img src="img/ico-data.png">10/05/2013 <a href="noticia-interna.php"><img src="img/ico-comentario.png">10 cometários</a></p>
                    <div class="clear"></div>
                </div>
                <div class="border-b mb-10">
                    <p class="chapeu cor-noticia">Chapeu noticia</p>
                    <div class="not-img-1"><a href="noticia-interna.php"><img src="img/miniatura-1.jpg"></a></div>
                    <h2><a href="noticia-interna.php">Curro Velho abre inscrições para oficinas</a></h2>
                    <p class="info-not"><img src="img/ico-data.png">10/05/2013 <a href="noticia-interna.php"><img src="img/ico-comentario.png">10 cometários</a></p>
                    <div class="clear"></div>
                </div>
                <div class="border-b mb-10">
                    <p class="chapeu cor-noticia">Chapeu noticia</p>
                    <div class="not-img-1"><a href="noticia-interna.php"><img src="img/miniatura-1.jpg"></a></div>
                    <h2><a href="noticia-interna.php">Curro Velho abre inscrições para oficinas</a></h2>
                    <p class="info-not"><img src="img/ico-data.png">10/05/2013 <a href="noticia-interna.php"><img src="img/ico-comentario.png">10 cometários</a></p>
                    <div class="clear"></div>
                </div>
      		</div><!-- fim coluna 2-->
      	</div><!-- fim row-->
    </div><!-- fim span 8 -->
    <!-- fim conteudo -->
    
    <!-- inicio lateral -->
    <div class="span4">
      
      
      	<div class="box-area cor-multimidia bd-b">
        	<div class="box-conteudo">
            	<h3 class="cor-multimidia">DOL AGORA</h3>
            </div>
            <div id="video-exibir" style="display:none">
            	<object width="100%" height="200" style="margin: 0 0 5px 0; float:left; ">
                <param name="movie" value="http://www.youtube.com/v/KIdDxGGTgow?version=3&amp;hl=pt_BR">
                <param name="allowFullScreen" value="true">
                <param name="allowscriptaccess" value="always">
                <embed src="http://www.youtube.com/v/KIdDxGGTgow?version=3&amp;hl=pt_BR&amp;autoplay=1" type="application/x-shockwave-flash" width="290" height="200" allowscriptaccess="always" allowfullscreen="true" wmode="transparent">
                 </object>
            </div>
            <div id="video-img" style="cursor:pointer" nid="1133">
                 <ul>
                 	<li><img width="100%" style="margin: 0 0 5px 0; float:left;" src="http://img.youtube.com/vi/KIdDxGGTgow/0.jpg"></li>
                    <li class="play-dolagora"><img src="img/play-dol.png"></li>
                    <div class="clear"></div>
                 </ul>
            </div>
            <div class="box-conteudo">
            	<h5>Artistas realizam ato público em Belém</h5>
            </div>
      	</div><!-- FIM dol agora -->
        <div class="box-banner visible-desktop"><img src="img/banner.jpg"></div>
        <div class="box-banner visible-desktop"><img src="img/banner.jpg"></div>
        
           
        <div class="box-area cor-ee">
            <div class="bg-cor-ee text-center" style="border-bottom:1px solid #fff">
            	<h4 style="margin:0; padding:5px 0 10px 0">EDIÇÃO ELETRÔNICA</h4>
            </div>
            
        	<div id="EECarousel" class="carousel slide">
                  <!-- Itens de carousel -->
                  <div class="carousel-inner">
                        <div class="active item">
                            <a href="http://digital.diariodopara.com.br" target="_blank"><img style="margin:10px auto 0" src="img/capa-ee.jpg"></a>
                        </div>
                        <div class="item">
                            <a href="http://digital.diariodopara.com.br" target="_blank"><img style="margin:10px auto 0" src="img/capa-ee.jpg"></a>
                        </div>
                  </div>
            </div>
        </div>
    
    
    	<h3 class="cor-esporte">ESPORTES</h3>
    	<div class="border-b mb-10">
        	<div class="box-area-img cor-esporte"><img src="img/miniatura-3.jpg"></div>
            <p class="chapeu cor-esporte">Chapeu esporte</p>
            <h2><a href="noticia-interna.php">Curro Velho abre inscrições para oficinas</a></h2>
            <p class="mb-0"><a href="noticia-interna.php">Segundo dados divulgados pelo Departamento Intersindical de Estatística e Estudos Socioeconômicos (Dieese) nesta segunda-feira (15), o custo da alimentação básica dos paraenses</a></p>
            <p class="info-not"><img src="img/ico-data.png">10/05/2013 <a href="noticia-interna.php"><img src="img/ico-comentario.png">10 cometários</a></p>
                    <div class="clear"></div>
        </div>
        <div class="border-b mb-10">
            <p class="chapeu cor-esporte">Chapeu esporte</p>
            <h2><a href="noticia-interna.php">Curro Velho abre inscrições para oficinas</a></h2>
            <p class="info-not"><img src="img/ico-data.png">10/05/2013 <a href="noticia-interna.php"><img src="img/ico-comentario.png">10 cometários</a></p>
                    <div class="clear"></div>
        </div>
        <div class="border-b mb-10">
            <p class="chapeu cor-esporte">Chapeu esporte</p>
            <div class="not-img-1"><a href="noticia-interna.php"><img src="img/miniatura-1.jpg"></a></div>
            <h2><a href="noticia-interna.php">Curro Velho abre inscrições para oficinas</a></h2>
            <p class="info-not"><img src="img/ico-data.png">10/05/2013 <a href="noticia-interna.php"><img src="img/ico-comentario.png">10 cometários</a></p>
                    <div class="clear"></div>
        </div>
        <div class="border-b mb-10">
            <p class="chapeu cor-esportea">Chapeu esporte</p>
            <h2><a href="noticia-interna.php">Curro Velho abre inscrições para oficinas</a></h2>
            <p class="info-not"><img src="img/ico-data.png">10/05/2013 <a href="noticia-interna.php"><img src="img/ico-comentario.png">10 cometários</a></p>
                    <div class="clear"></div>
        </div>
        
        
        <div class="box-area cor-dol visible-desktop">
        	<h3 class="text-center">RÁDIOS</h3>
            <div class="box-conteudo">
            <div class="row-fluid">
                <div class="span4"><a href="#"><img src="img/radio-1.png"></a></div>
                <div class="span4"><a href="#"><img src="img/radio-2.png"></a></div>
                <div class="span4"><a href="#"><img src="img/radio-3.png"></a></div>
           	</div>
            </div>
       </div>
    </div>
    <!-- fim lateral -->
    
    <div class="span12 visible-desktop">
        <div class="box-area-dol-tv cor-multimidia">
        	<div class="row">
                <div class="span4">
                    <div class="box-area-img2 cor-multimidia">
                        <div id="video-exibir" style="display:none">
                            <object width="100%" height="200" style="margin: 0 0 5px 0; float:left; ">
                            <param name="movie" value="http://www.youtube.com/v/KIdDxGGTgow?version=3&amp;hl=pt_BR">
                            <param name="allowFullScreen" value="true">
                            <param name="allowscriptaccess" value="always">
                            <embed src="http://www.youtube.com/v/KIdDxGGTgow?version=3&amp;hl=pt_BR&amp;autoplay=1" type="application/x-shockwave-flash" width="290" height="200" allowscriptaccess="always" allowfullscreen="true" wmode="transparent">
                             </object>
                        </div>
                        <div id="video-img" style="cursor:pointer">
                             <ul>
                                <li><img width="100%" style="margin: 0; float:left;" src="http://img.youtube.com/vi/KIdDxGGTgow/0.jpg"></li>
                                <li style="position: absolute;background:url(img/play-dol.png) no-repeat; list-style: none;width: 300px;height: 200px;margin: 20px 5px;"></li>
                             </ul>
                        </div>
                    </div>
                        <p class="chapeu cor-multimidia">Chapeu multimidia</p>
                        <h2><a href="noticia-interna.php">Curro Velho abre inscrições para oficinas</a></h2>
                        <p class="info-not"><img src="img/ico-data.png">10/05/2013 <a href="noticia-interna.php"><img src="img/ico-comentario.png">10 cometários</a></p>
                    <div class="clear"></div>
                     
                </div><!-- FIM coluna 1 -->
                <div class="span4" style="margin-top:95px">
                	<h3>Mais videos</h3>
                    <div class="border-b mb-10">
                        <div class="not-img-1"><a href="noticia-interna.php"><img src="img/miniatura-2.jpg"></a></div>
                        <p class="chapeu cor-multimidia">Chapeu multimidia</p>
                        <h2><a href="noticia-interna.php">Curro Velho abre inscrições para oficinas</a></h2>
                        <p class="info-not"><img src="img/ico-data.png">10/05/2013 <a href="noticia-interna.php"><img src="img/ico-comentario.png">10 cometários</a></p>
                    <div class="clear"></div>
                    </div>
                    <div class="mb-10">
                        <div class="not-img-1"><a href="noticia-interna.php"><img src="img/miniatura-2.jpg"></a></div>
                        <p class="chapeu cor-multimidia">Chapeu multimidia</p>
                        <h2><a href="noticia-interna.php">Curro Velho abre inscrições para oficinas</a></h2>
                        <p class="info-not"><img src="img/ico-data.png">10/05/2013 <a href="noticia-interna.php"><img src="img/ico-comentario.png">10 cometários</a></p>
                    <div class="clear"></div>
                    </div>
                </div><!-- FIM coluna 2 -->
                <div class="span4" style="margin-top:123px">
                	<div class="border-b mb-10">
                        <div class="not-img-1"><a href="noticia-interna.php"><img src="img/miniatura-2.jpg"></a></div>
                        <p class="chapeu cor-multimidia">Chapeu multimidia</p>
                        <h2><a href="noticia-interna.php">Curro Velho abre inscrições para oficinas</a></h2>
                        <p class="info-not"><img src="img/ico-data.png">10/05/2013 <a href="noticia-interna.php"><img src="img/ico-comentario.png">10 cometários</a></p>
                    <div class="clear"></div>
                    </div>
                    <div class="mb-10">
                        <div class="not-img-1"><a href="noticia-interna.php"><img src="img/miniatura-2.jpg"></a></div>
                        <p class="chapeu cor-multimidia">Chapeu multimidia</p>
                        <h2><a href="noticia-interna.php">Curro Velho abre inscrições para oficinas</a></h2>
                        <p class="info-not"><img src="img/ico-data.png">10/05/2013 <a href="noticia-interna.php"><img src="img/ico-comentario.png">10 cometários</a></p>
                    <div class="clear"></div>
                    </div>
                
                </div><!-- FIM coluna 3 -->
            </div>
        </div>
    </div><!-- FIM SPAN 12 -->
    <div class="span8 visible-desktop">
    	<div class="box-area cor-entretenimento">
            <div class="bg-cor-entretenimento text-center" style="border-bottom:1px solid #fff">
            	<h4 style="margin:0; padding:5px 0 10px 0">CINEMA</h4>
            </div>
            <ul class="box-conteudo-cine">
            	<li>
                	<img src="img/capa-cinema.jpg">
                    <h5 class="text-center">Titulo do filme</h5>
                </li>
                <li>
                	<img src="img/capa-cinema.jpg">
                    <h5 class="text-center">Titulo do filme</h5>
                </li>
                <li>
                	<img src="img/capa-cinema.jpg">
                    <h5 class="text-center">Titulo do filme</h5>
                </li>
                <li>
                	<img src="img/capa-cinema.jpg">
                    <h5 class="text-center">Titulo do filme</h5>
                </li>
                <li>
                	<img src="img/capa-cinema.jpg">
                    <h5 class="text-center">Titulo do filme</h5>
                </li>
            </ul>
        </div>
    </div>
    <div class="span4 visible-desktop">
    	<div class="box-banner"><img src="img/banner.jpg"></div>
    </div>    
    <div class="span12 publicidade-centro  visible-desktop">
    	<img src="img/titulo-public-centro.png">
        <div class="banner-centro-1"><img src="img/banner-centro-1.jpg"></div>
    	<div class="banner-centro-2"><img src="img/banner-centro-2.jpg"></div>
        <div class="banner-centro-3"><img src="img/banner-centro-3.jpg"></div>
    </div><!-- FIM publicidade-centro -->
	
    <div class="span4 visible-desktop">
    	<div class="box-area-2 cor-entretenimento">
        <img src="img/titulo-ensaio-home.jpg">
            <div id="EnsaioCarousel" class="carousel slide">
                  <!-- Itens de carousel -->
                  <div class="carousel-inner">
                    <div class="active item">
                    	<img style="margin:0 auto 10px" src="img/miniatura-ensaio.jpg">
                        <h3>Paula Diocesano</h3>
                        <div class="box-conteudo">
                        	<p>Tema do Ensaio</p>
                        </div>
                    </div>
                    <div class="item">
                    	<img style="margin:0 auto 10px" src="img/miniatura-ensaio.jpg">
                        <h3>Ensaio 2</h3>
                        <div class="box-conteudo">
                        	<p>Tema do Ensaio</p>
                        </div>
                    </div>
                    <div class="item">
                    	<img style="margin:0 auto 10px" src="img/miniatura-ensaio.jpg">
                        <h3>Ensaio 3</h3>
                        <div class="box-conteudo">
                        	<p>Tema do Ensaio</p>
                        </div>
                    </div>
                  </div>
                  <!-- Navegador do carousel -->
                  <a class="carousel-control left" href="#EnsaioCarousel" data-slide="prev"><img src="img/seta-prev.png"></a>
                  <a class="carousel-control right" href="#EnsaioCarousel" data-slide="next"><img src="img/seta-next.png"></a>
            </div>
        </div>
   </div><!-- FIM coluna 1 -->
   <div class="span4 visible-desktop">
    	<div class="box-area-2 cor-dolimoveis">
        <img src="img/titulo-dolimoveis-home.jpg">
            <div id="DolImoveisCarousel" class="carousel slide">
                  <!-- Itens de carousel -->
                  <div class="carousel-inner">
                    <div class="active item">
                    	<a href="empreendimento.php?idimovel=58" target="_blank"><img style="margin:0 auto 10px" src="img/miniatura-imoveis.jpg"></a>
                        <div class="estagio-obra imoveis-cor-pronto"><a href="empreendimento.php?idimovel=58" target="_blank">Obras Iniciadas</a></div>
                        <h3>Imóvel 1</h3>
                        <div class="box-conteudo">
                        	<p>Umarizal / Belém 1 dormitório, sendo 1 suíte - 42m² ou 2 dormitórios, sendo 1 suíte - 56m²</p>
                        </div>
                    </div>
                    <div class="item">
                    	<a href="empreendimento.php?idimovel=58" target="_blank"><img style="margin:0 auto 10px" src="img/miniatura-imoveis.jpg"></a>
                        <div class="estagio-obra imoveis-cor-pronto"><a href="empreendimento.php?idimovel=58" target="_blank">Obras Iniciadas</a></div>
                        <h3>Imóvel 1</h3>
                        <div class="box-conteudo">
                        	<p>Umarizal / Belém 1 dormitório, sendo 1 suíte - 42m² ou 2 dormitórios, sendo 1 suíte - 56m²</p>
                        </div>
                    </div>
                    <div class="item">
                    	<a href="empreendimento.php?idimovel=58" target="_blank"><img style="margin:0 auto 10px" src="img/miniatura-imoveis.jpg"></a>
                        <div class="estagio-obra imoveis-cor-pronto"><a href="empreendimento.php?idimovel=58" target="_blank">Obras Iniciadas</a></div>
                        <h3>Imóvel 1</h3>
                        <div class="box-conteudo">
                        	<p>Umarizal / Belém 1 dormitório, sendo 1 suíte - 42m² ou 2 dormitórios, sendo 1 suíte - 56m²</p>
                        </div>
                    </div>
                  </div>
                  <!-- Navegador do carousel -->
                  <a class="carousel-control left" href="#DolImoveisCarousel" data-slide="prev"><img src="img/seta-prev.png"></a>
                  <a class="carousel-control right" href="#DolImoveisCarousel" data-slide="next"><img src="img/seta-next.png"></a>
            </div>
        </div>
    </div><!-- FIM coluna 2 -->
    <div class="span4">
    	<div class="box-area-2 cor-facebook">
        	<img src="img/titulo-facebook-home.jpg">
            <div class="fb-like-box" data-href="https://www.facebook.com/DOLdiarioonline" data-width="300" data-height="350" data-show-faces="true" data-stream="false" data-show-border="false" data-header="false"></div>
        </div>
   </div><!-- FIM coluna 3 --> 
   <div class="span12 visible-desktop">
   		<div class="box-area cor-dol bd-b">
            <div class="bg-cor-dol" style="border-bottom:1px solid #fff">
            	<h4 style="margin:0; padding:5px 0 10px 10px">BLOGS</h4>
            </div>
        	<ul class="blogs-home">
            	<li class="span3">
                	<div class="cont-blog">
                        <img src="img/img-blog.jpg">
                        <h5>Gerson Nogueira</h5>
                    </div>
                </li>
                <li class="span3">
                	<div class="cont-blog">
                        <img src="img/img-blog.jpg">
                        <h5>Gerson Nogueira</h5>
                    </div>
                </li>
                <li class="span3">
                	<div class="cont-blog">
                        <img src="img/img-blog.jpg">
                        <h5>Gerson Nogueira</h5>
                    </div>
                </li>
                <li class="span3">
                	<div class="cont-blog">
                        <img src="img/img-blog.jpg">
                        <h5>Gerson Nogueira</h5>
                    </div>
                </li>
                <li class="span3">
                	<div class="cont-blog">
                        <img src="img/img-blog.jpg">
                        <h5>Gerson Nogueira</h5>
                    </div>
                </li>
                <li class="span3">
                	<div class="cont-blog">
                        <img src="img/img-blog.jpg">
                        <h5>Gerson Nogueira</h5>
                    </div>
                </li>
                <li class="span3">
                	<div class="cont-blog">
                        <img src="img/img-blog.jpg">
                        <h5>Gerson Nogueira</h5>
                    </div>
                </li>
                <li class="span3">
                	<div class="cont-blog">
                        <img src="img/img-blog.jpg">
                        <h5>Gerson Nogueira</h5>
                    </div>
                </li>
            </ul>
            <div class="clear"></div>
            <div class="bt-ver-mais bg-cor-dol"><a href="#">Clique aqui e veja mais blogs...</a></div>
        </div>
   
   		<div class="box-area cor-shopping bd-b">
            <div class="bg-cor-shopping" style="border-bottom:1px solid #fff">
            	<h4 style="margin:0; padding:5px 0 10px 10px">SHOPPING</h4>
            </div>
        		<iframe src="http://templates.buscape.com/dynatemplate/dol_abadecategorias.html?type=abadecategorias" width="940" height="276" frameborder="0" scrolling="no" name="frameshop"></iframe>
            <div class="clear"></div>
       </div>
    </div>   <!-- FIM span 12 -->  
    
  </div>
</div>
<!-- FIM CORPO -->
{BOX_RODAPE}