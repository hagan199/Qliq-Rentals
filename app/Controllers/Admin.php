<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Service;
use App\Models\CategoryService;
use App\Models\UserModel;
use App\Models\SettingVendor;
class Admin extends BaseController
{  

    public function index(){
        return view("layout/main");
    }
// Dashboard
    public function dashboard(){
        return view("layout/dashboard");
    }
// Setting Vendor
    function setup_settingvendor($param1 = '',  $param2 = ''){    
        $session = session();
        if($param1 == 'add'){
            if($this->request->getMethod() == 'post'){
                $rules = [
                    "company_name" => "required",
                    "address" => "required",             
                ];
                if (!$this->validate($rules)){
                    $session->setFlashdata("error", "Invalid data request");
                }else{
                    $model = new SettingVendor();       
                    $data = [
                    'company_name' => $this->request->getVar('company_name'),
                    'address'  => $this->request->getVar('address'),
                    'phone'  => $this->request->getVar('phone'),
                        ];
                    if($model->insert($data)){
                    $session->setFlashdata("success", "successfully");
                        }else{
                    $session->setFlashdata("error", "Something happened please try again");
                    }
                    }
            }     
        } 
        $model = new SettingVendor();
        $data['service'] = $model->orderBy('id', 'DESC')->findAll();
        $data['title'] = 'Setup Vendor ';
        $data['page'] = 'Setting Vendor ';
        return view('admin/setting_vendor/list',$data);
    } 

// Services
function setup_service($param1 = '',  $param2 = ''){    
        $session = session();
        if($param1 == 'add'){
            if($this->request->getMethod() == 'post'){
                $rules = [
                    "service_name" => "required",
                    "detail" => "required",             
                ];
                if (!$this->validate($rules)){
                    $session->setFlashdata("error", "Invalid data request");
                }else{
                    $model = new Service();
                    $data['service_name'] =  $this->request->getVar('service_name');
                    $data['detail'] =  $this->request->getVar('detail');
                    if($model->insert($data)){
                    $session->setFlashdata("success", "successfully");
                        }else{
                    $session->setFlashdata("error", "Something happened please try again");
                    }
                    }
            }     
        }   
        $model = new Service();
        $data['service'] = $model->orderBy('id', 'DESC')->findAll();
        $data['title'] = 'Setup Service ';
        $data['page'] = ' Service ';
        return view('admin/service_tbl/list',$data);
    } 


    function user($param1 = '',  $param2 = ''){    
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

//   Category  Service  

function setup_category_service($param1 = '',  $param2 = ''){   
    if($param1 == 'add'){
        if($this->request->getMethod() == 'post'){
            $rules = [
                "company_name" => "required",
                "address" => "required",             
            ];
            if (!$this->validate($rules)){
                $session->setFlashdata("error", "Invalid data request");
            }else{
                $model = new SettingVendor();                    
                $data['company_name'] =  $this->request->getVar('company_name');
                $data['address'] =  $this->request->getVar('address');
                $data['phone'] =  $this->request->getVar('phone');
                $data['admin_id'] =  $this->request->getVar('admin_id');

                if($model->insert($data)){
                $session->setFlashdata("success", "successfully");
                    }else{
                $session->setFlashdata("error", "Something happened please try again");
                }
                }
        }     
    }  
    $session = session();
    $model = new VendorService();
    $data['vendor'] = $model->orderBy('id', 'DESC')->findAll();

    $settingvendormodel = new SettingVendor();
    $data['all_vendor_name'] = $settingvendormodel->orderBy('id', 'DESC')->findAll();

    $service_model = new Service();
    $data['all_service'] = $service_model->orderBy('id', 'DESC')->findAll();

    $categoryservice_model = new CategoryService();
    $data['all_categoryservice'] = $categoryservice_model->orderBy('id', 'DESC')->findAll();

    $service_model = new Service();
    $data['all_service'] = $service_model->orderBy('id', 'DESC')->findAll();
    $data['title'] = 'List Vendor Service ';
    $data['page'] = 'Vendor Service ';
    return view('admin/vendor_service_tbl/list',$data);
}  


}

?>

