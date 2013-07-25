<?php include 'head-tpl.php'; ?>
<?php include 'topo-tpl.php'; ?>
<!-- INICIO CORPO -->


<div class="container">
  <div class="row">
    
    <!-- inicio conteudo -->
    <div class="span4">
    	<div class="box-area cor-noticia"></div>
    </div>
    
    <div class="span8">
    	
        <div class="box-area cor-noticia">
        	
            <div class="area-de-login">
                <h1 class="cor-noticia">AREA LOGIN</h1>
                <div class="divisoria"></div>
                <p>Email</p>
                <p><input type="text"></p>
                <p>Senha</p>
                <p><input type="password"></p>
                <p><span><a href="">Esqueci minha senha</a></span><input type="button" class="btn" value="Entrar"></p>
            </div>
            <div class="area-login-cad">
            	<h3 class="cor-noticia">Caso não tenha uma conta, cadastre-se abaixo: </h3>
            	<div class="area-de-login">
            		<button class="btn btn-medium btn-block" type="button"><a href="cadastro.php"><h1 class="cor-noticia">FAÇA SEU CADASTRO</h1></a></button>
                </div>
            </div>
            
        </div>
    </div>
    
   <!-- fim conteudo -->
    
    
      
    
  </div><!-- FIM ROW -->
</div><!-- FIM CONTAINER -->
<!-- FIM CORPO -->
<?php include 'rodape-tpl.php'; ?>