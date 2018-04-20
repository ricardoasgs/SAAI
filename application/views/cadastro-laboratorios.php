		<div id="page-content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">

						<h3>Cadastro de Laboratórios</h3>
						<form action="<?= base_url() ?>CadastroLaboratorios/cadastrar" method="post">
							<div class="row">
								<div class="col-5">
									<div class="form-group">
										<label>Nome</label>
                                                                                <input type="text" name="NM_LABORATORIO" class="form-control" placeholder="Digite o nome">
									</div>
								</div>

								<div class="col-5">
									<div class="form-group">
										<label>Descrição</label>
                                                                                <input type="text" name="DESC_LABORATORIO" class="form-control" placeholder="Digite a Descrição">
									</div>
								</div>

								<div class="col-2">
									<div class="form-group">
										<label>Quantidade de bancadas</label>
                                                                                <input type="number" name="NR_BANCADAS" class="form-control" placeholder="Nº de bancadas">
									</div>
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

		$(document).ready(function() { $("#nome").select2(); });
		$(document).ready(function() { $("#curso").select2(); });
		$(document).ready(function() { $("#ambiente").select2(); });
		$(document).ready(function() { $("#periodo").select2(); });
	</script>




</body>
</html>
