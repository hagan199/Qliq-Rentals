<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Booking;

class Client extends BaseController
{

    
	public function index()
	{
		return view('layout/site');
	}

    //List of Booking Service
    function book_list()
    {    
        $model = new Booking();
        $data['booking_list'] = $model->orderBy('id', 'DESC')->findAll();
        $data['title'] = 'Booking List';
        $data['page'] = 'Booking ';

        return view('admin/booking_tbl/list',$data);
    }  
    
}
?>

