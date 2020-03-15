<?php
    
    if(isset($_POST['submit'])){
 
        $countfiles = count($_FILES['File']['name']);

        for($i=0;$i<$countfiles;$i++){
         $name = $_FILES['File']['name'][$i];
         $size = $_FILES['File']['size'][$i];
         $type = $_FILES['File']['type'][$i];
         $tmp_name = $_FILES['File']['tmp_name'][$i];
       
         if(checkType($type) && checkSize($size)){
    
        if(move_uploaded_file($_FILES['File']['tmp_name'][$i],'uploads/'.$name)){
            echo "<img src='uploads/".$name."' width='150' height='150'>";

            
        }else{
            echo "Failed to upload";
        }
    }else{
        echo "Dili mao ang file type";
    }
    
 }
}

function checkType($type = null){
    $allowed = array('png','jpg','jpeg','gif','mp3');

    if($type){
        $strArray = explode('/', $type);
        return in_array(end($strArray), $allowed);
    }
}

function checkSize($size = null){
    $max = 1000000; 
    if($size){
        return $size <= $max;
    }
}
?>
