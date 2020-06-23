
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>MEU CEP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<style>
	.avatar_remetente{
		border-radius: 50px;
		margin-left: 20px;
		margin-top: 20px;
	}
	.avatar_candidato{
		
		margin-left: 20px;
		margin-top: 20px;
	}
	.progress{
		margin:20px;
	}
</style>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">
    <img src="logo.png" alt="logo" style="width:40px;">
  </a>
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#" data-toggle="modal" data-target="#candidato">Ver Candidato</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#" data-toggle="modal" data-target="#remetente">Ver Renetente</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#" data-toggle="modal" data-target="#tutorial">Log de Erros</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="readme.php">README</a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="index.php" >Proposta com PHP</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
	  <div id="idAlerta" class="col-sm-12">
	  	
	  </div>
   	 <div class="col-sm-4">
   	 	
   	 </div>
   	 <div class="col-sm-4" style="padding-top: 50px">
   	 	<form >
		<label> Insira o CEP: </label>
		<input id="cep_valor" class="form-control" type="text" name="cep" placeholder="00000000">
		<input  onclick="busca_cep()"class="form-control btn-primary" type="button" value="Enviar">
   	 </div>
   	 <div class="col-sm-4" style="padding:50px;">
   	 		<ul class="list-group list-group-flush">
			  <li id="cep" class="list-group-item">First item</li>
			  <li id="bairro" class="list-group-item">Second item</li>
			  <li id="logradouro" class="list-group-item">Third item</li>
			  <li id="estado" class="list-group-item">Fourth item</li>
			  <li class="list-group-item">
			  	<input  onclick="clear_results()"class="form-control btn-danger" type="button" value="Limpar">
			  </li>
			</ul>
			<hr>
			
   	 </div>
</div>
<script>

	$(document).ready(function(){
	  $(".list-group").ready(function(){
	    $(".list-group").hide();
	  });
	});
	//locais de inserção
	var cep = document.getElementById('cep')
	var bairro = document.getElementById('bairro')
	var logradouro = document.getElementById('logradouro')
	var estado = document.getElementById('estado')

	function busca_cep(){
		var search_cep = document.getElementById('cep_valor').value;
		$.get('reqForJquery.php', {
	       cep : search_cep
	         },function(data){
	         	if(data =='erro'){
				var alerta = '<div class="alert alert-warning alert-dismissible fade show"><button type="button" class="close" data-dismiss="alert">&times;</button> <strong>Ops!</strong> Por favor informe CPF válido.</div>';
					 $("#idAlerta").html(alerta);
					
	         	}else{
	         		$(".list-group").show();
			           $("#cep").html("CEP informado: "+data.cep);
			           $("#bairro").html("Bairro: "+data.bairro);
			           $("#logradouro").html("Rua: "+data.logradouro);
			           $("#estado").html("Estado: "+data.estado);
	         	}      
	         });
	}

	function clear_results(){
		 $(".list-group").hide();
	}
</script>

<!-- The Modal -->
<div class="modal" id="candidato">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Candidato</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
         <div class="row">
		   	 <div class="col-sm-12">
		   	 	<div class="card">
		   	 	 <img class="avatar_candidato" width="60" src="meuavatar.jpg" alt="Card image">
				  <div class="card-body">
				    <h4 class="card-title">Natan Martins Dos Santos</h4>
				    <p class="card-text">
				    	Email : <b>agnusnat.nms@gmail.com</b> <br>
						Telefone: <b>(31) 99888-8752</b>
				    </p>
				    <div class="skills">
				    	<div class="progress">

						  <div class="progress-bar bg-success" role="progressbar" aria-valuenow="40"
						  aria-valuemin="0" aria-valuemax="100" style="width:95%">
						    <b>HTML</b>
						  </div>
						</div>

						<div class="progress">
						  <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50"
						  aria-valuemin="0" aria-valuemax="100" style="width:90%">
						    CSS
						  </div>
						</div>

						<div class="progress">
						  <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="60"
						  aria-valuemin="0" aria-valuemax="100" style="width:87%">
						    Java Script
						  </div>
						</div>

						<div class="progress">
						  <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="60"
						  aria-valuemin="0" aria-valuemax="100" style="width:87%">
						    AJAX
						  </div>
						</div>

						<div class="progress">
						  <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="70"
						  aria-valuemin="0" aria-valuemax="100" style="width:87%">
						    PHP
						  </div>
						</div>
				    </div>
				  </div>
				</div>
		   	 </div>
   		</div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<!-- The Modal -->
<div class="modal" id="remetente">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Remetente</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
         <div class="row">
		   	 <div class="col-sm-12">
		   	 	<div class="card">
		   	 	 <img class="avatar_remetente" width="60" src="pri.jpg" alt="Card image">
				  <div class="card-body">
				    <h4 class="card-title">Priscila Basilio 	</h4>
				    <p class="card-text">
				    	remetente : <b>priscila@bertholdo.com.br</b> <br>
			  			data para entrega : <b>até 25/06/2020 às 12:00h.</b>
				    </p>
				  </div>
				</div>
		   	 </div>
   		</div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>


<!-- The Modal -->
<div class="modal" id="tutorial">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Log de Erros encontrados e corrigidos</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
         <ul class="list-group">
		  <li class="list-group-item">
		  	<form action="idex.php" method="post">
		  	1- 	Tag FORM continha atributo ACTION com caminho de arquivo errado,
				que deveria ser "Index.php".
		  </li>
		  <li class="list-group-item">
		  	2- $address = (get_address($cp)); variavel $cp passada como parâmetro dentro do método get_address() é indefinida. visto que nao existe variável denominada $cp, mas sim uma variável denominada $cep.
		  </li>
		  <li class="list-group-item">
		  	3- echo "Rua: $address->logradoro<br>";
			ao selecionar parte do objeto retornado pela requisição chamado "logradouro",
			foi denominado de forma errada como "logradoro".
		  </li>
		  <li class="list-group-item">
		  	4- echo "Rua: $addres->logradoro<br>";
			variável $addres informada é indefinida
			visto que nao existe variável denominada $addres, mas sim uma variável denominada $address .
		  </li>
		  <li class="list-group-item">
		  5- echo "Estado: $adress->uf<br>";
			variável $adress informada é indefinida
			visto que nao existe variável denominada $adress, mas sim uma variável denominada $address .
		  </li>
		  <li class="list-group-item">
		  	6- $url = "http://viacep.com.br/ws$cep/xml/";
			variável $cep não foi concatenada com o restante da STRING dentro da variável $url corretamente, é necessário usar ".$nome_variavel." para concatenar adequadamente, além da ausência do carácter /
			após "/ws" dentro da variável $url .
		  </li>
		</ul>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

</body>
</html>



