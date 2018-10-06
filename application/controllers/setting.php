<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller
{

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
        if ($session_data && $session_data['position'] == "Quality Manager") {
            redirect(base_url() . 'setting/noticeboard', 'refresh');
        } else {
            $this->logout();
            redirect(base_url() . 'login', 'refresh');
        }
    }

    function noticeboard($param1 = '', $param2 = '', $param3 = '')
    {
        if (!$this->session->userdata('logged_in'))
            redirect(base_url() . 'login', 'refresh');

        if ($param1 == 'create') {
            $this->model_noticeboard->insert_noticeboard();

            $flash_data =
                '<div class="alert alert-success">
				<h4><i class="fa fa-info-circle fa-lg"></i> &nbsp;Noticeboard Succesfully Created!</h4>
				</div>';

            $this->session->set_flashdata('notif', $flash_data);

            redirect(base_url() . 'setting/noticeboard', 'refresh');
        }
        if ($param1 == 'edit' && $param2 == 'do_update') {
            $this->model_noticeboard->update_noticeboard_where($param3);
            $flash_data =
                '<div class="alert alert-success">
				<h4><i class="fa fa-info-circle fa-lg"></i> &nbsp;Noticeboard Succesfully Edited!</h4>
				</div>';

            $this->session->set_flashdata('notif', $flash_data);

            redirect(base_url() . 'setting/noticeboard', 'refresh');
        } else if ($param1 == 'edit') {
            $data['edit_data'] = $this->model_noticeboard->select_all_noticeboard_where_no($param2);
        }
        if ($param1 == 'delete') {
            $this->model_noticeboard->delete_noticeboard_where($param2);
            $flash_data =
                '<div class="alert alert-success">
				<h4><i class="fa fa-info-circle fa-lg"></i> &nbsp;Noticeboard Succesfully deleted!</h4>
				</div>';

            $this->session->set_flashdata('notif', $flash_data);
            redirect(base_url() . 'setting/noticeboard', 'refresh');
        }

        $session_data = $this->session->userdata('logged_in');
        $data['sess_name'] = $session_data['name'];
        $data['sess_unit'] = $session_data['unit'];
        $data['sess_position'] = $session_data['position'];
        $data['sess_image'] = $session_data['image'];

        $data['query'] = $this->model_noticeboard->select_all_noticeboard();

        $this->load->view('v_noticeboard', $data);

    }

    function account($param1 = '', $param2 = '', $param3 = '')
    {
        if (!$this->session->userdata('logged_in'))
            redirect(base_url() . 'login', 'refresh');

        if ($param1 == 'edit' && $param2 == 'do_update') {
            $filename = $this->input->post('name');
            $filename = str_replace(" ", "-", $filename);
            $config = array(
                'upload_path' => "./assets/images/",
                'allowed_types' => "jpg|png|jpeg",
                'file_name' => $filename,
                'overwrite' => TRUE,
                'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
            );
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $image = "image";
            if ($this->upload->do_upload($image)) {
                $data = $this->upload->data();
                $this->model_employee->update_employee($param3, $data['file_name']);
            } else {
                $errors = $this->upload->display_errors();
                $this->model_employee->update_employee($param3, "default.png");

            }
            if (isset($errors)) {
                $flash_data =
                    '<div class="alert alert-danger">
                <h4><i class="fa fa-info-circle fa-lg"></i> &nbsp;Account Failed Edited! </h4>
                ' . $errors . '
                </div>';
            } else {
                $flash_data =
                    '<div class="alert alert-success">
                <h4><i class="fa fa-info-circle fa-lg"></i> &nbsp;Account Succesfully Edited!</h4>
                </div>';
            }

            $this->session->set_flashdata('notif', $flash_data);

            redirect(base_url() . 'setting/account', 'refresh');
        }


        $session_data = $this->session->userdata('logged_in');

        $data['edit_data'] = $this->model_employee->select_all_employee_where_no($session_data['no']);

        $data['sess_no'] = $session_data['no'];
        $data['sess_name'] = $session_data['name'];
        $data['sess_unit'] = $session_data['unit'];
        $data['sess_position'] = $session_data['position'];
        $data['sess_image'] = $session_data['image'];


        $this->load->view('v_account', $data);

    }

    function logout()
    {
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect('home', 'refresh');
    }
}

?>
