<?php include 'head-tpl.php'; ?>
<?php include 'topo-tpl.php'; ?>
<!-- INICIO CORPO -->

<!-- CODE SLIDER -->
<link rel="stylesheet" href="css/destaque.css">
<script src="js/slides.min.jquery.js"></script> 
<script>
		$(function(){
			$('#slides').slides({
				preload: true,
				preloadImage: 'img/destaque/loading.gif',
				play: 5000,
				pause: 2500,
				hoverPause: true,
				animationStart: function(current){
					$('.caption').animate({
						bottom:-35
					},100);
					if (window.console && console.log) {
						// example return of current slide number
						console.log('animationStart on slide: ', current);
					};
				},
				animationComplete: function(current){
					$('.caption').animate({
						bottom:0
					},200);
					if (window.console && console.log) {
						// example return of current slide number
						console.log('animationComplete on slide: ', current);
					};
				},
				slidesLoaded: function() {
					$('.caption').animate({
						bottom:0
					},200);
				}
			});
		});
	</script> 
<!-- CODE SLIDER --> 

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
    <!--inicio do destaque-->
    	<div class="row visible-desktop">
       		<div class="span4">
     			<?php include 'destaque-cat.php'; ?>
            </div>
        </div>
     
    <!-- fim destaque-->
        <div class="row">
       		<div class="span4">
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
                     <h2><a href="noticia-interna.php">Curro Velho abre inscrições para oficinas</a></h2>
                     <p class="info-not"><img src="img/ico-data.png">10/05/2013 <a href="noticia-interna.php"><img src="img/ico-comentario.png">10 cometários</a></p>
                    <div class="clear"></div>
                </div> 
                <div class="border-b mb-10">
                    <p class="chapeu cor-noticia">Chapeu noticia</p>
                    <div class="not-img-1"><a href="noticia-interna.php"><img src="img/miniatura-2.jpg"></a></div>
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
                     <div class="not-img-1"><a href="noticia-interna.php"><img src="img/miniatura-2.jpg"></a></div>
                     <h2><a href="noticia-interna.php">Curro Velho abre inscrições para oficinas</a></h2>
                     <p class="info-not"><img src="img/ico-data.png">10/05/2013 <a href="noticia-interna.php"><img src="img/ico-comentario.png">10 cometários</a></p>
                    <div class="clear"></div>
                </div> 
           </div><!-- fim coluna1 -->
           <div class="span4">
                <div class="border-b mb-10">
                    <p class="chapeu cor-noticia">Chapeu noticia</p>
                    <div class="not-img-1"><a href="noticia-interna.php"><img src="img/miniatura-2.jpg"></a></div>
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
                     <div class="not-img-1"><a href="noticia-interna.php"><img src="img/miniatura-2.jpg"></a></div>
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
                    <div class="not-img-1"><a href="noticia-interna.php"><img src="img/miniatura-2.jpg"></a></div>
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
                     <h2><a href="noticia-interna.php">Curro Velho abre inscrições para oficinas</a></h2>
                     <p class="info-not"><img src="img/ico-data.png">10/05/2013 <a href="noticia-interna.php"><img src="img/ico-comentario.png">10 cometários</a></p>
                    <div class="clear"></div>
                </div> 
           </div><!-- fim coluna2 -->
       </div><!-- fim row -->
   
   </div><!-- fim span 8 -->
   <!-- fim conteudo -->
    
    <!-- inicio lateral -->
    <div class="span4">
    	<?php include 'lateral-int.php'; ?>
    </div>
    <!-- fim lateral -->
    
    <div class="span12 bd-b cor-noticia mb-10">
	    <div class="bt-ver-mais bg-cor-noticia"><a href="#">Clique aqui e veja mais noticias...</a></div>
    </div>
    
      
    
  </div>
</div>
<!-- FIM CORPO -->
<?php include 'rodape-tpl.php'; ?>