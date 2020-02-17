<body>
	<div class="container">
		<br/>
		<center><h2>Crear convenio</h2></center>

	<form action="<?= base_url() ?>/welcome/insert_entry" method="post">
	  <div class="form-group">
	    <label for="exampleInputEmail1">Sector</label>
	    <input type="text" name="sector" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Tipo de convenio</label>
	    <input name="tipoconvenio" type="text" class="form-control" id="exampleInputPassword1">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Grado académico</label>
	    <input name="grado" type="text" class="form-control" id="exampleInputPassword1">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Ciclo académico</label>
	    <input name="ciclo" type="text" class="form-control" id="exampleInputPassword1">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Carrera</label>
	    <input name="carrera" type="text" class="form-control" id="exampleInputPassword1">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Institucíón académica</label>
	    <input name="institucion" type="text" class="form-control" id="exampleInputPassword1">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Vigencia</label>
	    <input name="vigencia" type="text" class="form-control" id="exampleInputPassword1">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Delegación</label>
	    <input name="delegacion" type="text" class="form-control" id="exampleInputPassword1">
	  </div>
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
	</div>
</body>