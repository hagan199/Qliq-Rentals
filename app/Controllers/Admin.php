<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Service;
use App\Models\CategoryService;
use App\Models\SettingVendor;
class Admin extends BaseController
{
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
                    $data = [
                    'service_name' => $this->request->getVar('service_name'),
                    'detail'  => $this->request->getVar('detail'),
                        ];
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
        return view('admin/service_tbl/list',$data);
    } 


//   Category  Service  
function setup_category_service($param1 = '',  $param2 = '')
{   
if($param1 == 'add'){
        if($this->request->getMethod() == 'post'){
            $rules = [
                "vendor_id" => "required",
                "service_id" => "required",             
            ];
            if (!$this->validate($rules)){
                $session->setFlashdata("error", "Invalid data request");
            }else{
                $model = new VendorService();       
                $data = [
                'vendor_id' => $this->request->getVar('vendor_id'),
                'service_id'  => $this->request->getVar('address'),
                'price'  => $this->request->getVar('price'),
                'catagory_id'=> $session()->get('catagory_id'), 
                    ];
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
    $data['title'] = 'Setup Vendor Service ';
    return view('admin/vendor_service_tbl/list',$data);
}  





}

?>

