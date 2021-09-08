<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header tit-up">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Login</h4>
            </div>
            <div class="modal-body customer-box">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs  justify-content-center">
                    <li><a class="active" href="#Login" data-toggle="tab">Iniciar Sesion</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">

                    <div class="tab-pane active" id="Login">
                        
                        <form method="post" action="login.php" role="form" class="form-horizontal">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input class="form-control input" name="usuario" id="email1" placeholder="Nombre" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input class="form-control" name="clave" id="exampleInputPassword1" placeholder="contraseña" type="password">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-light btn-radius btn-brd grd1">
                                        Ingresar
                                    </button>
                                    <a class="for-pwd" href="javascript:;">Olvidó su contraseña?</a>
                                </div>
                            </div>
                            <p class="text"></p>
                        </form>
                        <script src="script.js" ></script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>