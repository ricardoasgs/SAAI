<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row titulo-margin">
            <div class="col-lg-2">
                <h3 class="col-lg-12">Agendamentos</h3>
            </div>
            <div class="col-lg-2 offset-lg-8">
                <a href="<?= base_url(); ?>CadastroAgendamentos" class="btn btn-outline-primary col-lg-12">Cadastrar</a>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <table id="agendamentos" class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Bancada</th>
                            <th>Horários</th>
                            <th>Opções</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($tb_agendamento as $agend) { ?>
                            <tr>
                                <td><?= $agend->CD_AGENDAMENTO; ?></td>
                                <td><?= $agend->DESC_BANCADA; ?></td>
                                <td><?= $agend->NM_USUARIOcol; ?></td>
                                <td>
                                    <a href="<?= base_url ('VerAgendamentos/ver/'.$agend->CD_AGENDAMENTO)?>" class="btn btn-outline-primary">
                                        Ver
                                    </a>
                                    <a href="<?= base_url ('EditarAgendamentos/atualizar/'.$agend->CD_AGENDAMENTO)?>" class="btn btn-outline-success">
                                        Editar
                                    </a>
                                    <a href="<?= base_url ('ListaAgendamentos/excluir/'.$agend->CD_AGENDAMENTO)?>" class="btn btn-outline-danger" onclick="return confirm('Deseja realmente excluir o bancada?');">
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
    $('#agendamentos').DataTable();
});
</script>




</body>
</html>
