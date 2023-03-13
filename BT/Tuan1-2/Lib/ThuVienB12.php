<?php 
    function giai($a, $b) 
    {
        $result = "";
        try {
            if($a == "" || $b == ""){
                throw new Exception("Vui lòng nhập dữ liệu!");
            }
            if(is_numeric($a) == false || is_numeric($b) == false)
            {
                return new Exception("Vui lòng nhập đúng định dạng số!");
            }
            else{

                if($a == 0){
                    if($b == 0){
                        $result = "PT có Vô số nghiệm";
                    }
                    else{
                        $result = "PT vô nghiệm";
                    }
                }
                else{
                    $result = -$b/$a;
                }
                return $result;
            }          
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
        
    };
?>