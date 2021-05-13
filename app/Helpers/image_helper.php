<?php 
function src($filename,$type="full"){
        $path= './upload/image/chair/';
        if($type != 'full'){
            $path .= $type .'/';
            return $path . $filename;
        }

}
?>