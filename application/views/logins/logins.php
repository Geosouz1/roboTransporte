 <div class="login-box">
            <div class="login-logo">
                <p><b>Robo</b>Transporter</p>
            </div>
            <div class="card">
                <div class="card-body login-card-body">
                    <p class="login-box-msg">Login</p>
                    <form action="<?= base_url('validar')?>" method="post">
                        <div class="form-group has-feedback">
                            <input type="input" class="form-control" name="nome" id="nome" placeholder="nome">
                            <span class="fa fa-envelope form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <input type="password" class="form-control" name="senha" id="senha" placeholder="senha">
                            <span class="fa fa-lock form-control-feedback"></span>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <button type="submit" class="btn btn-primary btn-block btn-flat">Entrar</button>
                            </div>
                            <div class="col-6">
                                <a href="<?= base_url('cadastro') ?>" class="btn btn-block btn-danger">
                                    <i class="fa fa-google-plus mr-2"></i> Cadastre-se
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
     

