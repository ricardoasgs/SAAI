		<div id="page-content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<h3>Detalhes de laboratórios</h3>
						<div class="row">
							<div class="col-4">
								<div class="card ">
									<div class="card-header">
										Nome
									</div>
									<div class="card-block">
										<p class="card-text"><?= $tb_laboratorio[0]->NM_LABORATORIO ?></p>
									</div>
								</div>
							</div>
							<div class="col-4">
								<div class="card ">
									<div class="card-header">
										Descrição
									</div>
									<div class="card-block">
										<p class="card-text"><?= $tb_laboratorio[0]->DESC_LABORATORIO ?></p>
									</div>
								</div>
							</div>
							<div class="col-4">
								<div class="card ">
									<div class="card-header">
										Número de bancadas
									</div>
									<div class="card-block">
										<p class="card-text"><?= $tb_laboratorio[0]->NR_BANCADAS ?></p>
									</div>
								</div>
							</div>
						</div>
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
