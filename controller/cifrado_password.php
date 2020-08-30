<?php

    function cifradoMurcielago($password){
        
        $murcielago = "murcielago";
        $contraEncriptada = "";

        for($i=0;$i<strlen($password);$i++){
                
                $coinciden = strrpos($murcielago,$password[$i]);

                if($coinciden !== false){
                        $contraEncriptada .= $coinciden;    
                }else{
                        $contraEncriptada .= $password[$i];
                }       
        }
        return $contraEncriptada;
    }

?>