<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Service;
use App\Models\CategoryService;
use App\Models\UserModel;
use App\Models\SettingVendor;
use App\Models\VendorService;
use App\Models\Booking;
use App\Models\SubCategoryService;
use CodeIgniter\Exceptions\PageNotFoundException;
use App\Libraries\TestLibrary;

class Admin extends BaseController{
        public function __construct(){
            helper("form");
        }
    
    // Main layout  
    public function index(){
        $userdata = get_column_name_by_id('users', session()->get('id'), session()->get('fname'));
        $usermodel = new UserModel();
        $booking = new Booking();
        $service = new Service();
        $data['bookingorder'] = $booking->countAllResults();
        $data['totalservice'] = $service->countAllResults();
        $data['vendortotal'] = $usermodel->where('user_type', '202')->countAllResults();
        $data['usertotal'] = $usermodel->where('user_type', '101')->countAllResults();
        $data['title'] ='Qi Rentals';
        $data['page'] ='Main';
        return view('layout/dashboard', $data);
    }

    // Setting Vendor
    public function settingVendor($param1 = '',  $param2 = '' , $param3 = ''){    
        $session = session();  
        helper(['form', 'image']); 
        if($param1 == 'add'){
            if($this->request->getMethod() == 'post'){
                $rules = [
                    "company_name" => "required",
                    "address" => "required",       
                    "sub_metro" => "required",     
                    "business_activity" => "required",    
                    "gps" => "required",
                ];
                if (!$this->validate($rules)){
                    $session->setFlashdata("error", "Invalid data request");
                    $data['settingvendor'] = 'add';
                }else{
                    $model = new SettingVendor();
                    $data['company_name'] =  $this->request->getVar('company_name');
                    $data['address'] =  $this->request->getVar('address');
                    $data['phone'] =  $this->request->getVar('phone');
                    $data['email'] =  $this->request->getVar('email');
                    $data['area'] =  $this->request->getVar('area');
                    $data['street_name'] =  $this->request->getVar('street_name');
                    $data['business_activity'] =  $this->request->getVar('business_activity');
                    $data['sub_metro'] =  $this->request->getVar('sub_metro');
                    $data['gps'] =  $this->request->getVar('gps');
                    if($model->insert($data)){
                    $session->setFlashdata("success", "successfully");
                        }else{
                    $session->setFlashdata("error", "Something happened please try again");
                    $data['settingvendor'] = 'add';
                    }
                    }
            }     
        }
        
        if($param1 == 'edit'){
            if($this->request->getMethod() == 'post'){
                $rules = [
                    "fname" => "required",
                    "lname" => "required",  
                    "gender" => "required", 
            //        "image" =>  "uploaded[image]|max_size[image,1024]|ext_in[image,jpg]", 

                ];
                if (!$this->validate($rules)){
                    $session->setFlashdata("error", "Invalid data request");
                    $data['settingvendor'] = 'edit';
                }else{
                    $model = new UserModel();
                    $data['fname'] = $this->request->getVar('fname');
                    $data['lname'] = $this->request->getVar('lname');
                    $data['phone'] = $this->request->getVar('phone');
                    $data['gender'] = $this->request->getVar('gender');
                    $data['email'] = $this->request->getVar('email');
                    $data['tin_number'] = $this->request->getVar('tin_number');
                    $data['nation_id'] = $this->request->getVar('nation_id');
                    $data['seting_vendor_id'] = $this->request->getVar('seting_vendor_id');   
                    $data['gps'] = $this->request->getVar('gps');      
                    $data['user_type'] = '202';
                    $data['user_name'] = $this->request->getVar('user_name');
                    $data['user_password'] = password_hash($this->request->getVar('password'), PASSWORD_DEFAULT);
                    if($model->insert($data)){
                    //    var_dump($data);
                    $session->setFlashdata("success", "successfully");
                    $data['settingvendor'] = 'edit';
                        }else{
                    $session->setFlashdata("error", "Something happened please try again");
                    $data['settingvendor'] = 'edit';
                    }
                    }
            }     
        }  
        $model = new VendorService();
        $data['vendor'] = $model->orderBy('id', 'DESC')->findAll();
        $settingvendormodel = new SettingVendor();
        $data['all_vendor_name'] = $settingvendormodel->orderBy('id', 'DESC')->findAll();
        $service_model = new Service();
        $data['all_service'] = $service_model->orderBy('id', 'DESC')->findAll();
        $categoryservice_model = new CategoryService();
        $data['all_categoryservice'] = $categoryservice_model->orderBy('id', 'DESC')->findAll();
        $subcategoryservice_model = new SubCategoryService();
        $data['all_subcategoryservice'] = $subcategoryservice_model->orderBy('id', 'DESC')->findAll();
        $model = new SettingVendor();
        $data['vendor'] = $model->orderBy('id', 'DESC')->findAll();
        $data['all_vendor'] = $model->orderBy('id', 'DESC')->findAll();
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
                    $data['service'] = 'add';
                }else{
                    $model = new Service();
                    $data['service_name'] =  $this->request->getVar('service_name');
                    $data['detail'] =  $this->request->getVar('detail');
                    if($model->insert($data)){
                    $session->setFlashdata("success", "successfully");
                        }else{
                    $session->setFlashdata("error", "Something happened please try again");
                    $data['service'] = 'add';
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
                    "gender" => "required",            
                ];
                if (!$this->validate($rules)){
                    $session->setFlashdata("error", "Invalid data request");
                    $data['users'] =  'add';
                }else{
                    $model = new UserModel();       
                    $data['fname'] = $this->request->getVar('fname');
                    $data['lname'] = $this->request->getVar('lname');
                    $data['phone'] = $this->request->getVar('phone');
                    $data['gender'] = $this->request->getVar('gender');
                    $data['email'] = $this->request->getVar('email');
                    $data['user_type'] = '101';
                    $data['user_name'] = $this->request->getVar('user_name',FILTER_SANITIZE_STRING);
                    $data['user_password'] = password_hash($this->request->getVar('password'), PASSWORD_DEFAULT);
                if($model->insert($data)){
                $session->setFlashdata("success", "successfully");
                    }else{
                $session->setFlashdata("error", "Something happened please try again");
                $data['users'] =  'add';
                    }
            }   
        }   
        }

        $model = new UserModel();
        $data['users_detail'] = $model->orderBy('id', 'DESC')->findAll();
        $data['title'] = 'User List';
        $data['page'] = 'User';
        return view('admin/users/list',$data);
    }  

    public function vendorService($param1 = '',  $param2 = ''){ 
        $session = session();   
        if($param1 == 'add'){
                if($this->request->getMethod() == 'post'){
                    $rules = [
                        "vendor_id" => "required",
                        "service_id" => "required",   
                        "price" => "required",   
                        "vendor_id" => "required",  
                    //  "image" =>  "uploaded[image]|max_size[image,1024]|ext_in[image,jpg]", 
                    //  "image" =>  "required", 
                    ];
                    if(!$this->validate($rules)){
                        $session->setFlashdata("error", "Invalid data request");
                        $data['vendor_service'] = 'add';
                    }else{
                        $model = new VendorService(); 
                        
                    $path = './uploads/images';    
                    $file_image = $this->request->getFiles();
                    foreach($file_image['image'] as $img ){
                    if( $img->isValid() && !$img->hasMoved()){
                        $img->move($path);
                        $datas = $img->getName();    
                    }
                    }
                    $data = [
                            'vendor_id'   => $this->request->getVar('vendor_id'),
                            'service_id'  => $this->request->getVar('service_id'),
                            'price'       => $this->request->getVar('price'),
                            'category_id' => $this->request->getVar('category_id'),
                            'sub_category_id' => $this->request->getVar('sub_category_id'),
                            'vendor_id'   => $this->request->getVar('vendor_id'),
                            'description'   => $this->request->getVar('description'),
                            'name' => json_encode($datas),
                        ];
                        if($model->insert($data)){
                        $session->setFlashdata("success", "successfully");
                            }else{
                        $session->setFlashdata("error", "Something happened please try again");
                        $data['vendor_service'] = 'add';
                        }
                    }
                }
            }
            $model = new VendorService();
            $data['vendor'] = $model->orderBy('id', 'DESC')->findAll();
            $settingvendormodel = new SettingVendor();
            $data['all_vendor_name'] = $settingvendormodel->orderBy('id', 'DESC')->findAll();
            $service_model = new Service();
            $data['all_service'] = $service_model->orderBy('id', 'DESC')->findAll();
            $categoryservice_model = new CategoryService();
            $data['all_categoryservice'] = $categoryservice_model->orderBy('id', 'DESC')->findAll();
            $subcategoryservice_model = new SubCategoryService();
            $data['all_subcategoryservice'] = $subcategoryservice_model->orderBy('id', 'DESC')->findAll();
            $service_model = new Service();
            $data['all_service'] = $service_model->orderBy('id', 'DESC')->findAll();
            $data['title'] = 'Setup Vendor Service ';
            $data['page'] = 'Vendor Service ';
            return view('admin/vendor_service_tbl/list',$data);
        }  


        // Category  Service  
    public function categoryService($param1 = '',  $param2 = ''){    
    $session = session();
    if($param1 == 'add'){
        if($this->request->getMethod() == 'post'){
            $rules = [
                "category_name" => "required",
                "service_id" => "required",
            //  "image" =>  "uploaded[image]|max_size[image,1024]|ext_in[image,jpg]", 
            ];
            if (!$this->validate($rules)){
                $session->setFlashdata("error", "Invalid data request");
                $data['categoryservice'] = 'add';    
            }else{
                $model = new CategoryService();    
                
               $file = $this->request->getFile('image');
               // echo $file->getName();
               // exit();
                if($file->isValid() && !$file->hasMoved()){
                $file->move('./uploads/category','testName.' .$file->getExtension()   . $file->getName() );
               }
            
                $data = [
                'category_name' => $this->request->getVar('category_name'),
                'detail'  => $this->request->getVar('detail'),
                'service_id'  => $this->request->getVar('service_id'),  
                'name'=>   $file->getName(),   
                ];
                if($model->insert($data)){
                $session->setFlashdata("success", "successfully");
                    }else{
                $session->setFlashdata("error", "Something happened please try again");
                $data['categoryservice'] = 'add';
                }
                }
        } 
        $model = new UserModel();
        $data['users'] = $model->orderBy('id', 'DESC')->findAll();
        $servicemodel = new Service();
        $data['all_service'] = $servicemodel->orderBy('id', 'DESC')->findAll();
        $categorymodel = new CategoryService();
        $data['catergory'] = $categorymodel->orderBy('id', 'DESC')->findAll();
        $data['title'] = 'Setup Category Service';
        $data['page'] = 'Category Service';
        return view('admin/category_service_tbl/list',$data);
        }  
}

