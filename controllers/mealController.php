<?php

Class mealController extends controller {

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
        $meal = new Meal();

        $data['meal'] = $meal->findAll();   
        
        $this->loadTemplate('meal-list', $data, 'meal');
    }

    public function add() {
        $data      = array();
        $objective = new Objective();

        $data['objective'] = $objective->findAll();

        if (isset($_POST['submit'])) {
            $str = json_decode($_POST['str']); 

            $MealName = $_POST["MealName"];
            $Obj      = $_POST["ObjectiveID"];


            $MealFood = New MealFood();
            $Meal   = New Meal(); 
            $Meal->setMealName($MealName);
            $Meal->setObj($Obj);
            $MealID = $Meal->lastInsertId();

            foreach($str as $key => $value)
            {      
                foreach ($value as $key2 => $value2) {
                
                    $FoodID = $value2->food;
                    $Amount = $value2->amount;

                    $MealFood->setFoodID($FoodID);
                    $MealFood->setMealID($MealID);
                    $MealFood->setFoodAmount($Amount);
                    $MealFood->insert();        
                }
            }  
            header("Location: ".BASE."meal");
        }
        $this->loadTemplate('meal-add', $data, 'meal');
    }

    public function edit($id) {
        $data = array();    
        $meal = new Meal();

        $data['meal'] = $meal->returnMeal($id);

        if (isset($_POST['submit'])) {
            header("Location: ".BASE."meal");
        }        

        $this->loadTemplate('meal-edit', $data, 'meal');
    }

    public function delete($id){
        $meal = new Meal();

        $meal->deleteMealFood($id);
        header("Location: ".BASE."meal");
    }

}