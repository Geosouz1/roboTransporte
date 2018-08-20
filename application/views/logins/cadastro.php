<div class="register-box">
            <div class="register-logo">
                <p><b>Robo</b>Transporter</p>
            </div>

            <div class="card">
                <div class="card-body register-card-body">
                    <p class="login-box-msg">Registrar</p>

                    <form action="../../index.html" method="post">
                        <div class="form-group has-feedback">
                            <input type="text" class="form-control" id="nome" placeholder="Nome Completo">
                            <span class="fa fa-user form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <input type="login" class="form-control" placeholder="login">
                            <span class="fa fa-envelope form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <input type="password" class="form-control" placeholder="senha">
                            <span class="fa fa-lock form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <input type="password" class="form-control" placeholder="confirmar senha">
                            <span class="fa fa-lock form-control-feedback"></span>
                        </div>
                        <div class="row">
                            <div class="col-8">
                            </div>
                            <!-- /.col -->
                            <div class="col-6">
                                <button type="submit" class="btn btn-primary btn-block btn-flat">Registrar</button>
                            </div>
                            <div class="col-6">
                                <a href="<?= base_url('logins') ?>" class="btn btn-block btn-default">
                                    <i class="fa fa-google-plus mr-2"></i>
                                    Voltar
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.form-box -->
        </div>