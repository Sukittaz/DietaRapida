<?php

Class DietMeal extends DB {
	protected $table = 'dietmeal';
	private $DietID;
	private $MealID;
	private $Ordered;

	public function setDietID($DietID){
		$this->DietID = $DietID;
	}

	public function setMealID($MealID){
		$this->MealID = $MealID;
	}	

	public function setOrdered($Ordered){
		$this->Ordered = $Ordered;
	}

	public function insert(){

		$sql = "INSERT INTO $this->table (DietID, MealID, Ordered) VALUES (:DietID, :MealID, :Ordered)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':DietID', $this->DietID);
		$stmt->bindParam(':MealID', $this->MealID);
		$stmt->bindParam(':Ordered', $this->Ordered);

		return $stmt->execute();
	}

	public function update($id){

	}

	public function deleteAjax($id){
		$sql = "DELETE FROM $this->table WHERE MealID = :MealID";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':MealID', $id);

		return $stmt->execute();
	}	

	public function insertAjax($DietID ,$MealID){

		$sqlSelect  = "SELECT count(*) as Total FROM $this->table WHERE DietID = :DietID;";
		$stmtSelect = DB::prepare($sqlSelect);
		$stmtSelect->bindParam(':DietID', $DietID);
		$stmtSelect->execute();

		$lastValue = $stmtSelect->fetch();

		$sql = "INSERT INTO $this->table (DietID, MealID, Ordered) VALUES (:DietID, :MealID, :Ordered)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':DietID', $DietID);
		$stmt->bindParam(':MealID', $MealID);		
		$stmt->bindValue(':Ordered', $lastValue->Total + 1);		

		return $stmt->execute();
	}	
}