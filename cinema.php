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
            <div class="box-titulo bg-cor-entretenimento">
                <div class="icone-titulo" style="margin-right:0; border-right:1px solid #fff"><a href="index.php"><img src="img/icone-home.png"></a></div>
                <div class="navbar">
                	<div class="navbar-inner">
                    	<ul class="nav">
                      		<li class="active"><a href="cinema.php">Início</a></li>
                      		<li><a href="cinema-cartaz.php">Em cartaz</a></li>
                            <li><a href="cinema-trailers.php">Trailers</a></li>
                    	</ul>
                  	</div>
                </div>
                
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
        </div><!-- fim span8 -->
        
        <div class="span4">
        	<div class="box-area cor-entretenimento">
                <div class="bg-cor-entretenimento text-center" style="border-bottom:1px solid #fff">
                    <h4 style="margin:0; padding:5px 0 10px 0">TRAILER</h4>
                </div>
                <object width="300" height="180"><param name="movie" value="http://www.youtube.com/v/_qkQJHGIVqg&amp;fs=1"><param name="allowFullScreen" value="true"><param name="allowscriptaccess" value="always"><embed src="http://www.youtube.com/v/_qkQJHGIVqg&amp;fs=1" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="300" height="180"></object>
                
            </div>
        </div><!-- fim span4 -->
        <div class="clear"></div>
        <div class="span12">
            <div class="box-titulo bg-cor-entretenimento">
                <h4>EM CARTAZ</h4>
            </div>
        </div>
        <div class="span3">
        	<div class="box-cinza text-center">
            	<a href="cinema-interna.php"><img src="img/cartaz-cinema.jpg"></a>
                <h2 class="cor-entretenimento"><a href="cinema-interna.php">Turbo</a></h2>
            </div>
        </div>
        <div class="span3">
        	<div class="box-cinza text-center">
            	<a href="cinema-interna.php"><img src="img/cartaz-cinema.jpg"></a>
                <h2 class="cor-entretenimento"><a href="cinema-interna.php">Turbo</a></h2>
            </div>
        </div>
        <div class="span3">
        	<div class="box-cinza text-center">
            	<a href="cinema-interna.php"><img src="img/cartaz-cinema.jpg"></a>
                <h2 class="cor-entretenimento"><a href="cinema-interna.php">Turbo</a></h2>
            </div>
        </div>
        <div class="span3">
        	<div class="box-cinza text-center">
            	<a href="cinema-interna.php"><img src="img/cartaz-cinema.jpg"></a>
                <h2 class="cor-entretenimento"><a href="cinema-interna.php">Turbo</a></h2>
            </div>
        </div>
        <div class="clear"></div>
        <div class="span12">
            <div class="box-titulo bg-cor-entretenimento">
                <h4>NOTICIAS</h4>
            </div>
        </div>
        <div class="span3">
        	<div class="box-cinza">
            	<a href="noticia-interna.php"><img src="img/miniatura-4.jpg"></a>
                <h4 class="cor-entretenimento"><a href="noticias-interna.php">Titulo noticia</a></h4>
                <p><a href="noticias-interna.php">Sessão Maldita exibe filme gore japonês</a></p>
            </div>
        </div>
        <div class="span3">
        	<div class="box-cinza">
            	<a href="noticia-interna.php"><img src="img/miniatura-4.jpg"></a>
                <h4 class="cor-entretenimento"><a href="noticias-interna.php">Titulo noticia</a></h4>
                <p><a href="noticias-interna.php">Sessão Maldita exibe filme gore japonês</a></p>
            </div>
        </div>
        <div class="span3">
        	<div class="box-cinza">
            	<a href="noticia-interna.php"><img src="img/miniatura-4.jpg"></a>
                <h4 class="cor-entretenimento"><a href="noticias-interna.php">Titulo noticia</a></h4>
                <p><a href="noticias-interna.php">Sessão Maldita exibe filme gore japonês</a></p>
            </div>
        </div>
        <div class="span3">
        	<div class="box-cinza">
            	<a href="noticia-interna.php"><img src="img/miniatura-4.jpg"></a>
                <h4 class="cor-entretenimento"><a href="noticias-interna.php">Titulo noticia</a></h4>
                <p><a href="noticias-interna.php">Sessão Maldita exibe filme gore japonês</a></p>
            </div>
        </div>
        <div class="clear"></div>
        <div class="span12 bd-b cor-entretenimento mb-10 mt-20">
            <div class="bt-ver-mais bg-cor-entretenimento"><a href="#">Clique aqui e veja mais noticias...</a></div>
        </div>
        
     </div><!-- fim row -->
   
   <!-- fim conteudo -->
   </div>
</div>
<!-- FIM CORPO -->
<?php include 'rodape-tpl.php'; ?>