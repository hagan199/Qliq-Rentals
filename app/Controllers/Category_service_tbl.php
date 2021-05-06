<?php namespace App\Controllers;
namespace CodeIgniter;
use CodeIgniter\Controller;
use App\Models\CategoryService;
use App\Models\UserModel;

class Category_service_tbl extends BaseController
{
    function index($param1 = '',  $param2 = ''){    
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
        return view('admin/category_service_tbl/list',$data);
    }  

}
?>

