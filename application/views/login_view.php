    <div class="container">
        <div class="login-container">
            <div id="output"></div>
            <div class="avatar"><img src="<?php echo base_url("$avatar"); ?>" alt="" style="width:100px; height: 100px;" /></div>
            <div class="form-box">
                <form action="<?php echo base_url('Login'); ?>" method="post">
                    <?php echo validation_errors(); ?>
                    <input name="username" type="text" placeholder="Usuário">
                    <input name="password" type="password" placeholder="Senha">
                    <button class="btn btn-info btn-block login" type="submit" name="submitForm" value="entrar">Entrar</button>
                    <button class="btn btn-info btn-block login" type="submit" name="submitForm" value="registrar">Cadastrar</button>
                </form>    
            </div>
        </div>  
    </div> 