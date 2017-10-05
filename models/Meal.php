<?php

Class Meal extends DB {

protected $table = 'meal';
	private $MealID;
	private $MealName;
	private $Obj;

	public function setMealName($MealName){
		$this->MealName = $MealName;
	}

	public function setObj($Obj){
		$this->Obj = $Obj;
	}

	public function findAll(){
		
		$sql  = "SELECT * FROM $this->table";
		$stmt = DB::prepare($sql); 
		$stmt->execute();

		return $stmt->fetchAll();
	}	
	

	public function insert(){

		$sql = "INSERT INTO $this->table (MealName) VALUES (:MealName)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':MealName', $this->MealName);

		return $stmt->execute();
	}

	public function update($id){

		$sql = "UPDATE $this->table SET MealName = :MealName WHERE MealID = :MealID";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':MealName', $this->MealName);
		$stmt->bindParam(':MealID', $id);

		return $stmt->execute();
	}

	public function lastInsertId(){

		$sql = "INSERT INTO $this->table (MealName, Obj) VALUES (:MealName, :Obj)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':MealName', $this->MealName);
		$stmt->bindParam(':Obj', $this->Obj);
		$stmt->execute();

		$con = DB::getInstance();

		return $con->lastInsertId();
	}

	public function returnMeal($id){
		$sql = "SELECT fd.FoodID, FoodName, FoodAmount, ml.MealID, MealName 
				FROM mealfood mf
				INNER JOIN food fd ON mf.FoodID = fd.FoodID
				INNER JOIN meal ml ON mf.MealID = ml.MealID
				WHERE ml.MealID = :ID";

		$stmt = DB::prepare($sql);
		$stmt->bindParam(':ID', $id);
		$stmt->execute();

		return $stmt->fetchAll();					
	}

	public function deleteMealFood($id){
		$sql1 = "DELETE FROM dietmeal WHERE MealID = :ID";
		$sql2 = "DELETE FROM mealfood WHERE MealID = :ID";	
		$sql3 = "DELETE FROM meal WHERE MealID = :ID";	


		$stmt1 = DB::prepare($sql1); 
		$stmt1->bindParam(':ID', $id); 

		$stmt2 = DB::prepare($sql2); 
		$stmt2->bindParam(':ID', $id); 

		$stmt3 = DB::prepare($sql3); 
		$stmt3->bindParam(':ID', $id); 				

		$stmt1->execute();
		$stmt2->execute();
		$stmt3->execute();
	}

	public function findMealByString($string){
		$sql  = "SELECT MealID, MealName FROM $this->table WHERE MealName LIKE '%". $string ."%'";
		$stmt = DB::prepare($sql); 
		$stmt->execute();

		return $stmt->fetchAll();
	}	

	public function selectDiet($id){
		$sql = "SELECT dm.DietID, dt.DietName, ml.MealID, ml.MealName FROM meal ml
				INNER JOIN dietmeal dm ON ml.MealID = dm.MealID
				INNER JOIN diet dt ON dm.DietID = dt.DietID
				WHERE dm.DietID = :DietID";

		$stmt = DB::prepare($sql);
		$stmt->bindParam(':DietID', $id);
		$stmt->execute();
			
		return $stmt->fetchAll();					
	}		
}