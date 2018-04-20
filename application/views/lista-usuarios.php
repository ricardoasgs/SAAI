<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row titulo-margin">
            <div class="col-lg-2">
                <h3 class="col-lg-12">Usuários</h3>
            </div>
            <div class="col-lg-2 offset-lg-8">
                <a href="<?= base_url(); ?>CadastroUsuarios" class="btn btn-outline-primary col-lg-12 ">Cadastrar</a>
            </div>
        </div>
        <br>

        <div class="row">
            <div class="col-lg-12">
                <table id="usuarios" class="table ">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Login</th>
                            <th>Último Agendamento</th>
                            <th>Opções</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($tb_usuario as $usu) { ?>
                            <tr>
                                <td><?= $usu->CD_USUARIO; ?></td>
                                <td><?= $usu->NM_USUARIOcol; ?></td>
                                <td><?= $usu->EMAIL; ?></td>
                                <td><?= $usu->LOGIN; ?></td>
                                <td><?= $usu->DT_ULT_AGEND; ?></td>
                                <td>
                                    <a href="<?= base_url ('VerUsuarios/ver/'.$usu->CD_USUARIO) ?>" class="btn btn-outline-primary">
                                        Ver
                                    </a>
                                    <a href="<?= base_url ('EditarUsuarios/atualizar/'.$usu->CD_USUARIO) ?>" class="btn btn-outline-success">
                                        Editar
                                    </a>
                                    <a href="<?= base_url ('ListaUsuarios/excluir/'.$usu->CD_USUARIO)?>" class="btn btn-outline-danger" onclick="return confirm('Deseja realmente excluir o usuário?');">
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
    $('#usuarios').DataTable();
});
</script>




</body>
</html>
