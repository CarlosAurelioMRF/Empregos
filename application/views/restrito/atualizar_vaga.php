<a href="<?php echo base_url('painel/vagas'); ?>" class="btn btn-success btn-md"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Voltar</a>
<p><br/></p>


<?php 
	foreach ($properties->result_array() as $row){ 
?>
<div class="panel panel-default">
	<div class="panel-body">
		<form role="form" action="<?php echo base_url('painel/atualizarVaga'); ?>" method="post">
			<div class="form-group">
		    	<label for="nm">Código</label>
		    	<input type="text" class="form-control" placeholder="Nome" tabindex="1" readonly="readonly" name="codigo" value="<?php echo $row['CODVAG'] ?>">
		  	</div>	
		  	<div class="form-group">
		    	<label for="nm">Vaga</label>	
		    	<input type="text" class="form-control" placeholder="Nome" tabindex="2" name="nomevaga" value="<?php echo $row['NOMVAG'] ?>">
		  	</div>
			
			<div class="row">	
		  		<div class="col-xs-12 col-sm-6 col-md-6">	
		  			<div class="form-group">
		    			<label for="tl">Vagas Disponíveis</label>
		    			<input type="tel" class="form-control" name="qtdvaga" value="<?php echo $row['DISVAG'] ?>">
		  			</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">	
		  			<div class="form-group">
		    			<label for="gd">Ativo</label>
		    			<select class="form-control" name="status">
		      				<option value="0"  <?=($row['STTVAG'] == '0')?'selected':''?> >Não</option>
		      				<option value="1"  <?=($row['STTVAG'] == '1')?'selected':''?> >Sim</option>
		    			</select>
		  			</div>
				</div>
			</div>

		  	<button type="submit" name="updateVaga" class="btn btn-default">Atualizar</button>
		</form>
<?php
	}
?>