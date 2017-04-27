<script type="text/javascript">
        jQuery(function($){
   $("#date").mask("99/99/9999");
   $("#cpf").mask("999.999.999-99");
   $("#telefone").mask("(99)9999-9999");
});
    </script>
 </head>    

    <div class="container">
        <div class="register-container">
            <h2>Cadastre-se <small>e aproveite todos os nossos benefícios</small></h2>
                <form action="<?php echo base_url('registrar/finalizar'); ?>" method="post">
                    <div class="<?php echo $error ?>" role="alert"><?php echo validation_errors(); ?></div>
                    
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="text" id="cpf" name="cpf" class="form-control input-lg" placeholder="CPF" tabindex="1" value="<?= set_value('cpf'); ?>">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="text" id="date" name="datanascimento" class="form-control input-lg" tabindex="2" placeholder="Data de Nascimento" value="<?= set_value('datanascimento'); ?>">
                            </div>
                        </div>
                    </div>

                     <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <select name="sexo" class="form-control placeholder input-lg" tabindex="3">
                                    <option value="" disabled selected style="display:none;">Sexo</option>
                                    <option value="<?= set_value('sexo'); ?>">Feminino</option>
                                    <option value="<?= set_value('sexo'); ?>">Masculino</option>                                    
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="text" id="telefone" name="telefone" class="form-control input-lg" placeholder="Telefone" tabindex="4" value="<?= set_value('telefone'); ?>">
                            </div>
                        </div>                        
                    </div>                                

                    <div class="form-group">
                        <input type="text" name="endereco" class="form-control input-lg" placeholder="Endereço" tabindex="5" value="<?= set_value('endereco'); ?>">
                    </div>
                    
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <select name="cidade" class="form-control placeholder input-lg" tabindex="6">
                                    <option value="" disabled selected style="display:none;">Cidade</option>
                                    <?php
                                        foreach ($cidades->result_array() as $row):
                                    ?>
                                        <option value="<?php echo $row['CODCID'] ?>"><?php echo $row['NOMCID'] ?></option> 
                                    <?php
                                        endforeach;
                                    ?>  
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <select name="estado" class="form-control placeholder input-lg" tabindex="6" onchange='BuscarCidade($(this).val())'>>
                                    <option value="" disabled selected style="display:none;">Estado</option>
                                    <?php
                                        foreach ($estados->result_array() as $row):
                                    ?>
                                        <option value="<?php echo $row['CODEST'] ?>"><?php echo $row['NOMEST'] ?></option> 
                                    <?php
                                        endforeach;
                                    ?>  
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2"><button class="btn btn-info btn-lg" style="width:450px" type="submit">Continuar</button></div>
                    </div>
                </form>    
        </div>
    </div> 