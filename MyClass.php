 <?php

 class MyClass{

     public $mas_prep_get = array('!' => '?', ',' => '.', ':' => ';', '(' => '[', ')' => ']');

     public function PrepReverse($str){
         if (!is_null($str)){
             $new_str = $str;

             foreach ($this->mas_prep_get as $key => $value) {
                 $this->mas_prep_get+=array($value => $key);
             }

             for ($i = 0; $i < strlen($str); $i++){
                 foreach ($this->mas_prep_get as $key => $item) {
                     if ($str[$i] == $key) {
                         $new_str[$i] = $item;
                     }
                 }
             }

             return $new_str;
         } else {
             return 'Эй, почему ты не ввел слово???';
         }
     }
 }
