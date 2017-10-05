<?php

Class Diet extends DB {

	protected $table = 'diet';
	private $DietID;
	private $DietName;
	private $UserID;

	public function setDietName($DietName){
		$this->DietName = $DietName;
	}

	public function setUserID($UserID){
		$this->UserID = $UserID;
	}

	public function findAll(){
		
		$sql  = "SELECT * FROM $this->table";
		$stmt = DB::prepare($sql); 
		$stmt->execute();

		return $stmt->fetchAll();
	}

	public function insert(){

		$sql = "INSERT INTO $this->table (DietName, UserID) VALUES (:DietName, :UserID)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':DietName', $this->DietName);
		$stmt->bindParam(':UserID', $this->UserID);

		return $stmt->execute();
	}

	public function update($id){

		$sql = "UPDATE $this->table SET DietName = :DietName WHERE DietID = :DietID";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':DietName', $this->DietName);
		$stmt->bindParam(':DietID', $id);

		return $stmt->execute();
	}

	public function lastInsertId(){
		
		$sql = "INSERT INTO $this->table (DietName, UserID) VALUES (:DietName, :UserID)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':DietName', $this->DietName);
		$stmt->bindParam(':UserID', $this->UserID);
		$stmt->execute();

		$con = DB::getInstance();

		return $con->lastInsertId(); 
	}

	public function selectDiet($id){
		 $sql = "SELECT 
				(SELECT MealName FROM meal WHERE MealID = m.MealID) as mealname, 
			    f.*, 
			    d.DietName,
			    m.MealID,
			    m.FoodAmount,
			    (SELECT AmountName FROM amount WHERE AmountID = f.AmountID) as quant,
			    (SELECT UserName FROM user Where UserID = d.UserID) as user,
                (SELECT UserAge FROM user Where UserID = d.UserID) as userAge,
                (SELECT UserSex FROM user Where UserID = d.UserID) as userSex,
                (SELECT UserMetabolism FROM user Where UserID = d.UserID) as userMetabolism			    
			FROM diet d
			INNER JOIN dietmeal dm ON d.DietID = dm.DietID
			INNER JOIN mealfood m on m.MealID = dm.MealID
			INNER JOIN food f on f.FoodID = m.FoodID
			Where d.DietID = :ID";

		$stmt = DB::prepare($sql);
		$stmt->bindParam(':ID', $id);
		$stmt->execute();
			
		return $stmt->fetchAll();	
	}

	public function deleteDiet($id){
		$sql  = "DELETE FROM dietmeal WHERE DietID = :ID";
		$sql2 = "DELETE FROM diet WHERE DietID = :ID";	
			

		$stmt = DB::prepare($sql); 
		$stmt->bindParam(':ID', $id); 

		$stmt2 = DB::prepare($sql2); 
		$stmt2->bindParam(':ID', $id); 

		$stmt->execute();
		$stmt2->execute();
	}			
}