<?php

Class ajaxController extends controller {

	public function __construct() {
        parent::__construct();
        
		$user = new User();
        if($user->isLogged() == false) {
        	header("Location: ".BASE."login");
        	exit;
        }
	}

    public function index() {}

    public function searchMeal() {
        $meal = new Meal();

        $string = json_encode($meal->findMealByString($_REQUEST['stringParam']));

        print_r($string);        
    }

    public function deleteDietMeal() {
        $dietMeal = new DietMeal();

        $dietMeal->deleteAjax($_REQUEST['id']);        
    }

    public function insertDietMeal() {
        $dietMeal = new DietMeal();

        $dietMeal->insertAjax($_REQUEST['DietID'], $_REQUEST['MealID']);
    }

    public function findFoodByString(){
        $food = new Food();

        $string = json_encode($food->findAlimentByString($_REQUEST['stringParam']));

        print_r($string);        
    }

    public function insertMealFood() {
        $mealFood = new MealFood();

        $mealFood->insertAjax($_REQUEST['FoodID'], $_REQUEST['MealID'], $_REQUEST['Amount']);        
    }

    public function deleteMealFood() {
        $mealFood = new MealFood();

        $mealFood->deleteAjax($_REQUEST['id']);        
    }
}