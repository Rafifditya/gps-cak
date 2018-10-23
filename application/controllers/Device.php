<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Device extends CI_Controller {

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
            redirect(base_url().'Device/currentDevice', 'refresh');
            //Jika tidak ada session di kembalikan ke halaman login
        }
    }



    function currentDevice(){

        $session_data = $this->session->userdata('logged_in');

        if(!$this->session->userdata('logged_in'))
            redirect(base_url().'login', 'refresh');

        $data['sess_name'] = $session_data['name'];
        $data['sess_unit'] = $session_data['unit'];
        $data['sess_position'] = $session_data['position'];
        $data['sess_image'] = $session_data['image'];

        $this->load->view('v_device', $data);

    }

    function groupDevice(){

        $session_data = $this->session->userdata('logged_in');

        if(!$this->session->userdata('logged_in'))
            redirect(base_url().'login', 'refresh');

        $data['sess_name'] = $session_data['name'];
        $data['sess_unit'] = $session_data['unit'];
        $data['sess_position'] = $session_data['position'];
        $data['sess_image'] = $session_data['image'];

        $this->load->view('v_target_group', $data);

    }

    function maintenanceOverview(){

        $session_data = $this->session->userdata('logged_in');

        if(!$this->session->userdata('logged_in'))
            redirect(base_url().'login', 'refresh');

        $data['sess_name'] = $session_data['name'];
        $data['sess_unit'] = $session_data['unit'];
        $data['sess_position'] = $session_data['position'];
        $data['sess_image'] = $session_data['image'];

        $this->load->view('v_maintenance_overview', $data);

    }

    function shareLocationManagement(){

        $session_data = $this->session->userdata('logged_in');

        if(!$this->session->userdata('logged_in'))
            redirect(base_url().'login', 'refresh');

        $data['sess_name'] = $session_data['name'];
        $data['sess_unit'] = $session_data['unit'];
        $data['sess_position'] = $session_data['position'];
        $data['sess_image'] = $session_data['image'];

        $this->load->view('v_share_location', $data);

    }

    function remindManagement(){

        $session_data = $this->session->userdata('logged_in');

        if(!$this->session->userdata('logged_in'))
            redirect(base_url().'login', 'refresh');

        $data['sess_name'] = $session_data['name'];
        $data['sess_unit'] = $session_data['unit'];
        $data['sess_position'] = $session_data['position'];
        $data['sess_image'] = $session_data['image'];

        $this->load->view('v_remind_management', $data);

    }

    function logout()
    {
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect('home', 'refresh');
    }


}
?>
