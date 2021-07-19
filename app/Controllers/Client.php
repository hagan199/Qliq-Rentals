<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Booking;
use App\Models\VendorService;
use App\Models\Service;
use App\Models\CategoryService;
use App\Models\SubCategoryService;
use App\Models\PaymentConfirm;
class Client extends BaseController
{

    public function index()
    {
        $model = new VendorService();
        $data['title'] = 'Qi.Rentals';
        $data['page']= 'Website';
        $data['canopies'] = $model->where('category_id', '13')->limit(1)->findAll(); 
        return view('/layout/site/index',$data);
    }

	public function site()
	{ 
        $model = new VendorService();
        $data['title'] = 'Qi.Rentals';
        $data['page']= 'Website';
        $data['canopy'] = $model->orderBy('id', 'DESC')->findAll();
        $data['canopies'] = $model->where('category_id', '13')->findAll(); 
		return view('/layout/site/index',$data);
	}


    public function about()
	{
        $data['title'] = 'Qi.Rentals';
        $data['page']= 'About';
		return view('layout/site/about',$data);
	}
    
    public function site_canopies()
	{
        $model = new VendorService();
        $data['title'] = 'Qi.Rentals';
        $data['page']= 'Canopies';
        $data['canopies'] = $model->where('category_id', '13')->limit(1,1)->findAll();
		return view('layout/site/canopies',$data);
	}
    
    public function faq()
	{
        $data['title'] = 'Qi.Rentals';
        $data['page']= 'Faq';
		return view('layout/site/faq',$data);
	}

    public function site_tables()
	{
        $data['title'] = 'Qi.Rentals';
        $data['page']= 'Tables';
        $model = new VendorService();
        $data['tables'] = $model->where('category_id', '15')->findAll();
		return view('layout/site/tables',$data);
	}

    public function site_chairs()
	{
        $data['title'] = 'Qi.Rentals';
        $data['page']= 'Chair';
        $model = new VendorService();
        $data['chair'] = $model->where('category_id', '14')->findAll();
		return view('layout/site/chairs',$data);
	}

    public function site_mattress()
	{
        $data['title'] = 'Qi.Rentals';
        $data['page']= 'Mattress';
        $model = new VendorService();
        $data['mattress'] = $model->where('category_id', '16')->findAll();
		return view('layout/site/mattress',$data);
	}

    public function site_gardening_tools()
	{
        $data['title'] = 'Qi.Rentals';
        $data['page']= 'Gardening Tool';
        $model = new VendorService();
        $data['mattress'] = $model->where('category_id', '16')->findAll();
		return view('layout/site/cleaning/gardening_tools',$data);
	}

    public function site_house_cleaning()
	{
        $data['title'] = 'Qi.Rentals';
        $data['page']= 'House Cleaning';
        $model = new VendorService();
        $data['mattress'] = $model->where('category_id', '16')->findAll();
		return view('layout/site/cleaning/house_cleaning',$data);
	}

    public function site_laundry()
	{
        $data['title'] = 'Qi.Rentals';
        $data['page']= 'Laundry';
        $model = new VendorService();
        $data['mattress'] = $model->where('category_id', '16')->findAll();
		return view('layout/site/cleaning/laundry',$data);
	}

    public function site_mower()
	{
        $data['title'] = 'Qi.Rentals';
        $data['page']= 'Mower';
        $model = new VendorService();
        $data['mattress'] = $model->where('category_id', '16')->findAll();
		return view('layout/site/cleaning/mower',$data);
	}

    
    public function site_drones_camera()
	{
        $data['title'] = 'Qi.Rentals';
        $data['page']= 'Drones Camera';
        $model = new VendorService();
        $data['mattress'] = $model->where('category_id', '16')->findAll();
		return view('layout/site/music_ent/drones_camera',$data);
	}

    public function site_sound_system()
	{
        $data['title'] = 'Qi.Rentals';
        $data['page']= 'Sound System';
        $model = new VendorService();
        $data['mattress'] = $model->where('category_id', '16')->findAll();
		return view('layout/site/music_ent/sound_system',$data);
	}

    public function site_staget_lighting()
	{
        $data['title'] = 'Qi.Rentals';
        $data['page']= 'Sound System';
        $model = new VendorService();
        $data['mattress'] = $model->where('category_id', '16')->findAll();
		return view('layout/site/music_ent/staget_lighting',$data);
	}


    
    public function contact()
	{
        $data['title'] = 'Qi.Rentals';
        $data['page']= 'Contact';
		return view('layout/site/contact',$data);
	}

        public function services()
	{
        $data['title'] = 'Qi.Rentals';
        $data['page']= 'Services';
        $categorymodel = new CategoryService();
        $data['category'] = $categorymodel->orderBy('id', 'DECS')->findAll();
        $service_model = new Service();
        $data['service'] = $service_model->orderBy('id', 'DECS')->findAll();
		return view('layout/site/services',$data);
	}

