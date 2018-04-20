<div id="page-content-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h3>Cadastro de Bancadas</h3>
				<form action="<?= base_url() ?>CadastroBancadas/cadastrar" method="post">
					<div class="row">
						<div class="col-4">
							<div class="form-group">
								<label>Descrição</label>
								<input name="DESC_BANCADA" id="DESC_BANCADA" type="text" class="form-control" placeholder="Digite a descrição">
							</div>
						</div>
						<div class="col-3">
							<div class="form-group">
								<label>Quantidade Suportada</label>
								<input name="QNTD_SUPORTADA" id="QNTD_SUPORTADA" type="number" class="form-control" placeholder="Digite a quantidade">
							</div>
						</div>
						<div class=" col-3">
							<label for="exampleSelect1">Laboratório</label>
							<select name="CD_LABORATORIO" id="CD_LABORATORIO" class="form-control" id="exampleSelect1">
								<option value="1">Lab 1</option>
								<option value="2">Lab 2</option>
							</select>
						</div>
					</div>

					<button type="submit" class="btn btn-outline-success">Cadastrar</button>
				</form>



			</div>
		</div>
	</div>
</div>
<!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Menu Toggle Script -->
<script>
$("#menu-toggle").click(function(e) {
	e.preventDefault();
	$("#wrapper").toggleClass("toggled");
});
</script>




</body>
</html>
