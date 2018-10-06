<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

   /**
    * Index Page for this controller.
    *
    * Maps to the following URL
    *       http://example.com/index.php/welcome
    * - or -
    *       http://example.com/index.php/welcome/index
    * - or -
    * Since this controller is set as the default controller in
    * config/routes.php, it's displayed at http://example.com/
    *
    * So any other public methods not prefixed with an underscore will
    * map to /index.php/welcome/<method_name>
    * @see https://codeigniter.com/user_guide/general/urls.html
    */

   public function __construct()
   {
        parent::__construct();
   }

    function index()
    {
        $session_data = $this->session->userdata('logged_in');
        if(!$session_data)
        {
          $this->logout();
          redirect(base_url().'login', 'refresh');
        }
        else
        {
          redirect(base_url().'report/movingOverview', 'refresh');
         //Jika tidak ada session di kembalikan ke halaman login
        }
    }

    function movingOverview(){

        $session_data = $this->session->userdata('logged_in');

        if(!$this->session->userdata('logged_in'))
            redirect(base_url().'login', 'refresh');

        $data['sess_name'] = $session_data['name'];
        $data['sess_unit'] = $session_data['unit'];
        $data['sess_position'] = $session_data['position'];
        $data['sess_image'] = $session_data['image'];

        $this->load->view('v_report', $data);

    }

    function mileageReport(){

              $session_data = $this->session->userdata('logged_in');

              if(!$this->session->userdata('logged_in'))
                  redirect(base_url().'login', 'refresh');

              $data['sess_name'] = $session_data['name'];
              $data['sess_unit'] = $session_data['unit'];
              $data['sess_position'] = $session_data['position'];
              $data['sess_image'] = $session_data['image'];

              $this->load->view('v_mileage_report', $data);
    }
    function speedingDetails(){

              $session_data = $this->session->userdata('logged_in');

              if(!$this->session->userdata('logged_in'))
                  redirect(base_url().'login', 'refresh');

              $data['sess_name'] = $session_data['name'];
              $data['sess_unit'] = $session_data['unit'];
              $data['sess_position'] = $session_data['position'];
              $data['sess_image'] = $session_data['image'];

              $this->load->view('v_speeding_detail', $data);
    }
    function parkingDetails(){}
    function engineOverview(){}
    function engineReport(){}
    function engineIdleReport(){}
    function tripReport(){}
    function speedingTripReport(){}



    function logout()
    {
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect('home', 'refresh');
    }


}
?>
