<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class FishingVessel extends CI_Controller {

    public function index()
    {
        $this->load->view('header');
        $this->load->view('fishing-vessel/index');
        $this->load->view('footer');        
    }
    public function all()
    {
        echo 'Show All Vessels';
    }

    public function new_ship()
    {
            $this->load->view('header');
            $this->load->view('fishing-vessel/new-ship');
            $this->load->view('footer');
    }

    // public function new_success()
    // {
        
    // }

}

/* End of file FishingVessel.php */


?>