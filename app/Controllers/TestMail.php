<?php

namespace App\Controllers;
use \CodeIgniter\Controller;

class TestMail extends Controller{

    public function index(){
        echo "Working with Email";
            $to = 'emmastella8@gmail.com';
            $subject = 'Account Activation- QI Rentals '; 
            $message = 'Hi John  ';
            $email = \Config\Services::email();
            $email->setTo($to);
            $email->setFrom('haganemmanuel23@gmail.com','Info');
            $email->setSubject($subject);
            $email->setMessage($message);
           // $filepath = 'public/upload/';
           // $email->attach($filepath); 
            if($email->send())
            {
                echo "Account";
            }else{
                $data = $email->printDebugger(['headers']);
                print_r($data);
            }


            }

}