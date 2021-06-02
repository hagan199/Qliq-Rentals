<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Booking;

class Client extends BaseController
{

    
	public function site()
	{
        $data['title'] = 'Qi.Rentals';
        $data['page']= 'Website';
		return view('layout/site/index',$data);
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

