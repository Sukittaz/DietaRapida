<div style="padding-left: 10px;">
  <a style="width: 110px;" href="<?php echo BASE; ?>amount/add" class="btn btn-info">
    <i class="fa fa-plus"></i> Criar
  </a>  
</div>

<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Tipo Quantidade<small>Alimentos</small></h2>
      <ul class="nav navbar-right panel_toolbox">
        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
        <li><a class="close-link"><i class="fa fa-close"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content"> 
      <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th>Nome</th>
            <th>Editar</th>              
            <th>Excluir</th>              
          </tr>
        </thead>
        <tbody>
          <?php foreach ($amount as $value): ?>
            <tr>
              <td><?php echo  $value->AmountName; ?></td>         
              <td><a class='glyphicon glyphicon-edit' style='text-align:center;display:block;' href="<?php echo BASE; ?>amount/edit/<?php echo $value->AmountID; ?>"/></td>
              <td><a class='glyphicon glyphicon-remove' href="<?php echo BASE; ?>amount/delete/<?php echo $value->AmountID; ?>"/></td>                
            </tr>             
          <?php endforeach; ?>
        </tbody>
      </table>    
    </div>
  </div>
</div>