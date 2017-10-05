<div class="col-md-12 col-sm-12 col-xs-12">
	<div class="x_panel">
	  <div class="x_title">
	    <h2>Pacientes</h2>
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
	          <input type="text" name="UserName" required="required" class="form-control col-md-7 col-xs-12">
	        </div>
	      </div>
	      <div class="form-group">
	        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Idade <span class="required">*</span>
	        </label>
	        <div class="col-md-6 col-sm-6 col-xs-12">
	          <input type="text" name="UserAge" required="required" class="form-control col-md-7 col-xs-12">
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
	      <div class="form-group">
	        <label class="control-label col-md-3 col-sm-3 col-xs-12">Sexo</label>
	        <div class="col-md-6 col-sm-6 col-xs-12">
	          <div id="gender" class="btn-group" data-toggle="buttons">
	            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
	              <input type="radio" name="UserSex" value="Masculino"> &nbsp; Masculino &nbsp;
	            </label>
	            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
	              <input type="radio" name="UserSex" value="Feminino"> Feminino
	            </label>
	          </div>
	        </div>
	      </div>
	      <div class="form-group">
	        <label class="control-label col-md-3 col-sm-3 col-xs-12">Metabolismo Basal <span class="required">*</span>
	        </label>
	        <div class="col-md-6 col-sm-6 col-xs-12">
	          <input name="UserMetabolism" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
	        </div>
	      </div>
	      <div class="ln_solid"></div>
	      <div class="form-group">
	        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
	          <button class="btn btn-primary" type="button">Cancelar</button>
			  <button class="btn btn-primary" type="reset">Limpar</button>
	          <button type="submit" name="submit" class="btn btn-success">Enviar</button>
	        </div>
	      </div>

	    </form>
	  </div>
	</div>
</div>	