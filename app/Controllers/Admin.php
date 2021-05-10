<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Service;
use App\Models\CategoryService;
use App\Models\UserModel;
use App\Models\SettingVendor;
use App\Models\VendorService;

class Admin extends BaseController
{  
    // Main layout  
    public function index(){
        return view("layout/main");
    }

    // Dashboard
    public function dashboard(){
        return view("layout/dashboard");
    }

    // Setting Vendor
    public function settingVendor($param1 = '',  $param2 = ''){    
        $session = session();
        $model = new SettingVendor();
        $data['vendor'] = $model->orderBy('id', 'DESC')->findAll();
        $data['title'] = 'Setup Vendor ';
        $data['page'] = 'Setting Vendor ';
        return view('admin/setting_vendor/list',$data);
    } 

    // Services
    public function service($param1 = '',  $param2 = ''){    
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

    // User
    public function user($param1 = '',  $param2 = ''){    
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
                    $data['fname'] = $this->request->getVar('fname');
                    $data['lname'] = $this->request->getVar('lname');
                    $data['phone'] = $this->request->getVar('phone');
                    $data['gender'] = $this->request->getVar('gender');
                    $data['email'] = $this->request->getVar('email');
                    $data['user_name'] = $this->request->getVar('user_name');
                    $data['user_password'] = password_hash($this->request->getVar('password'), PASSWORD_DEFAULT);

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
        $data['page'] = 'User ';
        return view('admin/users/list',$data);
    }  

    // Category  Service  
    public function categoryService($param1 = '',  $param2 = ''){    
    $session = session();
    if($param1 == 'add'){

        if($this->request->getMethod() == 'post'){
            $rules = [
                "category_name" => "required",
            // 'image' => 'uploaded[file]|max_size[file,1024]|ext_in[file,jpg,jpeg,docx,pdf],'         
            ];
            if (!$this->validate($rules)){
                $session->setFlashdata("error", "Invalid data request");
            }else{

            $file = $this->request->getFile('iamge');

            if($imagefile = $this->request->getFiles())
            {
                    foreach($imagefile['image'] as $img)
            {
                    if ($img->isValid() && ! $img->hasMoved())
                    {
                        $newName = $img->getRandomName();
                        $img->move(WRITEPATH.'uploads', $newName);
                    }
                }
                }

                $model = new CategoryService();       
                $data = [
                'category_name' => $this->request->getVar('category_name'),
                'detail'  => $this->request->getVar('detail'),
                'image'  => $this->request->getVar('detail'),
                ];
                if($model->insert($data)){
                $session->setFlashdata("success", "successfully");
                    }else{
                $session->setFlashdata("error", "Something happened please try again");
                }
                }
        } 

        if($this->request->getMethod() == 'edit'){
            $rules = [
                "category_name" => "required",
            // 'image' => 'uploaded[file]|max_size[file,1024]|ext_in[file,jpg,jpeg,docx,pdf],'         
            ];
            if (!$this->validate($rules)){
                $session->setFlashdata("error", "Invalid data request");
            }else{

                $model = new CategoryService();       
                $data = [
                '' => $this->request->getVar('category_name'),
                'detail'  => $this->request->getVar('detail'),
                'image'  => $this->request->getVar('detail'),
                ];
                if($model->insert($data)){
                $session->setFlashdata("success", "successfully");
                    }else{
                $session->setFlashdata("error", "Something happened please try again");
                }
                }
        }  
        }   
        $model = new UserModel();
        $data['users'] = $model->orderBy('id', 'DESC')->findAll();
        $model = new CategoryService();
        $data['catergory'] = $model->orderBy('id', 'DESC')->findAll();
        $data['title'] = 'Setup Category Service';
        $data['page'] = 'Category Service';
        return view('admin/category_service_tbl/list',$data);
        }  
}

?>

