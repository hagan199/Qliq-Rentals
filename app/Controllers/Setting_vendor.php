<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\SettingVendor;

class setting_vendor extends BaseController
{
    function index($param1 = '',  $param2 = ''){    
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
                    'admin_id'=> $session->get('user_id'), 
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
        $data['vendor'] = $model->orderBy('id', 'DESC')->findAll();
        $data['title'] = 'Setup Vendor ';
        return view('admin/setting_vendor/list',$data);
    }  

    public function add()
    {  
        helper(['form', 'url']);
        $model = new SettingVendor();
        $data = [
            'company_name' => $this->request->getVar('company_name'),
            'address'  => $this->request->getVar('address'),
            'phone'  => $this->request->getVar('phone'),          
            ];
        $save = $model->insert($data);
        return redirect()->to('/category');
    }

    public function delete($id=0){

        $settingvendor = new SettingVendor();
        ## Check record
        if($settingvendor->find($id)){
        ## Delete record
            $settingvendor->delete($id);
            session()->setFlashdata('message', 'Deleted Successfully!');
            session()->setFlashdata('alert-class', 'alert-success');
        }else{
            session()->setFlashdata('message', 'Record not found!');
            session()->setFlashdata('alert-class', 'alert-danger');
        }
        return redirect()->route('/');

        }
    }
?>

