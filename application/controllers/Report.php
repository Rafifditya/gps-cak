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
          redirect(base_url().'Login', 'refresh');
        }
        else
        {
          redirect(base_url().'Report/movingOverview', 'refresh');
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
    function speedingDetail(){

              $session_data = $this->session->userdata('logged_in');

              if(!$this->session->userdata('logged_in'))
                  redirect(base_url().'login', 'refresh');

              $data['sess_name'] = $session_data['name'];
              $data['sess_unit'] = $session_data['unit'];
              $data['sess_position'] = $session_data['position'];
              $data['sess_image'] = $session_data['image'];

              $this->load->view('v_speeding_detail', $data);
    }

    function parkingDetails(){
      $session_data = $this->session->userdata('logged_in');

      if(!$this->session->userdata('logged_in'))
          redirect(base_url().'login', 'refresh');

      $data['sess_name'] = $session_data['name'];
      $data['sess_unit'] = $session_data['unit'];
      $data['sess_position'] = $session_data['position'];
      $data['sess_image'] = $session_data['image'];

      $this->load->view('v_parking_details', $data);

    }
    function engineOverview(){
      $session_data = $this->session->userdata('logged_in');

      if(!$this->session->userdata('logged_in'))
          redirect(base_url().'login', 'refresh');

      $data['sess_name'] = $session_data['name'];
      $data['sess_unit'] = $session_data['unit'];
      $data['sess_position'] = $session_data['position'];
      $data['sess_image'] = $session_data['image'];

      $this->load->view('v_engine_overview', $data);

    }
    function engineReport(){

        $session_data = $this->session->userdata('logged_in');

        if(!$this->session->userdata('logged_in'))
            redirect(base_url().'login', 'refresh');

        $data['sess_name'] = $session_data['name'];
        $data['sess_unit'] = $session_data['unit'];
        $data['sess_position'] = $session_data['position'];
        $data['sess_image'] = $session_data['image'];

        $this->load->view('v_engine_report', $data);

    }
    function engineIdleReport(){
      $session_data = $this->session->userdata('logged_in');

      if(!$this->session->userdata('logged_in'))
          redirect(base_url().'login', 'refresh');

      $data['sess_name'] = $session_data['name'];
      $data['sess_unit'] = $session_data['unit'];
      $data['sess_position'] = $session_data['position'];
      $data['sess_image'] = $session_data['image'];

      $this->load->view('v_engine_idle_report', $data);

    }
    function tripReport(){
      $session_data = $this->session->userdata('logged_in');

      if(!$this->session->userdata('logged_in'))
          redirect(base_url().'login', 'refresh');

      $data['sess_name'] = $session_data['name'];
      $data['sess_unit'] = $session_data['unit'];
      $data['sess_position'] = $session_data['position'];
      $data['sess_image'] = $session_data['image'];

      $this->load->view('v_trip_report', $data);

    }
    function speedingTripReport(){
      $session_data = $this->session->userdata('logged_in');

      if(!$this->session->userdata('logged_in'))
          redirect(base_url().'login', 'refresh');

      $data['sess_name'] = $session_data['name'];
      $data['sess_unit'] = $session_data['unit'];
      $data['sess_position'] = $session_data['position'];
      $data['sess_image'] = $session_data['image'];

      $this->load->view('v_speeding_trip_report', $data);
    }

    function drivingBehaviorOverview(){
      $session_data = $this->session->userdata('logged_in');

      if(!$this->session->userdata('logged_in'))
          redirect(base_url().'login', 'refresh');

      $data['sess_name'] = $session_data['name'];
      $data['sess_unit'] = $session_data['unit'];
      $data['sess_position'] = $session_data['position'];
      $data['sess_image'] = $session_data['image'];

      $this->load->view('v_driving_behavior_overview', $data);
    }
    function drivingBehaviorReport(){
      $session_data = $this->session->userdata('logged_in');

      if(!$this->session->userdata('logged_in'))
          redirect(base_url().'login', 'refresh');

      $data['sess_name'] = $session_data['name'];
      $data['sess_unit'] = $session_data['unit'];
      $data['sess_position'] = $session_data['position'];
      $data['sess_image'] = $session_data['image'];

      $this->load->view('v_driving_behavior_report', $data);
    }
    function drivingBehaviorDetails(){
      $session_data = $this->session->userdata('logged_in');

      if(!$this->session->userdata('logged_in'))
          redirect(base_url().'login', 'refresh');

      $data['sess_name'] = $session_data['name'];
      $data['sess_unit'] = $session_data['unit'];
      $data['sess_position'] = $session_data['position'];
      $data['sess_image'] = $session_data['image'];

      $this->load->view('v_driving_behavior_details', $data);

    }
    function tripFuelConsumptionOverview(){
        $session_data = $this->session->userdata('logged_in');

        if(!$this->session->userdata('logged_in'))
            redirect(base_url().'login', 'refresh');

        $data['sess_name'] = $session_data['name'];
        $data['sess_unit'] = $session_data['unit'];
        $data['sess_position'] = $session_data['position'];
        $data['sess_image'] = $session_data['image'];

        $this->load->view('v_trip_fuel_consumption_overview', $data);

    }
    function tripFuelConsumptionDetails(){
        $session_data = $this->session->userdata('logged_in');

        if(!$this->session->userdata('logged_in'))
            redirect(base_url().'login', 'refresh');

        $data['sess_name'] = $session_data['name'];
        $data['sess_unit'] = $session_data['unit'];
        $data['sess_position'] = $session_data['position'];
        $data['sess_image'] = $session_data['image'];

        $this->load->view('v_trip_fuel_consumption_detail', $data);
    }
    function dtcReport(){
        $session_data = $this->session->userdata('logged_in');

        if(!$this->session->userdata('logged_in'))
            redirect(base_url().'login', 'refresh');

        $data['sess_name'] = $session_data['name'];
        $data['sess_unit'] = $session_data['unit'];
        $data['sess_position'] = $session_data['position'];
        $data['sess_image'] = $session_data['image'];

        $this->load->view('v_dtc_report', $data);

    }

    function alertOverview(){
        $session_data = $this->session->userdata('logged_in');

        if(!$this->session->userdata('logged_in'))
            redirect(base_url().'login', 'refresh');

        $data['sess_name'] = $session_data['name'];
        $data['sess_unit'] = $session_data['unit'];
        $data['sess_position'] = $session_data['position'];
        $data['sess_image'] = $session_data['image'];

        $this->load->view('v_alert_overview', $data);

    }
    function alertReport(){
        $session_data = $this->session->userdata('logged_in');

        if(!$this->session->userdata('logged_in'))
            redirect(base_url().'login', 'refresh');

        $data['sess_name'] = $session_data['name'];
        $data['sess_unit'] = $session_data['unit'];
        $data['sess_position'] = $session_data['position'];
        $data['sess_image'] = $session_data['image'];

        $this->load->view('v_alert_report', $data);

    }
    function alertDetails(){
        $session_data = $this->session->userdata('logged_in');

        if(!$this->session->userdata('logged_in'))
            redirect(base_url().'login', 'refresh');

        $data['sess_name'] = $session_data['name'];
        $data['sess_unit'] = $session_data['unit'];
        $data['sess_position'] = $session_data['position'];
        $data['sess_image'] = $session_data['image'];

        $this->load->view('v_alert_details', $data);

    }





    function logout()
    {
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect('home', 'refresh');
    }


}
?>
