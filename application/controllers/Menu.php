<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Menu extends CI_controller
{
   public function Index()
{
   $data = array(
    'content' => ' dashboard/index.php'
   );
  
   $this->load->view('Template/Main',$data); 
 

}
}





?>