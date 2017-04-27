<a href="<?php echo base_url('painel/vagas'); ?>" class="btn btn-success btn-md"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Voltar</a>
<p><br/></p>

<div class="panel panel-default">
  <div class="panel-body">
		<form role="form" action="<?php echo base_url('painel/salvarVaga'); ?>" method="post">
		  <div class="form-group">
		    <label for="nm">Vaga</label>
		    <input type="text" class="form-control" name="nomevaga" placeholder="Digite o nome da vaga">
		  </div>
		  <div class="form-group">
		    <label for="tl">Vagas Disponíveis</label>
		    <input type="tel" class="form-control" name="qtdvaga" placeholder="Coloque a quantidade de vagas disponíveis">
		  </div>
		  <button type="submit" name="saveVaga" class="btn btn-default">Cadastrar</button>
		</form>