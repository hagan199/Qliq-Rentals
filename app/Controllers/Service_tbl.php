<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Service;

class Service_tbl extends BaseController
{
    function index($param1 = '',  $param2 = ''){    
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
}

?>

