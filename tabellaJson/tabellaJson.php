<?php
	if(isset($_REQUEST["cognome"])){
		$cognome = $_REQUEST["cognome"];
	}
    if(isset($_REQUEST["nome"])){

		$nome = $_REQUEST["nome"];
	}
?>

<!--doctype html-->
<html lang="it">
<head>

<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="author" content="Giordano Mattia">
		<meta name="description" content="Tabella Cognome Nome Json">
		
		<title>Cognome Nome Tabella Json</title>
		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="css/custom.css" rel="stylesheet">
		<script href="vendor/bootstrap/js/bootstrap.js"></script>
		<script type="application/javascript" src="js/script.js"></script>
		<script type="application/javascript" src="vendor/jquery/jquery-3.4.1.js"></script>
        
</head>


<body>
	<div class="container-fluid">
		<div class="row">
					<div class="col-sm-4">						
					</div>
					<div class="col-sm-4">
						<form method="GET" action="tabellaJson.php">
							
							<div class="form-group input-group">
								<input type="text" id="nome" name="nome" class="form-control" placeholder="nome" />
							</div>

							<div class="form-group input-group">
								<input type="text" id="cognome" name="cognome" class="form-control" placeholder="cognome" />
							</div>
							<div class="form-group">
								<input type="submit" value="filtra" class="btn btn-secondary form-control"/> 
							</div>

						</form>
					</div>
					<div class="col-sm-4">						
					</div>
		</div>
	<div class="row">
		<div class="col-sm-2">						
	</div>
<?php
        $string = file_get_contents("./cognomeNome.json");
        $json_a=json_decode($string,true);
		?>

<div class="col-sm-8 yellow">
	<table class="table table-hover">
	<tr>
		<th>cognome</th>
		<th>nome</th>
	</tr>
<?php foreach($json_a as $key => $value) { ?>
	<tr>
			<td><?php 
					if(isset($nome)){
						if($value[0]==$nome){
							echo $value[0];
						}
					}else{
						echo $value[0];
					} 
             ?></td>
            <td><?php 
                    if(isset($cognome)){
						if($value[1]==$cognome){
							echo $value[1];
						}
					}else{
						echo $value[1];
					}
             ?></td>
        </tr>
	<?php } ?>
	
</div>
	<div class="col-sm-4">						
	</div>
</div>
    </body>

</html>
				