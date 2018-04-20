<body>

    <div id="container">
        <div class="col-4">
            <div class="col-sm-12 col-md-12 main">
                <div class="alert alert-danger text-center" role="alert">
                    Login ou senha inválidos
                </div>
            </div>
            <div class="login-container col-12">
                <h1 class="text-center">Login</h1>
                <form method="post" action="<?= base_url(); ?>Login/logar">
                    <div class="form-group">
                        <input type="text" name="LOGIN" id="LOGIN" class="form-control" placeholder="Digite o Email">
                    </div>
                    <div class="form-group">
                        <input type="text" name="SENHA" id="SENHA" class="form-control" placeholder="Digite a senha">
                    </div>
                    <button href="" type="submit" class="btn btn btn-primary btn-block">Entrar</button>
                </form>
            </div>
        </div>

    </div>

    <!-- JavaScript -->
    <script src="<?= base_url(); ?>assets/js/jquery.js"></script>
    <script src="<?= base_url(); ?>assets/bootstrap/tether-1.4.0/dist/js/tether.min.js"></script>
    <script src="<?= base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>