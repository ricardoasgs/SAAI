<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <h3>Editar Laboratórios</h3>
                <form method="post" action="<?= base_url(); ?>EditarLaboratorios/salvar_atualizacao">
                    <input type="hidden" id="CD_LABORATORIO" name="CD_LABORATORIO" value="<?= $tb_laboratorio[0]->CD_LABORATORIO ?>">
                    <div class="row">
                        <div class="col-5">
                            <div class="form-group">
                                <label>Nome</label>
                                <input type="text" id="NM_LABORATORIO" name="NM_LABORATORIO" value="<?= $tb_laboratorio[0]->NM_LABORATORIO ?>" class="form-control" placeholder="Digite o nome">
                            </div>
                        </div>

                        <div class="col-5">
                            <div class="form-group">
                                <label>Descrição</label>
                                <input type="text" id="DESC_LABORATORIO" name="DESC_LABORATORIO" value="<?= $tb_laboratorio[0]->DESC_LABORATORIO ?>" class="form-control" placeholder="Digite a Descrição">
                            </div>
                        </div>

                        <div class="col-2">
                            <div class="form-group">
                                <label>Quantidade de bancadas</label>
                                <input type="number" id="NR_BANCADAS" name="NR_BANCADAS" value="<?= $tb_laboratorio[0]->NR_BANCADAS ?>" class="form-control" placeholder="Nº de bancadas">
                            </div>
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

    $(document).ready(function () {
        $("#nome").select2();
    });
    $(document).ready(function () {
        $("#curso").select2();
    });
    $(document).ready(function () {
        $("#ambiente").select2();
    });
    $(document).ready(function () {
        $("#periodo").select2();
    });
</script>




</body>
</html>
