<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <h3>Editar de Agendamentos</h3>
                <form method="post" action="<?= base_url(); ?>EditarAgendamentos/salvar_atualizacao">
                    <input type="hidden" id="CD_AGENDAMENTO" name="CD_AGENDAMENTO" value="<?= $tb_agendamento[0]->CD_AGENDAMENTO ?>">
                    <div class="row">

                        <input type="hidden" name="CD_AGENDAMENTO" id="CD_AGENDAMENTO" disabled="" value="<?= $tb_agendamento[0]->CD_AGENDAMENTO; ?>" class="form-control" placeholder="Digite o nome">
                        <div class="col-4">
                            <div class="form-group">
                                <label>Nome</label>
                                <select name="CD_USUARIO" id="nome" class="input-group input-group-sm">
                                    <?php foreach($usuarios as $usuario){ 
                                        if($usuario->CD_USUARIO==$agendamento->CD_USUARIO){
                                    ?>
                                    <option value="<?= $usuario->CD_USUARIO ?>" selected><?= $usuario->NM_USUARIOcol?></option>
                                        
                                        <?php } else { ?>
                                    <option value="<?= $usuario->CD_USUARIO ?>"><?= $usuario->NM_USUARIOcol?></option>
                               
                                        <?php } } ?>
                                </select>
                                
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="form-group">
                                <label>Bancada</label>
                                <select  name="CD_BANCADA" id="bancada" class="input-group input-group-sm">
                                       <?php foreach($bancadas as $bancada){ 
                                        if($bancada->CD_BANCADA==$agendamento->CD_BANCADA){
                                    ?>
                                    <option value="<?= $bancada->CD_BANCADA ?>" selected><?= $bancada->DESC_BANCADA?></option>
                                        
                                        <?php } else { ?>
                                    <option value="<?= $bancada->CD_BANCADA ?>"><?= $bancada->DESC_BANCADA?></option>
                               
                                        <?php } } ?>
                                </select>

                            </div>
                        </div>

                        <div class="col-4">
                            <div class="form-group">
                                <label>Periodo</label>
                                <select  name="CD_PERIODO" id="periodo" class="input-group input-group-sm">
                                    <?php foreach($periodos as $periodo){ 
                                        if($periodo->CD_PERIODO==$agendamento->CD_PERIODO){
                                    ?>
                                    <option value="<?= $periodo->CD_PERIODO ?>" selected><?= $periodo->DESC_PERIODO?></option>
                                        
                                        <?php } else { ?>
                                    <option value="<?= $periodo->CD_PERIODO ?>"><?= $periodo->DESC_PERIODO?></option>
                               
                                        <?php } } ?>
                                </select>

                            </div>
                        </div>

                        <div class="col-3">
                            <div class="form-group">
                                <label>Data do Agendamento</label>
                                <input type="text" name="DT_AGENDAMENTO" id="data_agendamento" value="<?= $tb_agendamento[0]->DT_AGENDAMENTO; ?>" class="form-control" placeholder="Digite o nome">
                            </div>
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
$("#menu-toggle").click(function (e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});

$(document).ready(function () {
    $("#nome").select2();
});

$(document).ready(function () {
    $("#bancada").select2();
});

$(document).ready(function () {
    $("#periodo").select2();
});



</script>




</body>
</html>
