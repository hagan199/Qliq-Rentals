<?php 
function src($filename,$type="full"){
        $path= './uploads/services/';
        if($type != 'full'){
            $path .= $type .'/';
            return $path . $filename;
        }

}
?>