<div id="page-content-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h3>Cadastro de Usuários</h3>
				<form action="<?= base_url() ?>CadastroUsuarios/cadastrar" method="post">
					<div class="row">
						<div class="col-6">
							<div class="form-group">
								<label>Nome</label>
								<input type="text" name="NM_USUARIOcol" class="form-control" placeholder="Digite o nome">
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<label>Email address</label>
								<input type="email" name="EMAIL" class="form-control" placeholder="Digite o email">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-3">
							<div class="form-group">
								<label>RG</label>
								<input type="text" name="NR_RG" class="form-control" placeholder="Digite o RG">
							</div>
						</div>
						<div class="col-3">
							<div class="form-group">
								<label>CPF</label>
								<input type="text" name="NR_CPF" class="form-control" placeholder="Digite o CPF">
							</div>
						</div>
						<div class="col-3">
							<div class="form-group">
								<label>Login</label>
								<input type="text" name="LOGIN" class="form-control" placeholder="Digite o Login">
							</div>
						</div>
						<div class="form-group col-3">
							<div class="form-group">
								<label>Senha</label>
								<input type="text" name="SENHA" class="form-control" placeholder="Digite a Senha">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="form-group col-3">
							<fieldset>
								<label for="exampleSelect1">Permissão</label>
								<select name="CD_PERMISSAO" class="form-control" id="exampleSelect1">
									<option disabled>Usuário</option>
									<option value="2">Administrador</option>
								</select>
							</fieldset>
						</div>
						<div class=" col-3">
							<label for="exampleSelect1">Curso</label>
							<select name="CD_CURSO" class="form-control" id="exampleSelect1">
								<option value="1">Ciência da Computação</option>
								<option value="2">Egenharia da Computação</option>
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
