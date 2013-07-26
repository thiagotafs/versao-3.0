<?php include 'head-tpl.php'; ?>
<?php include 'topo-tpl.php'; ?>
<!-- INICIO CORPO -->


<div class="container">
  <div class="row">
    
    <!-- inicio conteudo -->
    <div class="span12">
    	<div class="box-titulo bg-cor-noticia">
        	<div class="icone-titulo"><a href="index.php"><img src="img/icone-home.png"></a></div>
        	<h4>LOGIN</h4>
        </div>
    	<div class="alert alert-block mt-20">
              <button type="button" class="close" data-dismiss="alert">×</button>
              <h4>Aviso!</h4>
              O conteúdo que você tentou acessar é exclusivo para usuários cadastrados. Faça seu login ou cadastrar-se para ter acesso aos melhores conteúdos.
        </div>
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