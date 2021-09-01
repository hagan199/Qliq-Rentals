<?php
if(!function_exists('get_column_name_by_id')){ 
    function get_column_name_by_id($type ,$id, $filed)
    {
    $db  = \Config\Database::connect();
    $builder = $db->table($type);
    $builder = $builder->Where('id', $id);
    $servicedetail = $builder->get()->getRow($filed);
    return $servicedetail;
// $kweku= '67RBuOWFm+h44ZBY8hYtZwiGyrQGWFGrO35OeZXS'
//   $kwekue=' lp8xkzTcBDFTZ'
    }
}



if(!function_exists('send_sms')){ 
    function send_sms($to, $msg)
    {
        $Message = $msg;
        $memberContact = [$to,'0574725804'];
$curl = curl_init();
$SMSdetails = [
    'sender' => 'QLIQ INTEG',
    "message" => $Message,
    "recipients" => $memberContact,
];
curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://devapi.fayasms.com/messages',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS =>json_encode($SMSdetails, 1),
    CURLOPT_HTTPHEADER => array(
        'fayasms-developer: 58993962.2NdDUBWCFhHgpjgdAb9bADqRu5lByg9C'
        ),
));
$response = curl_exec($curl);
curl_close($curl);
return $response; 
}
    }



?>
