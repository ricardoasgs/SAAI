		<div id="page-content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<h3>Detalhes de Usuários</h3>
						<div class="row">
							<div class="col-4">
								<div class="card ">
									<div class="card-header">
										Descrição
									</div>
									<div class="card-block">
										<p class="card-text"><?= $tb_bancada[0]->DESC_BANCADA ?></p>
									</div>
								</div>
							</div>
							<div class="col-3">
								<div class="card ">
									<div class="card-header">
										Quantidade Suportada
									</div>
									<div class="card-block">
										<p class="card-text"><?= $tb_bancada[0]->QNTD_SUPORTADA ?></p>
									</div>
								</div>
							</div>
							<div class="col-3">
								<div class="card ">
									<div class="card-header">
										Laboratório
									</div>
									<div class="card-block">
										<p class="card-text"><?= $tb_bancada[0]->CD_LABORATORIO ?></p>
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
