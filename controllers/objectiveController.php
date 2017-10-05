<?php

Class objectiveController extends controller {

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
        $objective = new Objective();

        $data['objective'] = $objective->findAll();     
        
        $this->loadTemplate('objective-list', $data, 'objective');
    }

    public function add() {
        $data      = array(); 
        $objective = new Objective();

        if (isset($_POST['submit'])) {
            $objective->setObjectiveName($_POST['ObjectiveName']);
            $objective->insert();  

            header("Location: ".BASE."objective");            
        }

        $this->loadTemplate('objective-add', $data, 'objective');
    }

    public function edit($id) {
        $data      = array(); 
        $objective = new Objective();

        $data['objective'] = $objective->selectById($id);

        if (isset($_POST['submit'])) {
            $objective->setObjectiveName($_POST['ObjectiveName']);
            $objective->update($id);  

            header("Location: ".BASE."objective");            
        }

        $this->loadTemplate('objective-edit', $data, 'objective');        
    }

    public function delete($id) {
        $data      = array();   
        $objective = new Objective();
        $objective->delete($id);

        header("Location: ".BASE."objective");            
    }

}