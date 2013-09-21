<!-- INICIO TOPO -->
<div class="navbar-wrapper topo">
  <div class="container">
  	<div class="super-banner visible-desktop"><div id="zonatopo"></div></div>
    <a class="logo" href="inicio.php"><img src="img/logo.png"></a>
    <div class="navbar menu">
      <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      
       		<!-- Modal -->
            <div id="login" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-header bg-cor-noticia">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">Login</h3>
              </div>
              <div class="modal-body">
              
              <form class="form-horizontal box-cadastro">
                	<div class="control-group">
                        <label class="control-label" for="inputNome">Email</label>
                        <div class="controls">
                          <input type="text" id="inputNome">
                        </div>
                  	</div>
                    <div class="control-group">
                        <label class="control-label" for="inputEmail">Senha</label>
                        <div class="controls">
                          <input type="text" id="inputEmail">
                        </div>
                        <p><a href="#">Esqueci minha senha</a></p><input class="bt-login btn" type="button" value="Entrar">
                  	</div>
                    <div class="login-cad">
                    	<button class="btn btn-large btn-block" type="button">Faça seu cadastro</button>
                	</div>
              </form>
               
                
                
              </div>
            </div>
            
            <!-- Modal -->
            <div id="pesquisa" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-header bg-cor-noticia">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">Pesquisa</h3>
              </div>
              <div class="modal-body box-pesquisa">
              	<form class="form-search">
                      <div class="input-append">
                        <input type="text" class="span2 search-query item-pesquisa">
                        <button type="submit" class="btn"><!--<i class="icon-search icon-white"></i>-->Pesquisar</button>
                      </div>
                 </form>
              </div>
              <div class="modal-footer">
                <a href="#" class="btn">Cancelar</a>
              </div>
            </div>
            
      <script>
      $(document).ready(function(e) {
      	
	 	$('.menu-sub').hover(function(){
			$('#'+$(this).attr('tipo')+'-sub').css('display','block');
			},function(){
				});
	 	
		$('.dropdown').hover(function(){
			},function(){
				$('.dropdown-menu').css('display','none');
				});
		// SUB MENU
		
	  })
     </script>
      
      <div class="nav-collapse collapse">
        <ul class="nav">
         
       
          <li class="dropdown">
          
          <a href="http://www.diarioonline.com.br/dol3/capa-subcategoria.php?nIdCategoria=6" class="menu-not menu-sub" tipo="not">NOTICIAS</a>
          <ul class="dropdown-menu" id="not-sub"  role="menu" aria-labelledby="dropdownMenu">
                  <li><a tabindex="-1" href="capa-subcategoria.php?nIdCategoria=6">Pará</a></li>
                  <li><a tabindex="-1" href="capa-subcategoria.php?nIdCategoria=16">Polícia</a></li>
                  <li><a tabindex="-1" href="capa-subcategoria.php?nIdCategoria=5">Brasil</a></li>
                  <li><a tabindex="-1" href="capa-subcategoria.php?nIdCategoria=4">Mundo</a></li>
                  <li><a tabindex="-1" href="capa-subcategoria.php?nIdCategoria=8">Tecnologia</a></li>
				  <li><a tabindex="-1" href="capa-subcategoria.php?nIdCategoria=39">Concursos</a></li>
                  
          </ul>
        
          </li>
          
          <li><a href="capa-subcategoria.php?nIdCategoria=19" class="menu-esp menu-sub" tipo="esp">ESPORTES</a></li>
           <ul class="dropdown-menu" id="esp-sub"  role="menu" aria-labelledby="dropdownMenu">
                  <li><a tabindex="-1" href="capa-subcategoria.php?nIdCategoria=6">Futebol Pará</a></li>
                  <li><a tabindex="-1" href="capa-subcategoria.php?nIdCategoria=16">Futebol Brasil</a></li>
                  <li><a tabindex="-1" href="capa-subcategoria.php?nIdCategoria=5">Futebol Mundo</a></li>
                  <li><a tabindex="-1" href="capa-subcategoria.php?nIdCategoria=4">Copa das confederações</a></li>
                  <li><a tabindex="-1" href="capa-subcategoria.php?nIdCategoria=8">Outros esportes</a></li>
          </ul>
          
          <li><a href="cinema.php" class="menu-ent menu-sub" tipo="ent">ENTRETENIMENTO</b></a></li>
          <ul class="dropdown-menu" id="ent-sub"  role="menu" aria-labelledby="dropdownMenu">
                  <li><a tabindex="-1" href="capa-subcategoria.php?nIdCategoria=6">Agito</a></li>
                  <li><a tabindex="-1" href="capa-subcategoria.php?nIdCategoria=16">Balada e Badalados</a></li>
                  <li><a tabindex="-1" href="capa-subcategoria.php?nIdCategoria=5">Cinema</a></li>
                  <li><a tabindex="-1" href="capa-subcategoria.php?nIdCategoria=4">Ensaio</a></li>
                  <li><a tabindex="-1" href="capa-subcategoria.php?nIdCategoria=8">Fama</a></li>
                  <li><a tabindex="-1" href="capa-subcategoria.php?nIdCategoria=8">Games</a></li>
                  <li><a tabindex="-1" href="capa-subcategoria.php?nIdCategoria=8">Cultura</a></li>
                  <li><a tabindex="-1" href="capa-subcategoria.php?nIdCategoria=8">Entreternimento</a></li>
          </ul>
          <li><a href="multimidia.php" class="menu-mult menu-sub" tipo="mult">MULTIMIDIA</a></li>
          <ul class="dropdown-menu" id="mult-sub"  role="menu" aria-labelledby="dropdownMenu">
                  <li><a tabindex="-1" href="capa-subcategoria.php?nIdCategoria=6">DOL TV</a></li>
                  <li><a tabindex="-1" href="capa-subcategoria.php?nIdCategoria=16">Áudios</a></li>
                  <li><a tabindex="-1" href="capa-subcategoria.php?nIdCategoria=5">Imagens</a></li>
                  <li><a tabindex="-1" href="capa-subcategoria.php?nIdCategoria=4">Vídeos</a></li>
          </ul>
          <li><a href="#" class="menu-edi">ED. ELETRÔNICA</a></li>
          <li><a class="menu-bt inline" href="#login" role="button" data-toggle="modal" title="Login"><img src="img/ico-login.png" width="20" height="20"></a></li>
          <li><a class="menu-bt inline" href="#pesquisa" role="button" class="btn" data-toggle="modal" title="Pesquisar"><img src="img/ico-busca.png" width="20" height="20"></a></li>
       	  
        </ul>
        
        
        
      </div>
    </div>
  </div>
</div>
<!-- FIM TOPO --> 