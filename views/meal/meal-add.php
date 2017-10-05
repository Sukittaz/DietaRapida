<div class="col-md-12 col-sm-12 col-xs-12">
	<div class="x_panel">
	  <div class="x_title">
	    <h2>Refeição</h2>
	    <ul class="nav navbar-right panel_toolbox">
	      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
	    </ul>
	    <div class="clearfix"></div>
	  </div>
	  <div class="x_content">
	    <br />
	    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post">
	      <div class="form-group">
	        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nome <span class="required">*</span>
	        </label>
	        <div class="col-md-6 col-sm-6 col-xs-12">
	          <input type="text" name="MealName" required="required" class="form-control col-md-7 col-xs-12">
	        </div>
	      </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Obejetivo</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <select class="form-control col-md-7 col-xs-12" name="ObjectiveID">
                <option>Selecione...</option>                
              <?php foreach ($objective as $value): ?>
                <option value="<?php echo  $value->ObjectiveID; ?>"><?php echo  $value->ObjectiveName; ?></option>
              <?php endforeach; ?>                
              </select>
            </div>
          </div>        
          <a class="plus btn btn-app">
                <i class="glyphicon glyphicon-plus"></i> Alimentos
          </a> 
            <div class="bloque_pregunta activo">         
              <div class="respuesta">                                       
                <label class="control-label col-md-1 text-left">Alimentos</label>         
                <label class="control-label col-md-5 text-left">Quantidade</label>     
              </div>      
              <br/>                    
            </div>
          </div>
          <div class="ln_solid"></div>
          <div class="form-group">
          <!-- <i class="btn btn-success terminar" type="submit" value="Submit">Terminar</i> -->
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
              <button class="btn btn-primary" type="button">Cancelar</button>
              <button class="btn btn-primary" type="reset">Limpar</button>
              <input type="hidden" id="str" name="str" value="" /> 
              <button class="btn btn-success send" type="submit" name="submit" value="Submit">Enviar</button>
            </div>
          </div>          
        </form>
      </div>
    </div>
  </div>	
</div>