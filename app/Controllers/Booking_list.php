<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Booking;

class Booking_list extends BaseController
{
    function index()
    {    
        $model = new Booking();
        $data['booking_list'] = $model->orderBy('id', 'DESC')->findAll();
        $data['title'] = 'Booking List';
        return view('admin/booking_tbl/list',$data);
    }  
    
    function delete($id = null)
    {
        $model = new Booking();
        $data['booking'] = $model->where('id', $id)->delete();
        return redirect()->to( base_url('booking') );
    }
}
?>

