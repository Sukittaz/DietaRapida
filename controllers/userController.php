<?php

Class userController extends controller {

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

        $user = new User();
        $data['user'] = $user->getAllJoinObjective();   
        
        $this->loadTemplate('user-list', $data, 'user');
    }

    public function add() {
        $data     = array();
        $user     = new User();
        $objective = new Objective();

        $data['objective'] = $objective->findAll();

        if (isset($_POST['submit'])) {
            $user->setUserName($_POST['UserName']);
            $user->setUserAge($_POST['UserAge']);
            $user->setUserSex($_POST['UserSex']);
            $user->setUserMetabolism($_POST['UserMetabolism']);
            $user->setObjectiveID($_POST['ObjectiveID']);

            $user->insert();

            header("Location: ".BASE."user");    
        }


        $this->loadTemplate('user-add', $data, 'user');
    }

    public function edit($id){
        $data     = array();
        $user     = new User();
        $objective = new Objective();

        $data['objective'] = $objective->findAll();
        $data['user']      = $user->selectById($id);

        if (isset($_POST['submit'])) {
            $user->setUserName($_POST['UserName']);
            $user->setUserAge($_POST['UserAge']);
            $user->setUserSex($_POST['UserSex']);
            $user->setUserMetabolism($_POST['UserMetabolism']);
            $user->setObjectiveID($_POST['ObjectiveID']);

            $user->update();

            header("Location: ".BASE."user");    
        }


        $this->loadTemplate('user-edit', $data, 'user');        

    }

    public function delete($id) {
        $data = array();   
        $user = new User();
        $user->delete($id);

        header("Location: ".BASE."user");    
    }

}