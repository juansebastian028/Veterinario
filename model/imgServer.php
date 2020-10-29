<?php
    class ImageServer{

        private $img_name;
        private $img_type;
        private $img_size;
        private $limit_size_img;

        public function __construct($img_name,$img_type,$img_size,$limit_size_img) {

            $this->img_name = $img_name;
            $this->img_type = $img_type;
            $this->img_size = $img_size;
            $this->limit_size_img = $limit_size_img;
        }

        public function check_limit_size_img(){

            if($this->img_size <= $this->limit_size_img){
                
                return true;

            }else{

                return false;
            }
        }

        public function validate_img_format(){

            $imgs_formats = ['jpeg','jpg','png','gif'];
            $foundFormat = false;
        
            for ($i=0; $i < count($imgs_formats) && !$foundFormat ; $i++) { 
        
                if($this->img_type==='image/'. $imgs_formats[$i]){
                    $foundFormat = true;
                }
            }

            return $foundFormat;
        }

        public function upload_image($filename,$destination_folder){
            
            move_uploaded_file($filename, $destination_folder . $this->img_name);
        }
    
    }
?>