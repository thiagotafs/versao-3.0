<?php include 'head-tpl.php'; ?>
<?php include 'topo-tpl.php'; ?>
<!-- INICIO CORPO -->


<div class="container">
  <div class="row">
    
    <!-- inicio conteudo -->
    <div class="span4">
    	<div class="box-area cor-noticia">
            <div class="box-conteudo">
                <h3 class="cor-noticia">Agilize o seu cadastro</h3>
                <p>Importe seus dados do facebook, Twitter, Yahoo ou do gmail para agilizar seu cadastro.</p>
                <a href="#"><img class="bt-cadastro" src="img/bt-cadastro-face.png"></a>
                <a href="#"><img class="bt-cadastro"  src="img/bt-cadastro-twitter.png"></a>
                <a href="#"><img class="bt-cadastro"  src="img/bt-cadastro-google.png"></a>
                <a href="#"><img class="bt-cadastro"  src="img/bt-cadastro-yahoo.png"></a>
            </div>
        
        </div>
    </div>
    
    <div class="span8"> 
    	<div class="box-area-3">
    		<h2 class="cor-noticia">FORMULÁRIO DE CADASTRO</h2>
                <div class="divisoria"></div>
                <form class="form-horizontal cadastro">
                	<div class="control-group">
                        <label class="control-label" for="inputNome">Nome</label>
                        <div class="controls">
                          <input type="text" id="inputNome">
                        </div>
                  	</div>
                    <div class="control-group">
                        <label class="control-label" for="inputSobrenome">Sobrenome</label>
                        <div class="controls">
                          	<input type="password" id="inputSobrenome" >
                        </div>
                    </div>
                    <div class="control-group">
                    	<label class="control-label inputsexo" style="margin-right:20px" for="inputSexo">Sexo</label>
                        <label class="radio inline">
                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                            Feminino
                        </label>
                        <label class="radio inline">
                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                            Masculino
                        </label>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="inputEmail">Email</label>
                        <div class="controls">
                          <input type="text" id="inputEmail">
                        </div>
                  	</div>
                    <div class="control-group">
                        <label class="control-label" for="inputConfEmail">Confirme Email</label>
                        <div class="controls">
                          <input type="text" id="inputConfEmail">
                        </div>
                  	</div>
                    <div class="control-group">
                        <label class="control-label" for="inputLogin">Login</label>
                        <div class="controls">
                          	<input type="password" id="inputLogin">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="inputPassword">Senha</label>
                        <div class="controls">
                          	<input type="password" id="inputPassword">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="inputConfPassword">Confirma Senha</label>
                        <div class="controls">
                          	<input type="password" id="inputConfPassword">
                        </div>
                    </div>
                     <div class="control-group">
                        <label class="control-label" for="inputConfNasc">Data de nascimento</label>
                        <div class="controls">
                          	<input type="password" id="inputConfNasc">
                        </div>
                    </div>
                    <div class="control-group">
                    	<div class="controls">
                          	<button type="submit" class="btn">Entrar</button>
                    	</div>
                  	</div>
              </form>
         </div>
            
    </div>
    
   <!-- fim conteudo -->
    
    
      
    
  </div><!-- FIM ROW -->
</div><!-- FIM CONTAINER -->
<!-- FIM CORPO -->
<?php include 'rodape-tpl.php'; ?>