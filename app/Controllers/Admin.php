<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Service;
use App\Models\CategoryService;
use App\Models\UserModel;
use App\Models\SettingVendor;
use App\Models\VendorService;
use App\Models\SubCategoryService;
use CodeIgniter\Exceptions\PageNotFoundException;
use App\Libraries\TestLibrary;

class Admin extends BaseController
{  
    
    // Main layout  
    public function index(){
        $userdata = get_column_name_by_id('users', session()->get('id'), session()->get('fname'));
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
                        }else{
                    $session->setFlashdata("error", "Something happened please try again");
                    }
                    }
            }     
        }  

        if($param1 == 'add_update'){
            if($this->request->getMethod() == 'post'){

            helper(['form']);  
            $session = session();
            $data =[];
                $rules = [
                    "vendor_id" => "required",
                    "service_id" => "required",   
                    "price" => "required",   
                    "vendor_id" => "required",
                    "image" =>  "uploaded[image]|max_size[image,1024]|ext_in[image,jpg]",         
                    ];

                if(!$this->validate($rules)){
                    $session->setFlashdata("error", "Invalid data request");
                }else{

                    $file = $this->request->getFileMultiple('image');
                    echo $file->getName();
            
                    if($file->isValid() && !$file->hasMoved()){
                    $file->move('./uploads/images','testName.' .$file->getExtension());
                    }
                    
                    

		if($this->request->getVar('action'))
		{
			$action = $this->request->getVar('action');
			if($action == 'get_category_service')
			{
				$categoryModel = new CategoryService();
				$catdata = $categoryModel->where('id', $this->request->getVar('category_id'))->findAll();
				echo json_encode($catdata);
			}

			if($action == 'get_sub_category_service')
			{
				$subcategoryService = new SubCategoryService();
				$subcatdata = $subcategoryService->where('id', $this->request->getVar('sub_category_id'))->findAll();
				echo json_encode($subcatdata);
			}
		}

                    $model = new VendorService();       
                    $data = [
                    'vendor_id' => $this->request->getVar('vendor_id'),
                    'service_id'  => $this->request->getVar('service_id'),
                    'price'  => $this->request->getVar('price'),
                    'category_id'=> $this->request->getVar('category_id'),
                    'sub_category_id'=> $this->request->getVar('sub_category_id'),
                    'image'  =>  $file,
                        ];
                        //var_dump($file);
                    if($model->insert($data)){
                    $session->setFlashdata("success", "successfully");
                        }else{
                    $session->setFlashdata("error", "Something happened please try again");
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
                    "gender" => "required",            
                ];
                if (!$this->validate($rules)){
                    $session->setFlashdata("error", "Invalid data request");
                }else{
                    $model = new UserModel();       
                    $data['fname'] = $this->request->getVar('fname');
                    $data['lname'] = $this->request->getVar('lname');
                    $data['phone'] = $this->request->getVar('phone');
                    $data['gender'] = $this->request->getVar('gender');
                    $data['email'] = $this->request->getVar('email');
                    $data['user_type'] = '101';
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

    public function vendorService($param1 = '',  $param2 = ''){ 
        $session = session();   
        if($param1 == 'add'){
                if($this->request->getMethod() == 'post'){
                    $rules = [
                        "vendor_id" => "required",
                        "service_id" => "required",   
                        "price" => "required",   
                        "vendor_id" => "required",        
                    ];
                    if(!$this->validate($rules)){
                        $session->setFlashdata("error", "Invalid data request");
                    }else{
                        $model = new VendorService();       
                        $data = [
                        'vendor_id' => $this->request->getVar('vendor_id'),
                        'service_id'  => $this->request->getVar('service_id'),
                        'price'  => $this->request->getVar('price'),
                        'category_id'=> $this->request->getVar('category_id'),
                        'sub_category_id'=> $this->request->getVar('sub_category_id'),
                            ];
                            var_dump($data);
                        if($model->insert($data)){
                        $session->setFlashdata("success", "successfully");
                            }else{
                        $session->setFlashdata("error", "Something happened please try again");
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
                //"image" =>  "uploaded[image]|max_size[image,1024]|ext_in[image,jpg]", 
            ];
            if (!$this->validate($rules)){
                $session->setFlashdata("error", "Invalid data request");    
            }else{
                $model = new CategoryService();    
                
                $file = $this->request->getFile('image');
                echo $file->getName();
               // exit();
                if($file->isValid() && !$file->hasMoved()){
                $file->move('./uploads/images','testName.' .$file->getExtension());
            }

                $data = [
                'category_name' => $this->request->getVar('category_name'),
                'detail'  => $this->request->getVar('detail'),
                'service_id'  => $this->request->getVar('service_id'),
                'image'  =>  $file,
                ];
                if($model->insert($data)){
                $session->setFlashdata("success", "successfully");
                    }else{
                $session->setFlashdata("error", "Something happened please try again");
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
    $data[''] = [''

];
    if($param1 == 'add'){
        if($this->request->getMethod() == 'post'){
            $rules = [
                "sub_cat_name" => "required",
                "category_service_id" => "required",             
            
            ];
            if (!$this->validate($rules)){
                $session->setFlashdata("error", "Invalid data request");
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

        $data['title'] = 'Setup Category Service';
        $data['page'] = 'Category Service';
        return view('admin/sub_category_service_tbl/list',$data);
        }  
}
}

?>

