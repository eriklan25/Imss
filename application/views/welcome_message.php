<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<body>

<div class="container">
	<br/>
	<center><h2>Adminitrar convenios</h2></center>

	<br/><br/>

	<div class="row">
		<table class="table table-dark">
		  	<thead>
			    <tr>
			    	<th scope="col">Sector</th>
			    	<th scope="col">Tipo Convenio</th>
			    	<th scope="col">Ciclo</th>
			    	<th scope="col">Vigencia</th>
			    	<th scope="col"><a href="<?= base_url() ?>/welcome/Create" class="btn btn-success role="button"><i class="fas fa-plus"></i></a>
			    </tr>
			</thead>
		  	<tbody>
			    

			    <?php
            		foreach ($resultado as $key) {
                ?>
                	<tr id="row<?= $key->idconvenio?>" >
				    	<th scope="row"><?= $key->sector ?></th>
				    	<td><?= $key->tipoconvenio ?></td>
				    	<td><?= $key->ciclo ?></td>
				    	<td><?= $key->vigencia ?></td>
				    	<td><a class="btn btn-primary role="button"><i class="fas fa-edit"></i></a></td>
				    	<td><i class="eliminar fas fa-trash-alt" style="cursor:pointer;" id="<?= $key->idconvenio?>"></i></td>
			    	</tr>
                <?php
            		}
		        ?>
		  	</tbody>
		</table>
	</div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<script type="text/javascript">


	$(".eliminar").click(function(){

		var id = this.id;
		console.log(id);
		$.post("<?= base_url() ?>welcome/eliminar", {id: id}).done(function(data){
			console.log("row" + id);
			$("#row" + id).fadeOut();
		});
	});

	
</script>