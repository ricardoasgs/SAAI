<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row titulo-margin">
            <div class="col-lg-2">
                <h3 class="col-lg-12">Laboratórios</h3>
            </div>
            <div class="col-lg-2 offset-lg-8">
                <a href="<?= base_url(); ?>CadastroLaboratorios" class="btn btn-outline-primary col-lg-12">Cadastrar</a>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <table id="laboratorios" class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Laboratório</th>
                            <th>Descrição</th>
                            <th>Número de bancadas</th>
                            <th>Opções</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($tb_laboratorio as $lab) { ?>
                            <tr>
                                <td><?= $lab->CD_LABORATORIO; ?></td>
                                <td><?= $lab->NM_LABORATORIO; ?></td>
                                <td><?= $lab->DESC_LABORATORIO; ?></td>
                                <td><?= $lab->NR_BANCADAS; ?></td>
                                <td>
                                    <a href="<?= base_url ('VerLaboratorios/ver/'.$lab->CD_LABORATORIO) ?>" class="btn btn-outline-primary">
                                        Ver
                                    </a>
                                    <a href="<?= base_url ('EditarLaboratorios/atualizar/'.$lab->CD_LABORATORIO) ?>" class="btn btn-outline-success">
                                        Editar
                                    </a>
                                    <a href="<?= base_url ('ListaLaboratorios/excluir/'.$lab->CD_LABORATORIO) ?>" class="btn btn-outline-danger" onclick="return confirm('Deseja realmente excluir o usuário?');">
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
        $('#laboratorios').DataTable();
    });
</script>




</body>
</html>