public function subcategoryService($param1 = '',  $param2 = ''){  
    helper(['form']);  
    $session = session();
    $data =[];
    if($param1 == 'add'){
        if($this->request->getMethod() == 'post'){
            $rules = [
                "sub_cat_name" => "required",
                "category_service_id" => "required",             
            
            ];
            if (!$this->validate($rules)){
                $session->setFlashdata("error", "Invalid data request");
                $data['subcategory'] = 'add';
            }else{
                $model = new SubCategoryService();       
                $data = [
                'sub_cat_name' => $this->request->getVar('sub_cat_name'),
                'category_service_id'  => $this->request->getVar('category_service_id'),
                ];
                if($model->insert($data)){
                $session->setFlashdata("success", "successfully");
                    }else{
                $session->setFlashdata("error", "Something happened please try again");
                $data['subcategory'] = 'add';
                }
                }
        } 
        $model = new UserModel();
        $data['users'] = $model->orderBy('id', 'DESC')->findAll();
        $servicemodel = new Service();
        $data['all_service'] = $servicemodel->orderBy('id', 'DESC')->findAll();

        $categorymodel = new SubCategoryService();
        $data['all_catergory'] = $categorymodel->orderBy('id', 'DESC')->findAll();

        $catmodel = new CategoryService();
        $data['category'] = $catmodel->orderBy('id', 'DESC')->findAll();

        $data['title'] = 'Sub Category Service List';
        $data['page'] = 'Sub Category Service';
        return view('admin/sub_category_service_tbl/list',$data);
        }  
}
}

?>