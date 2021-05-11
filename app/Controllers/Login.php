<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Login extends Controller
{
    public function index()
    {
        helper(['form']);
        echo view('/login');
    } 

    public function auth()
    {
        $data = [];
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        if ($this->request->getMethod() == 'post') {

            $rules = [
                'email' => 'required|min_length[6]|max_length[50]|valid_email',
                'password' => 'required|min_length[8]|max_length[255]|validateUser[email,password]',
            ];

            $errors = [
                'password' => [
                    'validateUser' => "Email or Password don't match",
                ],
            ];
        
            if (!$this->validate($rules, $errors)) {

                $data['validation']  = $this->validator;
            } else {
                $model = new UserModel();
                $user = $model->where('email', $this->request->getVar('email'))->first();
                // Stroing session values
                $this->setUserSession($user);
                // Redirecting to dashboard after login

                return redirect()->to('/dashboard');
            }
            return view('/login',$data);
    }
}

    private function setUserSession($user){
		$data = [
			'id' => $user['id'],
			'fname' => $user['fname'],
			'lname' => $user['lname'],
			'user_name' => $user['user_name'],
            'phone' => $user['phone'],
            'email' => $user['email'],
            'gender' => $user['gender'],
            'user_type' => $user['user_type'],
			'isLoggedIn' => true,
		];
		session()->set($data);
		return true;
	}
	

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
} 