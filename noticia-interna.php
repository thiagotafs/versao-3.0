<?php include 'head-tpl.php'; ?>
<?php include 'topo-tpl.php'; ?>
<!-- INICIO CORPO -->
<script type="text/javascript">
	 $(document).ready(function(){
        $('.carousel').carousel();
		
		 $('#myTab a').click(function (e) {
	   e.preventDefault();
	   $(this).tab('show');
	 })
	 })

</script>
    

<div class="container">
  <div class="row">
    
    <!-- inicio conteudo -->
    <div class="span12">
    	<div class="box-titulo bg-cor-noticia">
        	<div class="icone-titulo"><a href="index.php"><img src="img/icone-home.png"></a></div>
        	<h4>NOTÍCIAS / POLÍCIA</h4>
        </div>
    </div>
    
    <div class="span8 mt-20">
        <h2 class="cor-noticia">Curro Velho abre inscrições para oficinas</h2>
        <p class="info-not mb-0"><img src="img/ico-data.png">10/05/2013 <a href="noticia-interna.php"><img src="img/ico-comentario.png">10 cometários</a></p>
        <ul class="compartilhar-not">
        	<p>Compartilhar:</p>
            <li class="comp-twitter"><a id="twitter-link" href="http://twitter.com/home?status=DESCRIÇÃO" target="_blank">Twitter</a></li>
        	<li class="comp-facebook"><a href="http://www.facebook.com/sharer.php?s=100&amp;p[title]=ESCREVA O TITULO&amp;p[summary]=ESCREVA A MENSAGEM&amp;p[url]=ESCREVA O ENDEREÇO DA PÁGINA QUE VOCÊ QUER COMPARTILHAR&amp;p[images][0]=COLOCAR O ENDEREÇO DA IMAGEM PARA APARECER NO COMPARTILHAMENTO" target="_blank">Facebook</a>
            </li>
            <li class="comp-google"><a href="https://plus.google.com/share?url=ENDEREÇO DA PÁGINA" onclick="javascript:window.open(this.href,
  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">Google +</a></li>
        </ul>
        <div class="imprimir-not"><a href="#">imprimir noticia</a></div>
        <div class="font-size">Tamanho da fonte: <a href="javascript:zoomTexto('conteudo-noticia',-1)" class="menos" title="Diminuir o tamanho da fonte">A-</a> <a href="javascript:zoomTexto('conteudo-noticia',1)" class="mais" title="Aumentar o tamanho da fonte">A+</a></div>
        
        <div class="clear"></div>
        <div class="not-img-int">
        <a href="noticia-interna.php"><img src="img/miniatura-4.jpg"></a>
        <div class="credito-foto">(Foto: Fulano de Tal)</div>
        </div>
        <p>Moradores do município de Santa Maria do Pará, no nordeste do Estado, interditaram um trecho da rodovia BR-010, durante uma manifestação reivindicando a instalação de lombadas eletrônicas na pista.</p>
        <p>Segundo a Polícia Civil local, cerca de 100 pessoas participam do ato, iniciado pela manhã. Os moradores atearam fogo a pneus colocados na rodovia e bloquearam a pista com veículos. Ainda de acordo com policiais, o protesto é motivado por um acidente ocorrido na semana passada, em que um motociclista, que estava sem capacete, caiu da moto e faleceu.</p>
        <p>Uma equipe da Polícia Militar está negociando com os manifestantes, e a pista já está liberada.</p>
        <p>(Gustavo Dutra/DOL)</p>
        
        <div class="box-mult-not cor-multimidia">
            <div class="bg-cor-multimidia" style="border-bottom:1px solid #fff">
            	<h4 style="margin:0; padding:10px 0 10px 10px">IMAGENS</h4>
                <div class="ver-mais"><a href="galeria-interna.php">Ver galeria</a></div>
            </div>
            <div class="box-conteudo">
            	<div class="row-fluid">
                	<div class="span4"><a href="galeria-interna.php"><img src="img/miniatura-4.jpg"></a></div>
                    <div class="span4"><a href="galeria-interna.php"><img src="img/miniatura-4.jpg"></a></div>
                    <div class="span4"><a href="galeria-interna.php"><img src="img/miniatura-4.jpg"></a></div>
                </div>
            </div>
        </div> <!-- fim box-mult-not -->
        <div class="box-mult-not cor-multimidia">
            <div class="bg-cor-multimidia" style="border-bottom:1px solid #fff">
            	<h4 style="margin:0; padding:10px 0 10px 10px">VIDEO</h4>
                <div class="ver-mais"><a href="galeria-interna.php">Ver video</a></div>
            </div>
            <div class="box-conteudo">
            	<div class="row-fluid">
                	<div class="span4"><a href="video-interna.php"><img src="img/miniatura-4.jpg"></a></div>
                    <div class="span8">
                    	<h3><a href="video-interna.php">Titulo do video</a></h3>
                        <p><a href="video-interna.php">descrição do video</a></p>
                    </div>
                </div>
            </div>
        </div> <!-- fim box-mult-not -->
        <div class="box-mult-not cor-multimidia">
            <div class="bg-cor-multimidia" style="border-bottom:1px solid #fff">
            	<h4 style="margin:0; padding:10px 0 10px 10px">AUDIO</h4>
            </div>
            <div class="box-conteudo">
            	<div class="audio_player">
                    PLAYER
                </div>
            </div>
        </div> <!-- fim box-mult-not -->
        
        
        
        
                
        
        <div class="box-titulo">
        	<h3>Leia também...</h3>
        </div>
        
        <ul class="ler-tambem">
        	<li>
            	<h4 class="cor-noticia">22/07 - 10:40hs - </h4>
                <p><strong><a href="noticia-interna.php">Curro Velho abre inscrições para oficinas</a></strong></p>
                <div class="clear"></div>
            </li>
            <li>
            	<h4 class="cor-noticia">22/07 - 10:40hs - </h4>
                <p><strong><a href="noticia-interna.php">Curro Velho abre inscrições para oficinas</a></strong></p>
                <div class="clear"></div>
            </li>
            <li>
            	<h4 class="cor-noticia">22/07 - 10:40hs - </h4>
                <p><strong><a href="noticia-interna.php">Curro Velho abre inscrições para oficinas</a></strong></p>
                <div class="clear"></div>
            </li>
            <li>
            	<h4 class="cor-noticia">22/07 - 10:40hs - </h4>
                <p><strong><a href="noticia-interna.php">Curro Velho abre inscrições para oficinas</a></strong></p>
                <div class="clear"></div>
            </li>
            <li>
            	<h4 class="cor-noticia">22/07 - 10:40hs - </h4>
                <p><strong><a href="noticia-interna.php">Curro Velho abre inscrições para oficinas</a></strong></p>
                <div class="clear"></div>
            </li>
        </ul>
        
        <div class="box-titulo-coment bg-cor-noticia">
        	<h4>22 Comentários</h4>
            <div class="comentarios-titulo"><a href="#comentar" role="button" data-toggle="modal">Faça seu comentário</a></div>
            <div class="clear"></div>
        </div>
        
        <!-- Modal -->
            <div id="comentar" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-header bg-cor-noticia">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">Comentar</h3>
              </div>
              <div class="modal-body">
              	<form class="form-horizontal">
                	<div class="control-group">
                        <label class="control-label" for="inputNome">Nome</label>
                        <div class="controls">
                          <input type="text" id="inputNome">
                        </div>
                  	</div>
                    <div class="control-group">
                        <label class="control-label" for="inputEmail">Email</label>
                        <div class="controls">
                          <input type="text" id="inputEmail">
                        </div>
                  	</div>
                    <div class="control-group">
                        <label class="control-label" for="inputMensagem">Comentário</label>
                        <div class="controls">
                          <textarea rows="3"></textarea>
                        </div>
                  	</div>
              </form>
              
              </div>
              <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
                <button class="btn btn-primary">Comentar</button>
              </div>
            </div>
        
        <ul class="comentarios">
        	<li>
            <p><span class="cor-noticia"><strong>1 - Fulano de Tal</strong></span> - 22/07/2013 às 08:22</p>
            <p>Engraçado que esses ETERNOS SOFREDORES teimam em dizer que ganham sempre de nós. Não entendo esses DEBILOIDES. Esse ano demos de 3 nos camisas sujas, nós com 8 garotos da base, com direito a OLÉ no final.kkkkkk... e demos outra SURRA na final do primeiro turno, lembram da cabeçada do Raul, Raul,Raul, Raul,Rauuuuulllll...kkkk. SAI PRA LÁ SEUS MORTOS..kkkkkkkkkk</p>
            </li>
            <li>
            <p><span class="cor-noticia"><strong>2 - Fulano de Tal</strong></span> - 22/07/2013 às 08:22</p>
            <p>Engraçado que esses ETERNOS SOFREDORES teimam em dizer que ganham sempre de nós. Não entendo esses DEBILOIDES. Esse ano demos de 3 nos camisas sujas, nós com 8 garotos da base, com direito a OLÉ no final.kkkkkk... e demos outra SURRA na final do primeiro turno, lembram da cabeçada do Raul, Raul,Raul, Raul,Rauuuuulllll...kkkk. SAI PRA LÁ SEUS MORTOS..kkkkkkkkkk</p>
            </li>
            <li>
            <p><span class="cor-noticia"><strong>3 - Fulano de Tal</strong></span> - 22/07/2013 às 08:22</p>
            <p>Engraçado que esses ETERNOS SOFREDORES teimam em dizer que ganham sempre de nós. Não entendo esses DEBILOIDES. Esse ano demos de 3 nos camisas sujas, nós com 8 garotos da base, com direito a OLÉ no final.kkkkkk... e demos outra SURRA na final do primeiro turno, lembram da cabeçada do Raul, Raul,Raul, Raul,Rauuuuulllll...kkkk. SAI PRA LÁ SEUS MORTOS..kkkkkkkkkk</p>
            </li>
            <li>
            <p><span class="cor-noticia"><strong>4 - Fulano de Tal</strong></span> - 22/07/2013 às 08:22</p>
            <p>Engraçado que esses ETERNOS SOFREDORES teimam em dizer que ganham sempre de nós. Não entendo esses DEBILOIDES. Esse ano demos de 3 nos camisas sujas, nós com 8 garotos da base, com direito a OLÉ no final.kkkkkk... e demos outra SURRA na final do primeiro turno, lembram da cabeçada do Raul, Raul,Raul, Raul,Rauuuuulllll...kkkk. SAI PRA LÁ SEUS MORTOS..kkkkkkkkkk</p>
            </li>
            <li>
            <p><span class="cor-noticia"><strong>5 - Fulano de Tal</strong></span> - 22/07/2013 às 08:22</p>
            <p>Engraçado que esses ETERNOS SOFREDORES teimam em dizer que ganham sempre de nós. Não entendo esses DEBILOIDES. Esse ano demos de 3 nos camisas sujas, nós com 8 garotos da base, com direito a OLÉ no final.kkkkkk... e demos outra SURRA na final do primeiro turno, lembram da cabeçada do Raul, Raul,Raul, Raul,Rauuuuulllll...kkkk. SAI PRA LÁ SEUS MORTOS..kkkkkkkkkk</p>
            </li>
            <div class="clear"></div>
        </ul>
        
        
        <div class="box-paginas">
        	<div class="pagination">
               <div class="pagina">1 de 10</div>
               <ul class="cor-noticia">
                	<li class="disabled"><a href="#"><</a></li>
               		<li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">></a></li>
                 </ul>
            </div>
            <div class="clear"></div>
         </div>
        
    </div><!-- fim span 8 -->
    <!-- fim conteudo -->
    
    <!-- inicio lateral -->
    <div class="span4">
    	<?php include 'inc/box/lateral/lateral-int-tpl.php'; ?>
    </div>
    <!-- fim lateral -->
    
      
    
  </div>
</div>
<!-- FIM CORPO -->
<?php include 'rodape-tpl.php'; ?>