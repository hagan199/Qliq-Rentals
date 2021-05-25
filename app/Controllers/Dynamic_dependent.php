<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Service;
use App\Models\CategoryService;
use App\Models\SubCategoryService;

class Dynamic_dependent extends BaseController
{  
    function index()
	{
		$serviceModel = new Service();
		$data['service'] = $serviceModel->orderBy('id', 'ASC')->findAll();
		return view('setting_vendor/list', $data);
	}


    function action()
	{
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
	}
}


?>

