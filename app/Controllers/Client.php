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
    
    public function canopies($param1='' )
	{
        $session = session();
        helper(['form']);
        if($param1 == 'add'){
        if($this->request->getMethod() == 'post'){
            $rules = [
                "event_type" => "required",
                "pick_date" => "required",       
                "drop_time" => "required",     
            ];
            if (!$this->validate($rules)){
                $session->setFlashdata("error", "Invalid data request");

            }else{
                $model = new Booking();
                $data['event_type'] =  $this->request->getVar('event_type');
                $data['phone'] =  $this->request->getVar('phone');
                $data['pick_date'] =  $this->request->getVar('pick_date');
                $data['drop_off'] =  $this->request->getVar('drop_off');
                $data['event_location'] =  $this->request->getVar('event_location');
                $data['number_room'] =  $this->request->getVar('number_room');
                $data['cat_service_id'] =  '1' ;
            
                if($model->insert($data)){
                    print_r($data);
                    var_dump($data);

                $session->setFlashdata("success", "successfully");
                print_r($data);
                var_dump($data);
                exit;
                $data['canopies'] = 'add';
              
                    }else{
                $session->setFlashdata("error", "Something happened please try again");
                $data['canopies'] = 'data';
                }
                }
        }   

	} 
    $data['title'] = 'Qi.Rentals';
    $data['page']= 'Website';
    return view('layout/site/index',$data);
} 
}
?>

