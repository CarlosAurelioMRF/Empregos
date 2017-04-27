<p>
<a href="<?php echo base_url('painel/adicionarVaga'); ?>" class="btn btn-primary btn-md"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Adicionar Vaga</a><br/>
</p>
<table id="ghatable" class="display table table-bordered table-stripe" cellspacing="0" width="100%">
<thead>
     <tr>
          <th>Código</th>
          <th>Cargo</th>
          <th>Vagas Disponíveis</th>
          <th>Ativo</th>
          <th>Opções</th>
     </tr>
</thead>
<tbody>
<?php

     foreach($properties->result_array() as $row):
?>
     <tr>
          <td><?php echo $row['CODVAG'] ?></td>
          <td><?php echo $row['NOMVAG'] ?></td>
          <td><?php echo $row['DISVAG'] ?></td>
          <td><?php if ($row['STTVAG'] == 1) echo 'Sim'; else echo 'Não'?></td>
          <td>
          <a href="update/<?php echo $row['CODVAG'] ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Editar</a>
          <a onclick="return confirm('Tem certeza que deseja deletar essa vaga?');" href="delete/<?php echo $row['CODVAG'] ?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Deletar</a>
          </td>
     </tr>
<?php
     endforeach;
?>
</tbody>
</table>	