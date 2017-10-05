<?php

Class uploadController extends controller {

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

        if (isset($_POST['submit'])) {
            $food = new Food();

            date_default_timezone_set("Brazil/East");

            $ext = strtolower(substr($_FILES['fileUpload']['name'],-4));
            $new_name = date("Y.m.d-H.i.s") . $ext;
            $dir = 'uploads/';

            move_uploaded_file($_FILES['fileUpload']['tmp_name'], $dir.$new_name);

            $arquivo = $dir.$new_name;

            $arq = fopen($arquivo,'r');

            while(!feof($arq))
            for($i=0; $i<1; $i++){
                if ($conteudo = utf8_encode(fgets($arq))){
                    $linha = explode(';', $conteudo);
                }

                $food->setFoodName($linha[0]);
                $food->setFoodCal($linha[1]);
                $food->setFoodCarbo($linha[2]);
                $food->setFoodProtein($linha[3]);
                $food->setFoodFat($linha[4]);
                $food->setFoodRefAmount($linha[5]);
                $food->setAmountID(1);

                $food->insert();
            }   
            unlink($arquivo);             
        }     
        
        $this->loadTemplate('upload', $data, 'upload');
    }

}