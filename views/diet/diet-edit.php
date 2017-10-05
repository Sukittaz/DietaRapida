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
        <div>
            <label class="control-label">Dieta</label>         
            <input type="text" name="DietName" class="form-control diet" required="required" DietID="<?php echo $diet[0]->DietID ?>" value="<?php echo $diet[0]->DietName ?>"><br><br>
              <div class="form-group">
                <a class="pluss btn btn-app" id="teste">
                      <i class="glyphicon glyphicon-plus"></i> Refeições
                </a> 
                  <div class="new-field">         
                    <div class="respuesta">                                       
                      <label class="control-label col-md-1 text-left">Refeições</label>            
                    </div>      
                    <br/>  
                    <?php foreach ($diet as $value2): ?>
                    <div class="col-md-12 newLine">
                      <div class="col-md-5">
                        <div class="row">
                          <input type="text" mealID="<?=$value2->MealID?>" id="comi" class="meal" autocomplete="off" required="required" value="<?php echo $value2->MealName; ?> " readonly>
                        </div>
                      </div>
                      <div class="col-md-1">
                        <i class="borrar fa fa-minus-circle" onclick="deletar_elemento(this);"></i>
                      </div>
                    </div>  
                    <?php endforeach; ?>                               
                  </div>
              </div>            
        </div>
        <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
            <button class="btn btn-primary" type="button">Cancelar</button>
            <button class="btn btn-primary" type="reset">Limpar</button>
            <input type="hidden" id="str" name="str" value="" /> 
            <button class="btn btn-success terminar" type="submit" name="submit">Enviar</button>
          </div>
        </div>          
      </form>
    </div>
  </div>
</div>  



