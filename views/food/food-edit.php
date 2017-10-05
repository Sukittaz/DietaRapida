<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Alimentos </h2>
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
            <input type="text" id="FoodName" name="FoodName" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $food->FoodName; ?>">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Calorias <span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="FoodCal" name="FoodCal" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $food->FoodCal; ?>">
          </div>
        </div>
        <div class="form-group">
          <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Carboidrato</label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input id="FoodCarbo" name="FoodCarbo" class="form-control col-md-7 col-xs-12" type="text" name="middle-name" value="<?php echo $food->FoodCarbo; ?>">
          </div>
        </div>
        <div class="form-group">
          <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Proteina</label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input id="FoodProtein" name="FoodProtein" class="form-control col-md-7 col-xs-12" type="text" name="middle-name" value="<?php echo $food->FoodProtein; ?>">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Gordura <span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input id="FoodFat" name="FoodFat" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text" value="<?php echo $food->FoodFat; ?>">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Quantidade Referência <span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input id="FoodFat" name="FoodRefAmount" class="form-control col-md-7 col-xs-12" required="required" type="text" value="<?php echo $food->FoodRefAmount; ?>">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Tipo Quantidade <span class="required">*</span>
          </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <select id="heard" class="form-control col-md-7 col-xs-12" name='AmountID' required>
                <option>Selecione...</option>   
                <?php foreach ($amount as $value): ?>
                  <option value="<?php echo $value->AmountID; ?>" <?php echo ($food->AmountID==$value->AmountID)?'selected="selected"':''; ?>><?php echo  $value->AmountName; ?></option>
                <?php endforeach; ?>                  
              </select>
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