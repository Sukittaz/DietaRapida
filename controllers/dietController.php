<?php

Class dietController extends controller {

	public function __construct() {
        parent::__construct();
        
		$user = new User();
        if($user->isLogged() == false) {
        	header("Location: ".BASE."login");
        	exit;
        }
	}

    public function index() {
        $data = array();   

        $diet = new Diet();

        $data['diet'] = $diet->findAll();

        $this->loadTemplate('diet-list', $data, 'diet');
    }

    public function add() {
        $data = array();  
        $user = new User(); 

        $data['user'] = $user->findAll();

        if (isset($_POST['submit'])) {
            $diet     = New Diet();
            $dietMeal = New DietMeal();

            $str = json_decode($_POST['str']); 
            $order = 1;

            $UserID     = $_POST['UserID'];
            $DietName   = $_POST['DietName'];

            $diet->setDietName($DietName);
            $diet->setUserID($UserID);
            $dietID = $diet->lastInsertId();  

            foreach ($str as $key => $value) {
                foreach ($value as $key2 => $value2) {
                    $dietMeal->setDietID($dietID);
                    $dietMeal->setMealID($value2);
                    $dietMeal->setOrdered($order);
                    $dietMeal->insert(); 

                    $order++;
                }
            } 
            header("Location: ".BASE."diet");
        }
        $this->loadTemplate('diet-add', $data, 'diet');
    }  

    public function edit($id) {
        $data  = array();
        $meal  = new Meal();

        $data['diet'] = $meal->selectDiet($id);

        if (isset($_POST['submit'])) {
            header("Location: ".BASE."diet");
        }
        $this->loadTemplate('diet-edit', $data, 'diet');
    }   

    public function delete($id) {
        $diet = new Diet();

        $diet->deleteDiet($id);
        header("Location: ".BASE."diet");
    }   

    public function report($id) {
      $data = array();
      $Diet = New Diet();
      $mpdf = new mPDF();

      $report[] = $Diet->selectDiet($id);

      foreach ($report[0] as $key => $value) {

        $data['refeicao'][$value->mealname][$value->FoodName]["FoodCal"]           = $value->FoodCal;
        $data['refeicao'][$value->mealname][$value->FoodName]["FoodCarbo"]         = $value->FoodCarbo;
        $data['refeicao'][$value->mealname][$value->FoodName]["FoodProtein"]       = $value->FoodProtein;  
        $data['refeicao'][$value->mealname][$value->FoodName]["FoodFat"]           = $value->FoodFat;   
        $data['refeicao'][$value->mealname][$value->FoodName]["FoodRefAmount"]     = $value->FoodRefAmount;  
        $data['refeicao'][$value->mealname][$value->FoodName]["TypeQuant"]         = $value->quant; 
        $data['refeicao'][$value->mealname][$value->FoodName]["FoodAmount"]        = $value->FoodAmount;   
        $data['refeicao'][$value->mealname][$value->FoodName]["DietName"]          = $value->DietName; 
        $data['refeicao'][$value->mealname][$value->FoodName]["User"]              = $value->user;  
        $data['refeicao'][$value->mealname][$value->FoodName]["userAge"]           = $value->userAge;
        $data['refeicao'][$value->mealname][$value->FoodName]["userSex"]           = $value->userSex;  
        $data['refeicao'][$value->mealname][$value->FoodName]["userMetabolism"]    = $value->userMetabolism;

      }

      ob_start();
      $this->loadView('diet-report', $data, 'diet'); 
      $html = ob_get_contents();
      ob_end_clean();  

      $mpdf->SetDisplayMode('fullpage');   

      $mpdf->WriteHTML($html);
      $mpdf->Output();     
    }

}