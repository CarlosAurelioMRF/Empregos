<nav class="navbar navbar-default" role="navigation">
   <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" 
         data-target="#example-navbar-collapse">
         <span class="sr-only">Toggle navigation</span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url('login'); ?>"><span class="glyphicon glyphicon-home"></span> Empregos</a>
   </div>
   <div class="collapse navbar-collapse" id="example-navbar-collapse">
      <ul class="nav navbar-nav">
         <li class="<?php echo $vagas ?>"><a href="<?php echo base_url('painel/vagas'); ?>">Vagas</a></li>
         <li class="<?php echo $curriculos ?>"><a href="#">Currículos</a></li>
         <li class="<?php echo $editar ?>"><a href="#">Alterar Dados</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      	<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#">
			<span class="glyphicon glyphicon-user"></span> <?php echo $usuario ?> <b class="caret"></b></a>
			<ul class="dropdown-menu">
               <li><a href="#">Editar Conta</a></li>
               <li><a href="#">Configurações</a></li>
               <li class="divider"></li>
               <li><a href="#">Ajuda</a></li>
            </ul>
		</li>	
        <li><a href="<?php echo base_url().'login/destroy'; ?>"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
   </div>
</nav>

    <div class="container">
      <div class="painel-container">
         <h1><?php echo $pagina ?></h1>    