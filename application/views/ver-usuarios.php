<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h3>Detalhes de Usuários</h3>
                <div class="row titulo-margin">
                    <div class="col-6">
                        <div class="card ">
                            <div class="card-header">
                                Nome
                            </div>
                            <div class="card-block">
                                <p class="card-text"><?= $tb_usuario[0]->NM_USUARIOcol ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card ">
                            <div class="card-header">
                                Email
                            </div>
                            <div class="card-block">
                                <p class="card-text"><?= $tb_usuario[0]->EMAIL ?></p>
                            </div>
                        </div>
                    </div>

                </div>
                <br>
                <div class="row titulo-margin">
                    <div class="col-3">
                        <div class="card ">
                            <div class="card-header">
                                RG
                            </div>
                            <div class="card-block">
                                <p class="card-text"><?= $tb_usuario[0]->NR_RG ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card ">
                            <div class="card-header">
                                CPF
                            </div>
                            <div class="card-block">
                                <p class="card-text"><?= $tb_usuario[0]->NR_CPF ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card ">
                            <div class="card-header">
                                Login
                            </div>
                            <div class="card-block">
                                <p class="card-text"><?= $tb_usuario[0]->LOGIN ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card ">
                            <div class="card-header">
                                Permissão
                            </div>
                            <div class="card-block">
                                <p class="card-text"><?= $tb_usuario[0]->CD_PERMISSAO == 1 ? 'Usuario' : 'Administrador'; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row titulo-margin">
                    <div class="col-3">
                        <div class="card ">
                            <div class="card-header">
                                Curso
                            </div>
                            <div class="card-block">
                                <p class="card-text"><?= $tb_usuario[0]->CD_CURSO == 1 ? 'Ciência da Computação' : 'Engenharia da Computação'; ?></p>
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
    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>




</body>
</html>
