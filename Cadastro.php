	<!DOCTYPE html>
	<html lang="pt-br">
		<head>
			<title>loja da Esquina</title>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link type="text/javascript" href="jquery/jquery.min.js"> 

			<link rel="stylesheet" type="text/css" href="css/stylesheetCadastro.css"> 
			<link rel="stylesheet" type="text/css" href="css/stylesheet2.0.css">
			<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
			<script src="jquery/jquery-1.12.3.js"></script>
			<script src="bootstrap/js/bootstrap.min.js"></script>
			<script src="script/pagescript.js"></script>

			<style type="text/css">
			.prod{
				font-size: 50px;
			}

			</style>

		</head>
	<!-- ====================================== -->
	<!-- ====================================== -->
	<!-- ====================================== -->
	<!-- ====================================== -->
	<body>
	  	<div class="container-fluid" id="generalContainer">
	  		<header class="row">
	  			<img src="img/back.jpeg">
			  	<div class="row">
					<div class="col-md-8">
						  <!--NavBar-->
						<nav class="navbar navbar-default navbar-fixed-top">
							<div class="container-fluid">
						  		<div class="navbar-header" style="bor">
						   			<a class="navbar-brand" href="index.php"><span>Oficina Vintage</span></a>
						  		</div>
							   	<ul class="nav navbar-nav" id="searchlogin"> 
								   <li id="search">
								   		<form class="navbar-form navbar-left" role="search">
											<div class="form-group">
									  			<input type="text" class="form-control" placeholder="Search">
											</div>
								  		</form>
									</li> 
						      		<li>
						      			<button id="submit" type="submit" class="btn btn-default">Submit</button>
						       		</li>
						       		<li>
									<button id="loginButton" type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">Login</button>
								   	</li>
									
								</ul>

					  		</div>
						</nav><!--NavBar-->
					</div><!--coluna-->
				</div><!--row navbar-->
				<div class="row">
				<!--=================================================-->
				<!--titulo-->
				<!-- espaçamento-->
				<div class="col-md-1"></div>
				<!-- logo -->
				<div class="col-md-3">
					<div><img id="logo" src="img/vintage.jpg"></div>
				</div>
					<!-- nome -->
				<div class="col-md-5"><h1 class="nome">Oficina</h1>
					<h2 class="nome">
						<span id="e">V</span>
						<span id="esquina">intage</span>
					</h2>
					<div class="slogan"><p><span class="slogan">Diferente pra você, normal pra mim.</span></p></div>
			    </div>
				  <!--titulo-->
				<!-- Modal -->
		  		<div class="modal fade" id="myModal" role="dialog">
		    		<div class="modal-dialog">
		      		<!-- Modal content-->
		      			<div class="modal-content">
		        			<div class="modal-header">
		          				<button type="button" class="close" data-dismiss="modal">&times;</button>
		          				<h4 class="modal-title">Entre na Oficina Vintage
		          				</h4>
		        			</div>
		        			<div class="modal-body">
		          				<div class="row">
		            				<div class="col-md-1" id="forms-login">
		             					<div class="form-group">
		               						<label for="usr">Name:</label>
		               						<input type="text" class="form-control"id="usr">
		            					</div>
		             					<div class="form-group" id="form-body">
		                					<label for="pwd">Password:</label>
		                					<input type="password" class="form-control" id="pwd">
		              					</div>
		             				</div>
		              			<div class="col-md-1" id="ask_cadastro">
		                			<p>Ainda não é cadastrado?<br>
		                  			Cadastre-se agora mesmo!
		                			</p>
		                			<a href="Cadastro.php"><button  type="cadastro" id="cadastro" class="btn btn-default">Cadastro</button></a>
		              			</div>
		          			</div><!--end row-->
		        		</div><!--modalbody-->
		         		<!--modal footer-->
		        	<div class="modal-footer">
		         		 <button type="button" class="btn btn-default" id="loginButton">Login</button>
			       	</div>
			   	</div><!--end myModal-->  
	 		</header>
<!--=================================================================-->

<!--=================================================================-->

<!--=================================================================-->

