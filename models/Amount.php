<?php

Class Amount extends DB {

	protected $table = 'amount';
	private $AmountID;
	private $AmountName;

	public function setAmountName($AmountName){
		$this->AmountName = $AmountName;
	}

	public function findAll(){
		
		$sql  = "SELECT * FROM $this->table";
		$stmt = DB::prepare($sql); 
		$stmt->execute();

		return $stmt->fetchAll();
	}	

	public function selectById($AmountID) {
		$sql = "SELECT * FROM $this->table WHERE AmountID = :AmountID";
		$stm = DB::prepare($sql);
		$stm->bindParam(':AmountID', $AmountID);
		$stm->execute();

		return $stm->fetch();		
	}		

	public function insert(){

		$sql = "INSERT INTO $this->table (AmountName) VALUES (:AmountName)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':AmountName', $this->AmountName);

		return $stmt->execute();
	}

	public function update($id){

		$sql = "UPDATE $this->table SET AmountName = :AmountName WHERE AmountID = :AmountID";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':AmountName', $this->AmountName);
		$stmt->bindParam(':AmountID', $id);

		return $stmt->execute();
	}

	public function delete($AmountID) {
		$sql = "DELETE FROM $this->table WHERE AmountID = :AmountID";
		$stm = DB::prepare($sql);
		$stm->bindParam(':AmountID', $AmountID);

		$stm->execute();
	}		
}