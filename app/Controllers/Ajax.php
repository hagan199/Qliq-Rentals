<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\User;

class Ajax extends Controller {


    public function index() {
        
        helper(['form', 'url']);

        $this->UserModel = new User();

        $data = [
            'users' => $this->UserModel->paginate(5),
            'pager' => $this->UserModel->pager,
            'title' => 'Setup Vendor Service',
            'page' => 'Vendor Service'
        ];   
        $data['title'] = 'Setup Vendor Service ';
        $data['page'] = 'Vendor Service '; 
        return view('home', $data);
    }

    public function get_ajax_load_more(){
        $limit = 5; 
        $page = $limit * $this->request->getVar('page');
        $data['users'] = $this->get_load_more_data($limit,$page);
        $data['title'] = 'Setup Vendor Service ';
        $data['page'] = 'Vendor Service '; 
        return view('load_more_loop', $data);
            echo json_encode($data);
        }

    function get_load_more_data($limit, $offset = ''){
        $builder = new User();
        $query = $builder->select('*')
                ->limit($limit,$offset)
                ->get();
        return $query->getResult();
    }  



}
