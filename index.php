	<!DOCTYPE html>
	<html lang="pt-br">
		<head>
			<title>loja da Esquina</title>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link type="text/javascript" href="jquery/jquery.min.js">  
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
			  	<div class="row">
					<div class="col-md-8">
						  <!--NavBar-->
						<nav class="navbar navbar-default navbar-fixed-top">
							<div class="container-fluid">
						  		<div class="navbar-header" style="bor">
						   			<a class="navbar-brand" href="index.html"><span>Loja da Esquina</span></a>
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
					<div id="logo"></div>
				</div>
					<!-- nome -->
				<div class="col-md-5"><h1 class="nome">Loja da</h1>
					<h2 class="nome">
						<span id="e">E</span>
						<span id="esquina">squina</span>
					</h2>
					<p class="slogan">
						"<span class="slogan">Valendo bem, que mau tem?</span>
					"</p>
			    </div>
				  <!--titulo-->
				<!-- Modal -->
		  		<div class="modal fade" id="myModal" role="dialog">
		    		<div class="modal-dialog">
		      		<!-- Modal content-->
		      			<div class="modal-content">
		        			<div class="modal-header">
		          				<button type="button" class="close" data-dismiss="modal">&times;</button>
		          				<h4 class="modal-title">Entre no Loja da Esquina
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
		                			<a href="Cadastro.html"><button  type="cadastro" id="cadastro" class="btn btn-default">Cadastro</button></a>
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
							  		<a href="index.html" id="listitem">
							  			<strong>Home</strong>
							  		</a>
								</li>
				  				<li class="dropdown">
					  			<a class="dropdown-toggle" data-toggle="dropdown" href="#" id="listitem">Comprar
					  				<span class="caret"></span>
					  			</a>
					  				<ul class="dropdown-menu">
										<li><a href="#">Geek</a></li>
										<li><a href="#">Romântico</a></li>
										<li><a href="#">Familia</a></li>
										<li><a href="#">Festas</a></li>                        
					  				</ul>
								</li>
								<li><a href="minhaloja.html" id="listitem">Vender</a></li>
							</ul>
						</div>
						<!-- pills -->

						<a href="produtos"></a>
						<iframe src="produtos.php"></iframe>
					

					</div><!-- Container article-->
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
							<p>e-mail: jadersonnascimento@outlook.com</p>
			 			 </div>
			  		<div class="col-md-1"></div>
				</div>
			</footer>
	</body>
</html>