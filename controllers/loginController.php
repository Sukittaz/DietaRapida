<?php
class loginController extends controller {

	public function index() {
		parent::__construct();
		
		$data = array();

		if (isset($_POST['submit'])) {		
			$user = new User();

			$user->setUserLogin($_POST['UserLogin']);
			$user->setUserPass($_POST['UserPass']);

			if($user->doLogin()) {
				header("Location: ".BASE);
				exit;
			} else {
				$data['error'] = 'E-mail e/ou senha errados.';
			}
		}
			
		$this->loadView('login', $data, '');
	}

	public function logout() {
		$user = new User();
		$user->logout();
		header("Location: ".BASE);
	}
}