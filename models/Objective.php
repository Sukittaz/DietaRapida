<?php

Class Objective extends DB {

	protected $table = 'objective';
	private $ObjectiveID;
	private $ObjectiveName;

	public function setObjectiveName($ObjectiveName){
		$this->ObjectiveName = $ObjectiveName;
	}

	public function findAll(){
		
		$sql  = "SELECT * FROM $this->table";
		$stmt = DB::prepare($sql); 
		$stmt->execute();

		return $stmt->fetchAll();
	}	

	public function selectById($ObjectiveID) {
		$sql = "SELECT * FROM $this->table WHERE ObjectiveID = :ObjectiveID";
		$stm = DB::prepare($sql);
		$stm->bindParam(':ObjectiveID', $ObjectiveID);
		$stm->execute();

		return $stm->fetch();		
	}		

	public function insert(){

		$sql = "INSERT INTO $this->table (ObjectiveName) VALUES (:ObjectiveName)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':ObjectiveName', $this->ObjectiveName);

		return $stmt->execute();
	}

	public function update($id){

		$sql = "UPDATE $this->table SET ObjectiveName = :ObjectiveName WHERE ObjectiveID = :ObjectiveID";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':ObjectiveName', $this->ObjectiveName);
		$stmt->bindParam(':ObjectiveID', $id);

		return $stmt->execute();
	}

	public function delete($ObjectiveID) {
		$sql = "DELETE FROM $this->table WHERE ObjectiveID = :ObjectiveID";
		$stm = DB::prepare($sql);
		$stm->bindParam(':ObjectiveID', $ObjectiveID);

		$stm->execute();
	}		
}