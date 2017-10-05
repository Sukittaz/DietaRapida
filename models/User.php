<?php

Class User extends DB {

	protected $table = 'user';
	private $UserID;
	private $UserLogin;
	private $UserPass;
	private $UserName;
	private $UserAge;
	private $UserSex;
	private $UserMetabolism;
	private $ObjectiveID;

	public function setUserLogin($UserLogin){
		$this->UserLogin = $UserLogin;
	}

	public function setUserPass($UserPass){
		$this->UserPass = $UserPass;
	}

	public function setUserName($UserName){
		$this->UserName = $UserName;
	}	

	public function setUserAge($UserAge){
		$this->UserAge = $UserAge;
	}

	public function setUserSex($UserSex){
		$this->UserSex = $UserSex;
	}				

	public function setUserMetabolism($UserMetabolism){
		$this->UserMetabolism = $UserMetabolism;
	}

	public function setObjectiveID($ObjectiveID){
		$this->ObjectiveID = $ObjectiveID;
	}

	public function findAll(){
		$sql  = "SELECT * FROM $this->table";
		$stmt = DB::prepare($sql); 
		$stmt->execute();

		return $stmt->fetchAll();
	}		

	public function selectById($UserID) {
		$sql = "SELECT * FROM $this->table WHERE UserID = :UserID";
		$stm = DB::prepare($sql);
		$stm->bindParam(':UserID', $UserID);
		$stm->execute();

		return $stm->fetch();		
	}	

	public function insert(){

		$sql = "INSERT INTO $this->table (UserName, UserAge, UserSex, UserMetabolism, ObjectiveID) VALUES (:UserName, :UserAge, :UserSex, :UserMetabolism, :ObjectiveID)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':UserName', $this->UserName);
		$stmt->bindParam(':UserAge', $this->UserAge);
		$stmt->bindParam(':UserSex', $this->UserSex);
		$stmt->bindParam(':UserMetabolism', $this->UserMetabolism);
		$stmt->bindParam(':ObjectiveID', $this->ObjectiveID);		

		return $stmt->execute();
	}

	public function update($id){

		$sql = "UPDATE $this->table SET UserName = :UserName, UserAge = :UserAge, UserSex = :UserSex, UserMetabolism = :UserMetabolism WHERE UserID = :UserID";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':UserName', $this->UserName);
		$stmt->bindParam(':UserAge', $this->UserAge);
		$stmt->bindParam(':UserSex', $this->UserSex);
		$stmt->bindParam(':UserMetabolism', $this->UserMetabolism);
		$stmt->bindParam(':UserID', $id);

		return $stmt->execute();
	}

	public function delete($UserID) {
		$sql = "DELETE FROM $this->table WHERE UserID = :UserID";
		$stm = DB::prepare($sql);
		$stm->bindParam(':UserID', $UserID);

		$stm->execute();
	}	

	public function getAllJoinObjective(){

		$sql = "select user.*, ob.ObjectiveName from user inner join  objective ob on (ob.ObjectiveID = user.ObjectiveID)";

		$stmt = DB::prepare($sql);

		$stmt->execute();
		return $stmt->fetchAll();
	}

	public function getObjectiveName($id){

		$sql = "SELECT objective.ObjectiveName
			   FROM objective
			   INNER JOIN user
			   ON objective.ObjectiveID = user.ObjectiveID
			   WHERE user.UserID = :UserID;";

		$stmt = DB::prepare($sql);
		$stmt->bindParam(':UserID', $id);

		$stmt->execute();
		return $stmt->fetch();
	}

	public function doLogin() {

		$sql = "SELECT * FROM $this->table WHERE UserLogin = :UserLogin AND UserPass = :UserPass";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':UserLogin', $this->UserLogin);
		$stmt->bindParam(':UserPass', $this->UserPass);
		$stmt->execute();

		if($stmt->rowCount() > 0) {
			$row = $stmt->fetch();
			$user = array(
						'UserID' => $row->UserID,
						'UserLogin' =>  $row->UserLogin
					);

			$_SESSION['User'] = $user;
			
			return true;
		} else {
			return false;
		}
	}

	public function isLogged() {
		if(isset($_SESSION['User']) && !empty($_SESSION['User'])) {
			return true;
		} else {
			return false;
		}
	}	

	public function logout() {
		unset($_SESSION['User']);
	}
}