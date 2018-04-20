<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <h3>Editar Bancadas</h3>
                <form method="post" action="<?= base_url(); ?>EditarBancadas/salvar_atualizacao">
                    <input type="hidden" id="CD_BANCADA" name="CD_BANCADA" value="<?= $tb_bancada[0]->CD_BANCADA ?>">
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <label>Descrição da Bancada</label>
                                <input type="text" name="DESC_BANCADA" id="DESC_BANCADA" value="<?= $tb_bancada[0]->DESC_BANCADA; ?>" class="form-control" placeholder="Digite o nome">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label  >Quantidade Suportada</label>
                                <input type="number" name="QNTD_SUPORTADA" id="QNTD_SUPORTADA" value="<?= $tb_bancada[0]->QNTD_SUPORTADA; ?>" class="form-control" placeholder="Digite o email">
                            </div>
                        </div>
                        <div class="form-group col-3">
                            <label for="exampleSelect1">Laboratório</label>
                            <select name="CD_LABORATORIO" id="CD_LABORATORIO" value="<?= $tb_bancada[0]->CD_LABORATORIO; ?>" class="form-control">
                                <option value="<?= $tb_bancada[0]->CD_LABORATORIO; ?>"></option>
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
