<?php

Class amountController extends controller {

	public function __construct() {
    parent::__construct();
    
		$user = new User();
        if($user->isLogged() == false) {
        	header("Location: ".BASE."login");
        	exit;
        }
	}

    public function index() {
        $data   = array();    
        $amount = new Amount(); 

        $data['amount'] = $amount->findAll();
        
        $this->loadTemplate('amount-list', $data, 'amount');
    }

    public function add() {
          $data   = array();
          $amount = new Amount();

          if(isset($_POST['submit'])){
            $amount->setAmountName($_POST['AmountName']);
            $amount->insert();

            header("Location: ".BASE."amount");
          }
          $this->loadTemplate('amount-add', $data, 'amount');
    }

    public function edit($id) {
          $data   = array();
          $amount = new Amount();

          $data['amount'] = $amount->selectById($id);

          if(isset($_POST['submit'])){
            $amount->setAmountName($_POST['AmountName']);
            $amount->update($id);

            header("Location: ".BASE."amount");
          }
          $this->loadTemplate('amount-edit', $data, 'amount');
    }    

    public function delete($id) {
        $data = array();   
        $amount = new Amount();
        $amount->delete($id);

        header("Location: ".BASE."amount");   
    }
}