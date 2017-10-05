<?php

Class foodController extends controller {

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
        $food = new Food();

        $data['food'] = $food->FindAll();    
        
        $this->loadTemplate('food-list', $data, 'food');
    }

    public function add() {
      $data   = array();  
      $amount = new Amount();
      $food   = new Food();

      $data['amount'] = $amount->FindAll();

      if(isset($_POST['register'])){
        $food->setFoodName($_POST['FoodName']);
        $food->setFoodCal($_POST['FoodCal']);
        $food->setFoodCarbo($_POST['FoodCarbo']);
        $food->setFoodProtein($_POST['FoodProtein']);
        $food->setFoodFat($_POST['FoodFat']);
        $food->setFoodRefAmount($_POST['FoodRefAmount']);
        $food->setAmountID($_POST['AmountID']);

        $food->insert();

        header("Location: ".BASE."food");    
      }
      $this->loadTemplate('food-add', $data, 'food');
    }

    public function edit($id) {
      $data   = array();
      $food   = new Food();
      $amount = new Amount();

      $data['food']   = $food->selectById($id);
      $data['amount'] = $amount->FindAll();

      if(isset($_POST['submit'])){
          $food->setFoodName($_POST['FoodName']);
          $food->setFoodCal($_POST['FoodCal']);
          $food->setFoodCarbo($_POST['FoodCarbo']);
          $food->setFoodProtein($_POST['FoodProtein']);
          $food->setFoodFat($_POST['FoodFat']);
          $food->setFoodRefAmount($_POST['FoodRefAmount']);
          $food->setAmountID($_POST['AmountID']);

          $food->update($id);

          header("Location: ".BASE."food");    
      }     
      $this->loadTemplate('food-edit', $data, 'food');

    }

    public function delete($id) {
        $data = array();   
        $food = new Food();
        $food->delete($id);

        header("Location: ".BASE."food");            
    }
}