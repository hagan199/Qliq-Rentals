<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Booking;
use App\Models\VendorService;
use App\Models\Service;
use App\Models\CategoryService;
use App\Models\SubCategoryService;
use App\Models\PaymentConfirm;
use App\Models\UserModel;
use App\Models\CustomModel;
class Client extends BaseController
{

    public $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    public function index($param1 = ''){
        
        $pager = \Config\Services::pager();
      //  $db = db_connect();
       // $modelCus = new CustomModel($db);
        $model = new VendorService();
        $data['canopies'] =  $model->where('category_id', '13')->paginate(60);
        $data['chairs']   =  $model->where('category_id', '14')->paginate(60);
        $data['tables']   =  $model->where('category_id', '15')->paginate(60);
        $data['mattress'] =  $model->where('category_id', '16')->paginate(60);
        $data['mower']    =  $model->where('category_id', '19')->paginate(60);
        $data['laundry']  =  $model->where('category_id', '20')->paginate(60);
        $data['garderning']  =  $model->where('category_id', '21')->paginate(60);
        $data['pager']    =  $model->pager;
        $data['page']     =  'Website';
        $data['title']    =  'Qi.Rentals';
        return view('/layout/site/index',$data);
    }


    public function ajaxCanopies(){
            $vmodel = new VendorService();
            $row = $_POST['row'];
            $rowperpage = 3;
          //  $data['canopies'] = $vmodel->where('category_id', '13')->limit(1)->findAll(); 
            $data['count_canopies'] = $model->where('category_id', '13')->limit($rowperpage)->countAllResults(); 
            //  print_r($count_canopies);
            exit;
                while($count_canopies = $row){
                    $id = $row['id'];
                    $vendor = $row['vendor_id'];
                    $category = $row['category_id'];
                    $price = $row['price'];
                    $description = $row['link'];
            // Creating HTML structure
                    $html .= '<div id="post_'.$id.'" class="post">';
                    $html .= '<h1>'.$category.'</h1>';
                    $html .= '<p>'.$price.'</p>';
                    $html .= '<a href="'.$description.'" class="more" target="_blank">More</a>';
                    $html .= '</div>';             
                    }
                echo $html;
        }
    
	public function site(){   
            $pager = \Config\Services::pager();
            $model = new VendorService();
       $data['canopies'] =  $model->where('category_id', '13')->paginate(60);
        $data['chairs']   =  $model->where('category_id', '14')->paginate(60);
        $data['tables']   =  $model->where('category_id', '15')->paginate(60);
        $data['mattress'] =  $model->where('category_id', '16')->paginate(60);
        $data['mower']    =  $model->where('category_id', '19')->paginate(60);
        $data['laundry']  =  $model->where('category_id', '20')->paginate(60);
        $data['garderning']  =  $model->where('category_id', '21')->paginate(60);
            $data['pager'] =  $model->pager;
            $data['title'] = 'Qi.Rentals';
            $data['page']= 'Website';
		return view('/layout/site/index',$data);
	}


    public function about(){
        $data['title'] = 'Qi.Rentals';
        $data['page']= 'About';
		return view('layout/site/about',$data);
	}
    
    public function site_canopies(){   
        $pager = \Config\Services::pager();
        $model = new VendorService();
        $data['canopies'] =  $model->where('category_id', '13')->paginate(10);
        $data['pager'] =  $model->pager;
        $data['title'] = 'Qi.Rentals';
        $data['page']= 'Canopies';
      //$data['canopies'] = $model->where('category_id', '13')->limit(1,1)->findAll();
		return view('layout/site/canopies',$data);
	}
    
    public function faq(){
        $data['title'] = 'Qi.Rentals';
        $data['page']= 'Faq';
		return view('layout/site/faq',$data);
	}

    public function site_tables(){  
        $model = new VendorService();
        $data['tables'] = $model->where('category_id', '15')->paginate(10);
        $data['pager'] =  $model->pager;
        $data['title'] = 'Qi.Rentals';
        $data['page']= 'Tables';
		return view('layout/site/tables',$data);
	}

    public function site_chairs(){   
        $pager = \Config\Services::pager();
        $model = new VendorService();
        $data['chairs'] =  $model->where('category_id', '13')->paginate(10);
        $data['pager'] =  $model->pager;
        $data['title'] = 'Qi.Rentals';
        $data['page']= 'Chair';
		return view('layout/site/chairs',$data);
	}

    public function site_mattress(){
        $pager = \Config\Services::pager();
        $model = new VendorService();
        $data['mattress'] = $model->where('category_id', '16')->paginate(10);
        $data['pager'] =  $model->pager;
        $data['title'] = 'Qi.Rentals';
        $data['page']= 'Mattress';
		return view('layout/site/mattress',$data);
	}

    public function site_gardening_tools(){
        $data['title'] = 'Qi.Rentals';
        $data['page']= 'Gardening Tool';
        $model = new VendorService();
        $data['mattress'] = $model->where('category_id', '16')->findAll();
		return view('layout/site/cleaning/gardening_tools',$data);
	}

