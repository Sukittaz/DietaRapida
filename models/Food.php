<?php

Class Food extends DB {

	protected $table = 'food';
	private $FoodID;
	private $FoodName;
	private $FoodCal;
	private $FoodCarbo;
	private $FoodProtein;
	private $FoodFat;
	private $FoodRefAmount;
	private $AmountID;

	public function setFoodName($FoodName){
		$this->FoodName = $FoodName;
	}

	public function setFoodCal($FoodCal){
		$this->FoodCal = $FoodCal;
	}	

	public function setFoodCarbo($FoodCarbo){
		$this->FoodCarbo = $FoodCarbo;
	}

	public function setFoodProtein($FoodProtein){
		$this->FoodProtein = $FoodProtein;
	}

	public function setFoodFat($FoodFat){
		$this->FoodFat = $FoodFat;
	}				

	public function setFoodRefAmount($FoodRefAmount){
		$this->FoodRefAmount = $FoodRefAmount;
	}	

	public function setAmountID($AmountID){
		$this->AmountID = $AmountID;
	}	

	public function findAll(){
		
		$sql  = "SELECT * FROM $this->table";
		$stmt = DB::prepare($sql); 
		$stmt->execute();

		return $stmt->fetchAll();
	}	

	public function selectById($FoodID) {
		$sql = "SELECT * FROM $this->table WHERE FoodID = :FoodID";
		$stm = DB::prepare($sql);
		$stm->bindParam(':FoodID', $FoodID);
		$stm->execute();

		return $stm->fetch();		
	}		

	public function insert(){

		$sql = "INSERT INTO $this->table (FoodName, FoodCal, FoodCarbo, FoodProtein, FoodFat, FoodRefAmount, AmountID) VALUES (:FoodName, :FoodCal,  :FoodCarbo, :FoodProtein, :FoodFat, :FoodRefAmount, :AmountID)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':FoodName', $this->FoodName);
		$stmt->bindParam(':FoodCal', $this->FoodCal);		
		$stmt->bindParam(':FoodCarbo', $this->FoodCarbo);
		$stmt->bindParam(':FoodProtein', $this->FoodProtein);
		$stmt->bindParam(':FoodFat', $this->FoodFat);
		$stmt->bindParam(':FoodRefAmount', $this->FoodRefAmount);
		$stmt->bindParam(':AmountID', $this->AmountID);

		return $stmt->execute();
	}

	public function update($id){

		$sql = "UPDATE $this->table SET FoodName = :FoodName, FoodCal = :FoodCal, FoodCarbo = :FoodCarbo, FoodProtein = :FoodProtein, FoodFat = :FoodFat, FoodRefAmount = :FoodRefAmount, AmountID = :AmountID WHERE FoodID = :FoodID";

		$stmt = DB::prepare($sql);
		$stmt->bindParam(':FoodName', $this->FoodName);
		$stmt->bindParam(':FoodCal', $this->FoodCal);
		$stmt->bindParam(':FoodCarbo', $this->FoodCarbo);
		$stmt->bindParam(':FoodProtein', $this->FoodProtein);
		$stmt->bindParam(':FoodFat', $this->FoodFat);
		$stmt->bindParam(':FoodRefAmount', $this->FoodRefAmount);
		$stmt->bindParam(':AmountID', $this->AmountID);		
		$stmt->bindParam(':FoodID', $id);

		return $stmt->execute();
	}

	public function delete($FoodID) {
		$sql = "DELETE FROM $this->table WHERE FoodID = :FoodID";
		$stm = DB::prepare($sql);
		$stm->bindParam(':FoodID', $FoodID);

		$stm->execute();
	}		

	public function findAlimentByString($string){
		$sql  = "SELECT * FROM $this->table WHERE FoodName LIKE '%". $string ."%' LIMIT 3";
		$stmt = DB::prepare($sql); 
		$stmt->execute();

		return $stmt->fetchAll();
	}

}