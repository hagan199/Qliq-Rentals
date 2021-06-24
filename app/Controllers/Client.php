<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Booking;
use App\Models\VendorService;
use App\Models\Service;
use App\Models\CategoryService;
class Client extends BaseController
{

	public function site()
	{
        $data['title'] = 'Qi.Rentals';
        $data['page']= 'Website';
        $model = new VendorService();
        $data['vendor'] = $model->orderBy('id', 'DESC')->findAll();
		return view('layout/site/index',$data);
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
        $data['canopies'] = $model->where('category_id', '13')->findAll();
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

    public function contact()
	{
        $data['title'] = 'Qi.Rentals';
        $data['page']= 'Contact';
        $model = new VendorService();
        $data['vendor'] = $model->where('category_id', '13')->findAll();
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
    //List of Booking Service
    function book_list()
    {    
        $model = new Booking();
        $data['booking_list'] = $model->orderBy('id', 'DESC')->findAll();
        $data['title'] = 'Booking List';
        $data['page'] = 'Booking ';
        $service_model = new Service();
        $data['vendor'] = $service_model->orderBy('id', 'DECS')->findAll();
        return view('admin/booking_tbl/list',$data);
    } 
    
    public function canopies($param1='' , $param2= '')
	{
        $session = session();
        helper(['form']);
        if($param1 == 'add_canopy'){
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
                $data['event_location'] =  $this->request->getVar('event_location');
                $data['number_room'] =  $this->request->getVar('number_room');
                $data['cat_service_id'] =  '13' ;
            
                if($model->insert($data)){
                    print_r($data);
                    var_dump($data);

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
                    "cat_service_id" =>  '2' 
					
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

