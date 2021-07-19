<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class SiteController extends BaseController
{
	private $perPage = 10;

	public function __construct()
	{
		$this->db = db_connect();
	}

	public function index()
	{
		$builder = $this->db->table("products");

		$count = $builder->countAllResults();

		if (!empty($this->request->getVar("page"))) {

			$start = $this->request->getVar("page") * $this->perPage;
			$query = $builder->limit($start, $this->perPage)->get()->getResult();

			$data['products'] = $query;
			$data['count'] = $count;

			return view('ajax_product', $data); // dynamic product list
		} else {
			$query = $builder->limit($this->perPage, 0)->get()->getResult();
			$data['products'] = $query;
			$data['count'] = intval($count / $this->perPage);
            $data['title'] = 'Qi.Rentals';
            $data['page']= 'Product';
			return view('products', $data);
		}
	}
}