    public function site_house_cleaning(){
        $data['title'] = 'Qi.Rentals';
        $data['page']= 'House Cleaning';
        $model = new VendorService();
        $data['mattress'] = $model->where('category_id', '16')->findAll();
		return view('layout/site/cleaning/house_cleaning',$data);
	}

    public function site_laundry(){
        $data['title'] = 'Qi.Rentals';
        $data['page']= 'Laundry';
        $model = new VendorService();
        $data['laundry'] = $model->where('category_id', '16')->findAll();
		return view('layout/site/cleaning/laundry',$data);
	}

    public function site_mower(){
        $data['title'] = 'Qi.Rentals';
        $data['page']= 'Mower';
        $model = new VendorService();
        $data['mower'] = $model->where('category_id', '16')->findAll();
		return view('layout/site/cleaning/mower',$data);
	}
    
    public function site_drones_camera(){
        $data['title'] = 'Qi.Rentals';
        $data['page']= 'Drones Camera';
        $model = new VendorService();
        $data['drones_camera'] = $model->where('category_id', '16')->findAll();
		return view('layout/site/music_ent/drones_camera',$data);
	}

    public function site_sound_system(){
        $data['title'] = 'Qi.Rentals';
        $data['page']= 'Sound System';
        $model = new VendorService();
        $data['sound_system'] = $model->where('category_id', '16')->findAll();
		return view('layout/site/music_ent/sound_system',$data);
	}

    public function site_staget_lighting(){
        $data['title'] = 'Qi.Rentals';
        $data['page']= 'Staget lighting';
        $model = new VendorService();
        $data['staget_lighting'] = $model->where('category_id', '16')->findAll();
		return view('layout/site/music_ent/staget_lighting',$data);
	}

    public function site_video_coverage(){
        $data['title'] = 'Qi.Rentals';
        $data['page']= 'Video Coverage';
        $model = new VendorService();
        $data['video_coverage'] = $model->where('category_id', '16')->findAll();
		return view('layout/site/music_ent/video_coverage',$data);
	}

    public function contact(){
        $data['title'] = 'Qi.Rentals';
        $data['page']= 'Contact';
		return view('layout/site/contact',$data);
	}

    public function services(){
        $data['title'] = 'Qi.Rentals';
        $data['page']= 'Services';
        $categorymodel = new CategoryService();
        $data['category'] = $categorymodel->orderBy('id', 'DECS')->findAll();
        $service_model = new Service();
        $data['service'] = $service_model->orderBy('id', 'DECS')->findAll();
		return view('layout/site/services',$data);
	}

    public function join_us(){
        $data['title'] = 'Qi.Rentals';
        $data['page']= 'Join Us';
		return view('layout/site/join_us',$data);
	}


    
public function  vendor_self_sign_up($param1 = '',  $param2 = ''){    
            $session = session();
            if($param1 == 'add'){
                if($this->request->getMethod() == 'post'){
                    $rules = [
                        "fname" => "required",
                        "lname" => "required",  
                        "location" => "required"          
                    ];
                    if (!$this->validate($rules)){
                        $session->setFlashdata("error", "Invalid data request");
                        $data['users'] =  'add';
                    }else{
                        $model = new UserModel();       
                        $data['fname'] = $this->request->getVar('fname');
                        $data['lname'] = $this->request->getVar('lname');
                        $data['phone'] = $this->request->getVar('phone');
                        $data['location'] = $this->request->getVar('location');
                        $data['email'] = $this->request->getVar('email');
                        $data['user_type'] = '404';
                        $data['date'] =  date('Y-m-d');
                        $data['time'] = date('H:i:s');
                        $data['user_name'] = $this->request->getVar('user_name',FILTER_SANITIZE_STRING);
                        $data['user_password'] = password_hash($this->request->getVar('password'), PASSWORD_DEFAULT);
                    if($model->insert($data)){
                    $session->setFlashdata("success", "successfully");
                        $data['users'] =  'add';
                        }else{
                    $session->setFlashdata("error", "Something happened please try again");
                    $data['users'] =  'add';
                        }
                }   
            }   
            }
        $session->setFlashdata("success", "successfully");
            $data['title'] = 'Qi.Rentals';
            $data['page']= 'Vendor Self Sign Up';
		    return view('layout/site/vendor_self_sign_up',$data);
	}

    public function book($id){   
        $model = new VendorService();
        $data['title'] = 'Qi.Rentals';
        $data['page']= 'Book';
        $data['canopies'] = $model->where('id', $id)->findAll();
		return view('layout/site/booked-details',$data);
	}

    public function book_table($id){   
        $model = new VendorService();
        $data['title'] = 'Qi.Rentals';
        $data['page']= 'Book';
        $data['canopies'] = $model->where('id', $id)->findAll();
		return view('layout/site/booked-details-tables',$data);
	}
    
    public function book_chair($id){   
        $model = new VendorService();
        $data['title'] = 'Qi.Rentals';
        $data['page']= 'Book';
        $data['canopies'] = $model->where('id', $id)->findAll();
		return view('layout/site/booked-details-chair',$data);
	}

