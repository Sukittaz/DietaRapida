<?php

Class MealFood extends DB {


	protected $table = 'mealfood';
	private $FoodID;
	private $MealID;
	private $FoodAmount;

	public function setFoodID($FoodID){
		$this->FoodID = $FoodID;
	}

	public function setMealID($MealID){
		$this->MealID = $MealID;
	}	

	public function setFoodAmount($FoodAmount){
		$this->FoodAmount = $FoodAmount;
	}		

	public function insert(){

		$sql = "INSERT INTO $this->table (FoodID, MealID, FoodAmount) VALUES (:FoodID, :MealID, :FoodAmount)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':FoodID', $this->FoodID);
		$stmt->bindParam(':MealID', $this->MealID);
		$stmt->bindParam(':FoodAmount', $this->FoodAmount);		

		return $stmt->execute();
	}

	public function update($id){

		$sql = "UPDATE $this->table SET FoodID = :FoodID WHERE MealID = :MealID";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':FoodID', $FoodID);
		$stmt->bindParam(':MealID', $id);

		return $stmt->execute();
		
	}

	public function deleteAjax($id){
		$sql = "DELETE FROM $this->table WHERE FoodID = :FoodID";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':FoodID', $id);

		return $stmt->execute();
	}

	public function insertAjax($FoodID, $MealID, $Amount){

		$sql = "INSERT INTO $this->table (FoodID, MealID, FoodAmount) VALUES (:FoodID, :MealID, :FoodAmount)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':FoodID', $FoodID);
		$stmt->bindParam(':MealID', $MealID);
		$stmt->bindParam(':FoodAmount', $Amount);		

		return $stmt->execute();
	}

}