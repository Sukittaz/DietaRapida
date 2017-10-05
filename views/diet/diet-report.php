<?php 
  foreach ($refeicao as $key => $value) {
     foreach ($value as $key2 => $value2) {
             
              $DietName       = $value2['DietName'];
              $User           = $value2['User'];
              $UserAge        = $value2['userAge'];
              $UserSex        = $value2['userSex'];
              $UserMetabolism = $value2['userMetabolism'];
    }
  }

  $geralTotalCal      = 0;
  $geralTotalCarbo    = 0;
  $geralTotalProtein  = 0;
  $geralFat           = 0;   
 ?>

<link href="<?php echo BASE; ?>assets/css/report.css" rel="stylesheet">
<div class="x_panel">
  <div class="x_title"> 
    <ul class="nav navbar-right panel_toolbox">
      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
    </ul>
    <div class="clearfix"></div>
  </div>
  <div class="x_content">  
    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post">
      <div class="form-group">
        <div class="cabecalho col-md-6 col-sm-6 col-xs-12">
          Quantificação de Calorias: <?php echo $DietName; ?>
        </div>
        <table style="background-color: #f2f2f2;">
          <tr>
            <th style="border: none !important;">
              Nome:  <?php echo $User; ?> <br> 
              Idade: <?php echo $UserAge; ?> <br>
              Sexo:  <?php echo $UserSex; ?> <br>
              Metabolismo Basal: <?php echo $UserMetabolism; ?>
            </th>
            <th style="border: none !important;">
              <img src="https://1timetracking.com/wp-content/uploads/2016/05/clock-1.png"/ style="margin-left: 400px; float: right; width: 10%;">
            </th>
          </tr>
        </table>            
      </div>      
      <?php foreach ($refeicao as $key => $value):  ?>
      <div class="table-responsive">
        <table class="table table-striped jambo_table bulk_action">
          <thead>
            <tr class="headings">
               <th class="column-title" colspan="8" style="text-align: center;"><?php echo $key ?></th>
            </tr>                   
            <tr class="headings">
              <th class="">Alimento </th>
              <th class="">Proteinas </th>
              <th class="">Carboidratos </th>
              <th class="">Gordura </th>
              <th class="">Calorias </th>
              <th class="">Quantidade </th>
              <th class="">Medida </th>                                    
            </tr>
          </thead>
          <tbody>
            <?php
              $TotalCal      = 0;
              $TotalCarbo    = 0;
              $TotalProtein  = 0;
              $TotalFat      = 0;
            ?>
            <?php foreach ($value as $key2 => $value2): ?> 
            <?php $calc = $value2["FoodAmount"] / $value2["FoodRefAmount"];  ?> 
              
            <tr class="even pointer">
              <td class="infname"><?php echo $key2 ?></td>
              <td class="inf"><?php echo floor($calc*$value2["FoodProtein"]) ?></td>
              <td class="inf"><?php echo floor($calc*$value2["FoodCarbo"]) ?></td>
              <td class="inf"><?php echo floor($calc*$value2["FoodFat"]) ?></td>
              <td class="inf"><?php echo floor($calc*$value2["FoodCal"]) ?></td>
              <td class="inf"><?php echo $value2["FoodAmount"] ?></td>
              <td class="inf"><?php echo $value2["TypeQuant"] ?></td>
            </tr>
            
            <?php  
              $TotalCal      += floor($calc*$value2["FoodCal"]);
              $TotalCarbo    += floor($calc*$value2["FoodCarbo"]);
              $TotalProtein  += floor($calc*$value2["FoodProtein"]);
              $TotalFat      += floor($calc*$value2["FoodFat"]);
            ?>
          <?php endforeach; ?>
          
          <?php 
            $geralTotalCal      += $TotalCal;
            $geralTotalCarbo    += $TotalCarbo; 
            $geralTotalProtein  += $TotalProtein; 
            $geralFat           += $TotalFat;
          ?>
            <tr class="headings">
              <th class="">Total </th>
              <th class=""><?php echo $TotalProtein ?> </th>
              <th class=""><?php echo $TotalCarbo ?> </th>
              <th class=""><?php echo $TotalFat ?> </th>
              <th class=""><?php echo $TotalCal ?> </th>
              <th class=""></th> 
              <th class=""></th>                 
            </tr>                
          </tbody>             
        </table>
      </div>

    <?php endforeach; ?> 
    
      <div class="table-responsive">
         <table class="geral" style="background-color: #f2f2f2;">
            <tr class="headings">
              <th class="">Total Geral </th>
              <th class="">Proteinas:     <?php echo $geralTotalProtein  ?></th>
              <th class="">Carboidratos:  <?php echo $geralTotalCarbo  ?></th>
              <th class="">Gordura:       <?php echo $geralFat  ?></th>  
              <th class="">Calorias:      <?php echo $geralTotalCal  ?></th>                          
            </tr> 
          </table>      
      </div>        
    </form>
  </div>
</div>