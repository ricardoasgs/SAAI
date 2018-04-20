<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <h3>Editar Usuários</h3>
                <form method="post" action="<?= base_url(); ?>EditarUsuarios/salvar_atualizacao">
                    <input type="hidden" id="CD_USUARIO" name="CD_USUARIO" value="<?= $tb_usuario[0]->CD_USUARIO ?>">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label>Nome</label>
                                <input type="text" name="NM_USUARIOcol" class="form-control" value="<?= $tb_usuario[0]->NM_USUARIOcol ?>">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Email address</label>
                                <input type="email" name="EMAIL" class="form-control" placeholder="Digite o email" value="<?= $tb_usuario[0]->EMAIL ?>">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-3">
                            <div class="form-group">
                                <label>RG</label>
                                <input type="text" name="NR_RG" class="form-control" placeholder="Digite o RG" value="<?= $tb_usuario[0]->NR_RG ?>">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label>CPF</label>
                                <input type="text" name="NR_CPF" class="form-control" placeholder="Digite o CPF"value="<?= $tb_usuario[0]->NR_CPF ?>">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label>Login</label>
                                <input type="text" name="LOGIN" class="form-control" placeholder="Digite o Login" value="<?= $tb_usuario[0]->LOGIN ?>">
                            </div>
                        </div>
                        <div class="form-group col-3">
                            <div class="form-group">
                                <label>Senha</label>
                                <input type="PASSWORD" name="SENHA" class="form-control" placeholder="Digite a Senha" value="<?= $tb_usuario[0]->SENHA ?>">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-3">
                            <fieldset>
                                <label for="exampleSelect1">Permissão</label>
                                <select disabled="" name="CD_PERMISSAO" class="form-control" id="exampleSelect1" >
                                    <option selected="true" value="<?= $tb_usuario[0]->CD_PERMISSAO?>">ADM</option>
                                    <option value="2">Administrador</option>
                                </select>
                            </fieldset>
                        </div>
                        <div class=" col-3">
                            <label for="exampleSelect1">Curso</label>
                            <select disabled name="CD_CURSO" disabled class="form-control" id="exampleSelect1">
                                <option selected="true" value="<?= $tb_usuario[0]->CD_CURSO?>">Ciência da Computação</option>
                                <option value="2">Egenharia da Computação</option>
                            </select>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-outline-success">Editar</button>
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
    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>




</body>
</html>