    public function book_mattress($id){   
        $model = new VendorService();
        $data['title'] = 'Qi.Rentals';
        $data['page']= 'Book';
        $data['canopies'] = $model->where('id', $id)->findAll();
		return view('layout/site/booked-details-mattress',$data);
	}

    public function method_payment(){
        $data['title'] = 'Qi.Rentals';
        $data['page']= 'Method Payment';
		return view('layout/site/method_payment',$data);
	}

    public function policy(){
        $data['title'] = 'Qi.Rentals';
        $data['page']= 'Policy';
		return view('layout/site/policy',$data);
	}
    
    public function term_condition(){
        $data['title'] = 'Qi.Rentals';
        $data['page']= 'Terms & Condition';
		return view('layout/site/term_condition',$data);
	}
    //List of Booking Service
    function book_list($param1 = '', $param2 = ''){ 
        if($param1 == 'approve'){
            $model = new Booking();
        $userdata = get_column_name_by_id('users', session()->get('id'), session()->get('fname'));
        $data['booking_list'] = $model->where('approved_status', '0')->orderBy('id', 'DESC')->findAll();
        $param = array(
                    'approved_status' =>  '1',
                    'approved_date'   =>  date('Y-m-d'),
                    'approved_time'   =>  date('H:i:s'),
                    'admin_approved'  =>  session()->get('id')
                    );
        $model->update($param2, $param);
        }

        if($param1 == 'cancel'){
            $userdata = get_column_name_by_id('users', session()->get('id'), session()->get('fname'));
            $model = new Booking();
            $data['booking_list'] = $model->where('approved_status', '0')->orderBy('id', 'DESC')->findAll();
            $param = array(
                        'approved_status' =>  '2',
                        'approved_date'   =>  date('Y-m-d'),
                        'approved_time'   =>  date('H:i:s')
                        );
            $model->update($param2, $param);
        }
        $model = new Booking();
        $session = session(); 
        $data['booking_list'] = $model->where('approved_status','0')->orderBy('id', 'DESC')->findAll();
        $data['title'] = 'Booking List';
        $data['page'] = 'Booking ';
        $service_model = new Service();
        $data['vendor'] = $service_model->orderBy('id', 'DECS')->findAll();
        return view('admin/booking_tbl/list',$data);
    }   

    function approved_book_list($parem1 = '' , $parem2 =''){  
        if($parem1 = 'payment_confirm'){
            if($this->request->getMethod() == 'post'){
            $session = session(); 
            $model = new Booking();
            $pmodel = new PaymentConfirm();
            
            $param_payment = array(
                'payment_status' =>  '1',
                'date'           => date('Y-m-d'),
                'time'           => date('H:i:s'),
                'book_id'        => $parem2,     
                'admin'          =>  $session->get('id')
            );
            $param = array(
                'payment_status' =>  '1',
            );
           // $pmodel->insert($param_payment); 
            if($pmodel->insert($param_payment )){
                $session->setFlashdata("success", "successfully");
                    }else{
                $session->setFlashdata("error", "Something happened please try again");
                }
                $param = array(
                    'payment_status' =>  '1',      
                );                          
                $model->update($parem2, $param);
        }
    }
        $model = new Booking();
        $data['booking_list'] = $model->where('approved_status','1')->orderBy('id', 'DESC')->findAll();
        $data['title'] = 'Approved List';
        $data['page'] = 'Approved Booking ';

        return view('admin/booking_tbl/approve_list',$data);
    }  

    function cancel_list($param1 = '', $param2 = ''){ 
        if($param1 = 'delete'){
            $session = session();  
        $Booking = new Booking();
        ## Check record
        if($Booking->where('approved_status','2')->orderBy('id', 'DESC')->findAll()){
        ## Delete record
        $Booking->delete($param2);
        $session->setFlashdata("success", "Deleted Successfully!");
        }else{
    
        }
        }
       
        $model = new Booking();
        $data['booking_list'] = $model->where('approved_status', '2')->orderBy('id', 'DESC')->findAll();
        $data['title'] = 'Cancel List';
        $data['page'] = 'Booking ';
        $service_model = new Service();
        $data['vendor'] = $service_model->orderBy('id', 'DECS')->findAll();
        return view('admin/booking_tbl/cancel_list',$data);
    } 
    
    public function canopies($param1='' , $param2= ''){
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

public function saveCanopies(){
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
                'category_id' => $this->request->getVar('category_id'),
                'total_price' => $this->request->getVar('total_price'),    
            ];
            if($model->insert($data)) {
                $to =  $this->request->getVar('phone');
                $category_service = get_column_name_by_id('category_service_tbl', $data['category_id'], 'category_name');
                $total_price = $this->request->getVar('total_price');
                $msg = "Congrats on successfully registering.Your price  is  Gh¢."."{$total_price}";
    
                $res = send_sms($to,$msg);
                $response = [
                    'success' => true,            
                ];
            } 
            return $this->response->setJSON($response);
        }
    }
}


public function mattress($param1='' , $param2= ''){
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

public function mattresss(){
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