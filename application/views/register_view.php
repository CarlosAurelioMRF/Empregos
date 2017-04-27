    <div class="container">
        <div class="register-container">
            <h2>Cadastre-se <small>e aproveite todos os nossos benefícios</small></h2>
                <form action="<?php echo base_url('Registrar/Validar'); ?>" method="post">
                    <div class="<?php echo $error ?>" role="alert"><?php echo validation_errors(); ?></div>
                    
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="text" name="first_name" class="form-control input-lg" placeholder="Nome" tabindex="1" value="<?= set_value('first_name'); ?>">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="text" name="last_name" class="form-control input-lg" placeholder="Sobrenome" tabindex="2" value="<?= set_value('last_name'); ?>">
                            </div>
                        </div>
                    </div>
            
                    <div class="form-group">
                        <input type="text" name="username" class="form-control input-lg" placeholder="Usuário" tabindex="3" value="<?= set_value('username'); ?>">
                    </div>
                    
                    <div class="form-group">
                        <input type="email" name="email" class="form-control input-lg" placeholder="Email" tabindex="4" value="<?= set_value('email'); ?>">
                    </div>
                    
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="password" name="password" class="form-control input-lg" placeholder="Senha" tabindex="5" value="<?= set_value('password'); ?>">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="password" name="password_confirmation" class="form-control input-lg" placeholder="Confirmar Senha" tabindex="6" value="<?= set_value('password_confirmation'); ?>">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-4 col-sm-3 col-md-3">
                            <span class="button-checkbox">
                                <button type="button" class="btn" data-color="info" tabindex="7">Eu concordo</button>
                                <input type="checkbox" name="t_and_c" id="t_and_c" class="hidden" value="0">
                            </span>
                        </div>
                        <div class="col-xs-8 col-sm-9 col-md-9">
                            Ao clicar em <strong class="label label-primary">Registrar</strong>, você concorda com os <a href="#" data-toggle="modal" data-target="#t_and_c_m">Termos e Condições</a> estabelecidos por este site, incluindo uso de Cookie.
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2"><button class="btn btn-info btn-lg" style="width:450px" type="submit">Continuar</button></div>
                    </div>
                </form>    
        </div>
    </div>

<!-- Modal -->
<div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Termos & Condições</h4>
            </div>
            <div class="modal-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Eu concordo</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->    