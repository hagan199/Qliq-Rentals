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


?>
