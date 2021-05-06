<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\BookingCanopy;

class Booking_canopy extends BaseController
{
    function index()
    {    
        $model = new BookingCanopy();
        $data['canopy'] = $model->orderBy('id', 'DESC')->findAll();
        return view('admin/booking_canopy/list',$data);
    }  
    
    function delete($id = null)
    {
        $model = new SettingHall();
        $data['hall'] = $model->where('id', $id)->delete();
        $data['title'] = 'Booking Canopy List';
        return redirect()->to( base_url('booking_canopy') );
    }
}
?>

