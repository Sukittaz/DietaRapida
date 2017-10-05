<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Dieta </h2>
      <ul class="nav navbar-right panel_toolbox">
        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <br/>
      <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post">
        <div class="modal-body">
            <label class="control-label">Dieta</label>         
            <input type="text" name="DietName" class="form-control preguntaF" required="required"><br><br>
            <label class="control-label">Usuário</label>
             <select required class="select2_single form-control" style="margin-bottom: 40px;" name="UserID" tabindex="-1">
              <option value="">Selecione</option> 
             <?php foreach ($user as $value): ?>
              <option value="<?php echo $value->UserID; ?>"><?php echo  $value->UserName; ?></option>
              <?php endforeach; ?>
            </select>  
      <div class="form-group">
        <a class="pluss btn btn-app">
              <i class="glyphicon glyphicon-plus"></i> Refeições
        </a> 
          <div class="new-field">         
            <div class="respuesta">                                       
              <label class="control-label col-md-1 text-left">Refeições</label>            
            </div>      
            <br/>                    
          </div>
      </div>            
        </div>
        <div class="ln_solid"></div>
        <div class="form-group">
        <!-- <i class="btn btn-success terminar" type="submit" value="Submit">Terminar</i> -->
          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
            <button class="btn btn-primary" type="button">Cancelar</button>
            <button class="btn btn-primary" type="reset">Limpar</button>
            <input type="hidden" id="str" name="str" value="" /> 
            <button class="btn btn-success submit" type="submit" name="submit" value="Submit">Enviar</button>
          </div>
        </div>          
      </form>
    </div>
  </div>
</div>