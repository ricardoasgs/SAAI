<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row titulo-margin">
            <div class="col-lg-2">
                <h3 class="col-lg-12">Bancadas</h3>
            </div>
            <div class="col-lg-2 offset-lg-8">
                <a href="<?= base_url(); ?>CadastroBancadas" class="btn btn-outline-primary col-lg-12">Cadastrar</a>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <table id="bancadas" class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Descrição</th>
                            <th>Quantidade Suportada</th>
                            <th>Laboratório</th>
                            <th>Opções</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($tb_bancada as $banc) { ?>
                            <tr>
                                <td><?= $banc->CD_BANCADA; ?></td>
                                <td><?= $banc->DESC_BANCADA; ?></td>
                                <td><?= $banc->QNTD_SUPORTADA; ?></td>
                                <td><?= $banc->CD_LABORATORIO; ?></td>
                                <td>
                                    <a href="<?= base_url ('VerBancadas/ver/'.$banc->CD_BANCADA)?>" class="btn btn-outline-primary">
                                        Ver
                                    </a>
                                    <a href="<?= base_url ('EditarBancadas/atualizar/'.$banc->CD_BANCADA)?>" class="btn btn-outline-success">
                                        Editar
                                    </a>
                                    <a href="<?= base_url ('ListaBancadas/excluir/'.$banc->CD_BANCADA)?>" class="btn btn-outline-danger" onclick="return confirm('Deseja realmente excluir o bancada?');">
                                        Excluir
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
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

    $(document).ready(function(){
        $('#bancadas').DataTable();
    });
</script>




</body>
</html>