    public function book($id)
	{   
        $model = new VendorService();
        $data['title'] = 'Qi.Rentals';
        $data['page']= 'Book';
        $data['canopies'] = $model->where('id', $id)->findAll();
		return view('layout/site/booked-details',$data);
	}
    
    public function approved_list($id)
	{   $model = new Booking();
        $userdata = get_column_name_by_id('users', session()->get('id'), session()->get('fname'));
        $data['booking_list'] = $model->where('approved_status', '1')->orderBy('id', 'DESC')->findAll();
        $param = array(
                    'approved_status' =>  '1',
                    'approved_date'   =>  date('Y-m-d'),
                    'approved_time'   =>  date('H:i:s'),
                    'admin_approved'  =>  session()->get('id')
                    );
        $model->update($id, $param);
        $data['title'] = 'Approved List';
        $data['page']  = 'Approved ';
    return view('admin/booking_tbl/list',$data);
	}

        
    public function cancel_book($id)
	{   $userdata = get_column_name_by_id('users', session()->get('id'), session()->get('fname'));
        $model = new Booking();
        $data['booking_list'] = $model->where('approved_status', '1')->orderBy('id', 'DESC')->findAll();
        $param = array(
                    'approved_status' =>  '2',
                    'approved_date'   =>  date('Y-m-d'),
                    'approved_time'   =>  date('H:i:s')
                    );
        $model->update($id, $param);
        $data['title'] = 'Cancel List';
        $data['page']  = 'Cancel ';
    return view('admin/booking_tbl/cancel_list',$data);
	}

    public function payment_confirms($id)
	{   $userdata = get_column_name_by_id('users', session()->get('id'), session()->get('fname'));
        $model = new Booking();
        $data['booking_list'] = $model->where('approved_status', '1')->orderBy('id', 'DESC')->findAll();
        $param = array(
                    'payment_status' =>  '1',
                    );
                    $model->update($id, $param);
                    $data['title'] = 'Approve List';
                    $data['page']  = 'Approved';
    return view('admin/booking_tbl/approve_list',$data);
	}

    public function payment_confirm($id)
	{   $session = session();
        $model = new Booking();
        $pmodel = new PaymentConfirm();
        $data['booking_list'] = $model->where('approved_status', '1')->orderBy('id', 'DESC')->findAll();
        $booking = $model->where('id',$id)->findAll();
        foreach($booking as $row) 
            $book_id = $row['id'];
        //  $p = $row['price'];
        $param_payment = array(
                    'payment_status' =>  '1',
                    'date' => date('Y-m-d'),
                    'time' => date('H:i:s'),
                    'book_id' => $book_id,     
                    'admin'  =>  $session->get('id')
                    );
        $pmodel->insert($param_payment);     
        $param = array(
                    'payment_status' =>  '1',      
                    );                          
        $model->update($id, $param);
        $data['title'] = 'Approve List';
        $data['page']  = 'Approved ';
    return view('admin/booking_tbl/approve_list',$data);
	}

    //List of Booking Service
    function book_list(){    
        $model = new Booking();
        $session = session(); 
        $data['booking_list'] = $model->where('approved_status', '0')->orderBy('id', 'DESC')->findAll();
        $data['title'] = 'Booking List';
        $data['page'] = 'Booking ';
        $service_model = new Service();
        $data['vendor'] = $service_model->orderBy('id', 'DECS')->findAll();
        return view('admin/booking_tbl/list',$data);
    } 
    
    function approved_book_list(){    
        $model = new Booking();
        $data['booking_list'] = $model->where('approved_status', '1')->orderBy('id', 'DESC')->findAll();
        $data['title'] = 'Approved List';
        $data['page'] = 'Booking ';
        $service_model = new Service();
        $data['vendor'] = $service_model->orderBy('id', 'DECS')->findAll();
        return view('admin/booking_tbl/approve_list',$data);
    } 
    
    function cancel_list(){    
        $model = new Booking();
        $data['booking_list'] = $model->where('approved_status', '2')->orderBy('id', 'DESC')->findAll();
        $data['title'] = 'Cancel List';
        $data['page'] = 'Booking ';
        $service_model = new Service();
        $data['vendor'] = $service_model->orderBy('id', 'DECS')->findAll();
        return view('admin/booking_tbl/cancel_list',$data);
    } 
    
