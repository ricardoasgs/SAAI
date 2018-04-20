<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h3>Detalhes de agendamentos</h3>
                <div class="row">
                    <div class="col-3">
                        <div class="card ">
                            <div class="card-header">
                                ID do Usuário
                            </div>
                            <div class="card-block">
                                <p class="card-text"><?= $agendamento->NM_USUARIOcol ?> </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card ">
                            <div class="card-header">
                                Bancada
                            </div>
                            <div class="card-block">
                                <p class="card-text"><?= $agendamento->DESC_BANCADA ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card ">
                            <div class="card-header">
                                Período
                            </div>
                            <div class="card-block">
                                <p class="card-text"><?= $agendamento->DESC_PERIODO  ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card ">
                            <div class="card-header">
                                Data do agendamento
                            </div>
                            <div class="card-block">
                                <p class="card-text"><?= $agendamento->DT_AGENDAMENTO  ?></p>
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