<!--=================================================================-->
			<article class="Container">
			  	<div class="row">
					<div class="col-md-12" id="ContainerArticle">
						<!-- pills --> 
						<div class="row">
						  <!--inicio lista-->
							<ul class="nav nav-pills" id="navBar">
							  	<li id="lifirst">
							  		<a href="index.php" id="listitem">
							  			<strong>Home</strong>
							  		</a>
								</li>
				  				<li class="dropdown">
					  			<a class="dropdown-toggle" data-toggle="dropdown" href="#" id="listitem">Comprar
					  				<span class="caret"></span>
					  			</a>
					  				<ul class="dropdown-menu">
										<li><a href="produtos.php">Geek</a></li>
										<li><a href="produtos.php">Romântico</a></li>
										<li><a href="produtos.php">Familia</a></li>
										<li><a href="produtos.php">Festas</a></li>                        
					  				</ul>
								</li>
								<li><a href="minhaloja.php" id="listitem">Vender</a></li>
							</ul>
						</div>
						<!-- pills -->
						<div class="col-md-1"></div>
						<div class="col-md-10" class="centerArticle" id="centerArticle">
							<div class="row">

							<h1 class="centerArticle">Junte-se a nós.</h1>
						<hr>
						<div class="col-md-7">

							<!--Forms-->
							<form role="form" name="cadastro" id="form" 
							 method="post" onsubmit="return validateName()">
	 							<div class="form-group">                         
	    							<label for="nome">Nome:</label>
	   								 <input type="nome" class="form-control" id="nome">
	 							</div>
	 							<div class="form-group">
	   								<label for="email">E-mail:</label>
	   							 	<input type="email" class="form-control" id="email">
	  							</div>
	  							<div class="form-group">
	   								<label for="datadenascimento">Data de nascimento:</label>
	   							 	<input type="datadenascimento" class="form-control" id="cpf" >
	  							</div>
	  							<div class="form-group">
	   								<label for="idade">Idade:</label>
	   							 	<input type="cpf" class="form-control" id="cpf" >
	  							</div>
	  							<div class="form-group">
	   								<label for="cpf">CPF_CNPJ:</label>
	   							 	<input type="cpf" class="form-control" id="cpf" >
	  							</div>
	  							<div class="form-group">
	   								<label for="endereco">Endereço:</label>
	   							 	<input type="endereco" class="form-control" id="endereco">
	  							</div>
	  							<div class="form-group">
	   								<label for="telefone">Telefone:</label>
	   							 	<input type="telefone" class="form-control" id="telefone" >
	  							</div>
	  							<div class="form-group">
	   								<label for="celular">Telefone:</label>
	   							 	<input type="telefone" class="form-control" id="telefone" >
	  							</div>
	  							<div class="form-group">
	   								<label for="endereco">Endereço:</label>
	   							 	<input type="endereco" class="form-control" id="endereco">
	  							</div>
	  							<div class="form-group">
	   								<label for="cidade">Cidade:</label>
	   							 	<input type="cidade" class="form-control" id="cidade">
	  							</div>
	  							<div class="form-group">
	   								<label for="estado">Estado:</label>
	   							 	<input type="estado" class="form-control" id="estado">
	  							</div>

	  							<div class="form-group">
	   								<label for="cep">Cep:</label>
	   							 	<input type="cep" class="form-control" id="cep">
	   							 	<a href="http://www.buscacep.correios.com.br/sistemas/buscacep/" target="_blank">Não sabe seu CEP?</a>
	  							</div>
	  							<div>
	  								<button id="submitcad" type="submit" style="margin-bootom: 20px;" class="btn btn-default">Submit</button>
							</form>	
	  							</div>
	  						</div>
	  							<div class="col-md-4" id="secondCol">
	  							<h2> Oficina Vintage</h2>
	  							<hr>
	  							<p>
	  								Descrição de como a loja trabalha.
	  							</p>
	  							</div>

							</div>
	  					<button type="button" action="cadastrofunc.php" class="btn btn-default" id="loginButton">Terminar
					</div>
					</div>

					
							
					<div class="col-md-1" ></div>
					</div><!-- Container article-->
					<div class="col-md-12">
						</div>
					
				</div><!--end row article-->
			</article><!-- fim container article-->
 		</div><!-- fecha container geral-->
			<footer class="container-fluid">
				<div class="row">
			  	<div class="col-md-1"></div>
			  	<div class="col-md-2">
					<p>®Jaderson Nascimento</p>
			  	</div>
			  		<div class="col-md-6" id="footerspace"></div>
			  			<div class="col-md-3">
							<a href="jadersonnascimento@outlook.com">e-mail: jadersonnascimento@outlook.com</a>
			 			 </div>
			  		<div class="col-md-1"></div>
				</div>
			</footer>
	</body>
</html>