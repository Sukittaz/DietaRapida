<?php 

// echo "<pre>";
// print_r($meal);
// exit;

 ?>




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
            <input type="text" name="MealName" MealID="<?php echo $meal[0]->MealID ?>" required="required" value="<?php echo $meal[0]->MealName; ?>" class="form-control col-md-7 col-xs-12 meal">
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
              <?php foreach ($meal as $value): ?>
              <div class="col-md-12 newLineMeal">
                <div class="col-md-5">
                  <div class="row">
                    <input type="text" idAliment="<?php echo $value->FoodID ?>" id="comi" class="respuesta food" autocomplete="off" required="required" value="<?php echo $value->FoodName; ?> " readonly>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="row">
                    <input type="text" MealID="<?php echo $value->MealID ?>" class="respuesta amount text-left" required="required" value='<?php echo $value->FoodAmount; ?>' readonly> 
                  </div>
                </div>
                <div class="col-md-1">
                  <i class="borrar fa fa-minus-circle" onclick="deletar(this);"></i>
                </div>
              </div>   
              <?php endforeach; ?>                                  
            </div>
          </div>
          <div class="ln_solid"></div>
          <div class="form-group">
          <!-- <i class="btn btn-success terminar" type="submit" value="Submit">Terminar</i> -->
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