    public function canopies($param1='' , $param2= '')
	{
        $session = session();
        helper(['form']);
        if($param1 == 'add_canopy'){
        if($this->request->getMethod() == 'post'){
            $rules = [
                "event_type" => "required",
            //  "pick_date" => "required",       
            //  "drop_off" => "required",     
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
                $data['cat_service_id'] =  '13' ;
                if($model->insert($data)){
                $session->setFlashdata("success", "successfully");
                $data['canopies'] = 'add';
                    }else{
                $session->setFlashdata("error", "Something happened please try again");
                $data['canopies'] = 'data';
                }
                }
        }   
    }
    if($param2 == 'add_mattress'){
        if($this->request->getMethod() == 'post'){
            $rules = [
                "event_type" => "required",
                //"pick_date" => "required",       
                //"drop_off" => "required",     
            ];
            if (!$this->validate($rules)){
                $session->setFlashdata("error", "Invalid data request");

            }else{
                $model = new Booking();
                $data['event_type'] =  $this->request->getVar('event_type');
                $data['phone'] =  $this->request->getVar('phone');
                $data['pick_date'] =  $this->request->getVar('pick_date');
                $data['drop_off'] =  $this->request->getVar('drop_off');
                $data['fname'] =  $this->request->getVar('fname');
                $data['lname'] =  $this->request->getVar('lname');
                $data['event_location'] =  $this->request->getVar('event_location');
                $data['number_mattress'] =  $this->request->getVar('number_mattress');
                $data['cat_service_id'] =  '12' ;
            
                if($model->insert($data)){
                    print_r($data);
                    var_dump($data);
    
                $session->setFlashdata("success", "successfully");
                $data['canopies'] = 'add_mattress';
                    }else{
                $session->setFlashdata("error", "Something happened please try again");
                $data['canopies'] = 'add_mattress';
                }
                }
        }   
    }
    $data['title'] = 'Qi.Rentals';
    $data['page']= 'Website';
    return view('layout/site/index',$data);

} 


public function saveCanopies()
{
    if ($this->request->getMethod() == "post") {

        $rules = [
            "drop_off" => "required",
        ];

        if (!$this->validate($rules)) {

            $response = [
                'success' => false,
                'msg' => "There are some validation errors",
            ];

            return $this->response->setJSON($response);
        } else {

            $model = new Booking();
            $vmodel = new VendorService();

            $data = [
                'pickup_date' => $this->request->getVar('pickup_date'),
                'drop_off' => $this->request->getVar('drop_off'),
                'event_location' => $this->request->getVar('event_location'),
                'event_type' => $this->request->getVar('event_type'),
                'number_room' => $this->request->getVar('number_room'),
                'fname' => $this->request->getVar('fname'),
                'lname' => $this->request->getVar('lname'),
                'phone' => $this->request->getVar('phone'),
                'email' => $this->request->getVar('email'),
                'vendor_id' => $this->request->getVar('vendor_id'),
                'service_id' => $this->request->getVar('service_id'),
                'cat_service_id' => $this->request->getVar('cat_service_id'),
                'category_id' => $this->request->getVar('category_id')
            ];
            if($model->insert($data)) {
                $response = [
                    'success' => true,            
                ];
            } 
            return $this->response->setJSON($response);
        }
    }
}



public function mattress($param1='' , $param2= '')
{
    $session = session();
    helper(['form']);
    if($param1 == 'add_mattres'){
    if($this->request->getMethod() == 'post'){
        $rules = [
            //"event_type" => "required",
            //"pick_date" => "required",       
            //"drop_off" => "required",     
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
            $data['number_matttress'] =  $this->request->getVar('number_matttress');
            $data['cat_service_id'] =  '2' ;
        
            if($model->insert($data)){
                print_r($data);
                var_dump($data);

            $session->setFlashdata("success", "successfully");
            $data['mattress'] = 'add_mattres';
                }else{
            $session->setFlashdata("error", "Something happened please try again");
            $data['mattress'] = 'add_mattres';
            }
            }
    }   
}
$data['title'] = 'Qi.Rentals';
$data['page']= 'Website';
return view('layout/site/index',$data);
} 

public function mattresss()
	{
		if ($this->request->getMethod() == "post") {

			$rules = [
				"drop_off" => "required",
				
			
			];

			if (!$this->validate($rules)) {

				$response = [
					'success' => false,
					'msg' => "There are some validation errors",
				];

				return $this->response->setJSON($response);
			} else {

                $model = new Booking();

				$data = [
				
                    "fname" => $this->request->getVar("fname"),
					"lname" => $this->request->getVar("lname"),
                    "event_type" =>  $this->request->getVar('event_type'),
                    "phone" =>  $this->request->getVar('phone'),
                    "pick_date" =>  $this->request->getVar('pick_date'),
                    "drop_off" =>  $this->request->getVar('drop_off'),
                    "event_location" =>  $this->request->getVar('event_location'),
                    "number_matttress" =>  $this->request->getVar('number_matttress'),
                    "cat_service_id" =>  1
					
				];

				if ($model->insert($data)) {

					$response = [
						'success' => true,
						'msg' => "User created",
					];
				} else {
					$response = [
						'success' => true,
						'msg' => "Failed to create user",
					];
				}

				return $this->response->setJSON($response);
			}
		}
	}
}

?>

