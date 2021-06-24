<?php namespace App\Controllers;

use App\Models\Service;
use App\Models\CategoryService;
use App\Models\SubCategoryService;
use App\Models\CrudModel;
class Dynamic_dependent extends BaseController
{
	function index()
	{
		$serviceModel = new Service();

		$data['service'] = $serviceModel->orderBy('service_name', 'ASC')->findAll();

		return view('dynamic_dependent', $data);
	}

	function action()
	{
		if($this->request->getVar('action'))
		{
			$action = $this->request->getVar('action');

			{
				$Categoryservice = new CategoryService();

				$categorydata = $Categoryservice->where('service_id', $this->request->getVar('service_id'))->findAll();

				echo json_encode($categorydata);
			}

			if($action == 'get_sub_category')
			{
				$SubCategoryModel = new SubCategoryService();
				$subcategorydata = $SubCategoryModel->where('category_service_id', $this->request->getVar('category_service_id'))->findAll();
				echo json_encode($subcategorydata);
			}
		}
	}



    // public function getcategory() 
    // {
    //     $Categoryservice = new CategoryService();
    //     $categorydata = $Categoryservice->where('service_id', $this->request->getVar('service_id'))->findAll();
    //     echo json_encode($categorydata);
    // }



    // public function getsubcategory() 
    // {
    //     $SubCategoryModel = new SubCategoryService();
    //     $subcategorydata = $SubCategoryModel->where('category_service_id', $this->request->getVar('category_service_id'))->findAll();
    //     echo json_encode($subcategorydata);
    // }



public function vendor_service_dependant(){ 
		if ($this->request->getMethod() == 'post') { 
		$db = db_connect();
		$model = new CrudModel($db);
		$service_id = $this->request->getVar('service_id'); 
		$classRep = $model->getcategory($service_id); 
		return $classRep; 
		} 
	}

	public function vendor_getcategory_dependant(){ 
		if ($this->request->getMethod() == 'post') { 
		$db = db_connect();
		$model = new CrudModel($db);
		$category = $this->request->getVar('category'); 
		$classRep = $model->getsubcategory($category); 
		return $classRep; 
		} 
	}
}




?>