<?php

//Dynamic_dependent.php

namespace App\Controllers;

use App\Models\Service;
use App\Models\CategoryService;
use App\Models\SubCategoryService;

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



    public function getcategory() 
    {
        $Categoryservice = new CategoryService();
        $categorydata = $Categoryservice->where('service_id', $this->request->getVar('service_id'))->findAll();
        echo json_encode($categorydata);
    }



    public function getsubcategory() 
    {
        $SubCategoryModel = new SubCategoryService();
        $subcategorydata = $SubCategoryModel->where('category_service_id', $this->request->getVar('category_service_id'))->findAll();
        echo json_encode($subcategorydata);
    }



}




?>