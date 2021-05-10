<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\UserModel;

class User extends BaseController
{
    function index($param1 = '',  $param2 = ''){    
        $session = session();
        if($param1 == 'add'){
            if($this->request->getMethod() == 'post'){
                $rules = [
                    "fname" => "required",
                    "lname" => "required",             
                ];
                if (!$this->validate($rules)){
                    $session->setFlashdata("error", "Invalid data request");
                }else{
                    $model = new SettingVendor();       
                    $data = [
                        'fname' => $this->request->getVar('fname'),
                        'lname'  => $this->request->getVar('lname'),
                        'phone'  => $this->request->getVar('phone'),
                        'gender'  => $this->request->getVar('gender'),
                        'email'  => $this->request->getVar('user_email'),
                        'user_name'     => $this->request->getVar('user_name'),
                        'user_password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                    ];

                if($model->insert($data)){
                $session->setFlashdata("success", "successfully");
                    }else{
                $session->setFlashdata("error", "Something happened please try again");
                    }
            }   
        }   
        }

        if($param1 == 'edit' && $param3 == 'doupdate'){
            if($this->request->getMethod() == 'post'){


            }
        
        }

        if($param1 == 'delete'){
            if($this->request->getMethod() == 'post'){


            }
        
        }


        $model = new UserModel();
        $data['users_detail'] = $model->orderBy('id', 'DESC')->findAll();
        $data['title'] = 'User List';


        return view('admin/users/list',$data);
    }  
    
    public function create()
    {    
        return view('admin/users/add');
    }


    public function add()
    {  
        helper(['form', 'url']);
        
        $model = new UserModel();
        $data = [
            'fname' => $this->request->getVar('fname'),
            'mname'  => $this->request->getVar('mname'),
            'lname'  => $this->request->getVar('lname'),
            'phone'  => $this->request->getVar('phone'),
            'gender'  => $this->request->getVar('gender'),
            'user_email'  => $this->request->getVar('email'),
            'user_name'     => $this->request->getVar('user_name'),
            'user_password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            
            ];
        $save = $model->insert($data);
        return redirect()->to('users/add/');
    }


    public function auth()
    {
        $model = new UserModel();

        $password = $this->request->getVar('password');
        $data = $model->where('user_email', $email)->first();

        if($data){
            $pass = $data['user_password'];
            $verify_pass = password_verify($password, $pass);
            if($verify_pass){
                $ses_data = [
                    'user_id'       => $data['user_id'],
                    'user_name'     => $data['user_name'],
                    'user_email'    => $data['user_email'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/dashboard');
            }else{
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/');
            }
        }else{
            $session->setFlashdata('msg', 'Email not Found');
            return redirect()->to('/');
        }


        return view('/login', $data);
    }



}

?>



