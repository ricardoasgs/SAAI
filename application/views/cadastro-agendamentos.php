<div id="page-content-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">

				<h3>Cadastro de Agendamentos</h3>
				<form action="CadastroAgendamentos/cadastrar" method="POST">
					<div class="row">
						<div class="col-4">
							<div class="form-group">
								<label>Nome</label>
								<select name="CD_USUARIO" id="nome" class="input-group input-group-sm">
									<?php foreach($usuarios as $usuario){?>
										<option value="<?= $usuario->CD_USUARIO?>"><?= $usuario->NM_USUARIOcol?></option>
										<?php } ?>
									</select>
								</div>
							</div>

							<div class="col-4">
								<div class="form-group">
									<label>Bancada</label>
									<select name="CD_BANCADA" id="ambiente" class="input-group input-group-sm">
										<?php foreach($bancadas as $bancada){?>
											<option value="<?= $bancada->CD_BANCADA?>"><?= $bancada->DESC_BANCADA?></option>
											<?php } ?>
										</select>
									</div>
								</div>

								<div class="col-4">
									<div class="form-group">
										<label>Período</label>
										<select name="CD_PERIODO" id="periodo" class="input-group input-group-sm">
											<?php foreach($periodos as $periodo){?>
												<option value="<?= $periodo->CD_PERIODO?>"><?= $periodo->DESC_PERIODO?></option>
												<?php } ?>
											</select>
										</div>
									</div>


								</div>

								<div class="row">
									<div class="col-3">
										<div class="form-group">
											<label>Data do agendamento</label>
											<input class="form-control" type="date" name="DT_AGENDAMENTO">
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
