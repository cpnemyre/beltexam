<?php

class Travels extends CI_Controller
    {
    protected $viewdata = array();
    protected $user_session = NULL;
    function __construct()
    {
      parent::__construct();
     $this->viewdata['user_session'] = $this->user_session = $this->session->userdata("user_session");
      $this->load->library("form_validation");
    }

  public function index()
  {
    $this->load->view('viewpage');
    $this->load->model('travel');
  //  $allUsers = $this->travel->getUsers();
  //  $this->load->view('viewpage.php', array("travels" => $allUsers));

  }
  public function process_register()
  {
    $this->load->model('travel');
    $post_data = $this->input->post();

    $this->form_validation->set_rules("name", "Name", "trim|min_length[3]|required");
    $this->form_validation->set_rules("user_name", "User Name", "trim|min_length[3]|required");
    $this->form_validation->set_rules("password", "Password", "trim|min_length[6]|required|matches[confirm_password]");
    $this->form_validation->set_rules("confirm_password", "Confirm Password", "trim|required");
    $this->form_validation->run();
    $this->load->view('viewpage');
    if ($this->form_validation->run() === FALSE)  {
      $this->session->set_flashdata("registration_errors", validation_errors());
      redirect(base_url());


    }
  else
  {
    $user_input = $this->input->post();

    $insert_user = $this->travel->insert_user($user_input);

    if($insert_user) {
      $this->session->set_userdata("user_session", $user_input);
    }
    else
    {
    //  $this->session->set_flashdata("registration_errors", "Sorry but your info is not registered. Please try again.");




    }
  }
}
 public function userprof()
{
 $this->load->view("dash", $this->viewdata);
}

public function Process_login()
{
$this->load->library("form_validation");
$this->form_validation->set_rules("user_name", "User Name", "trim|min_length[3]|required");
$this->form_validation->set_rules("password", "Password", "trim|min_length[6]|required");

if($this->form_validation->run() === FALSE) {
  $this->session->set_flashdata("login_errors", validation_errors());


}
else{
  $this->load->model("travel");
  $get_user = $this->travel->get_user($this->input->post());
  if($get_user) {
    $this->session->set_userdata("user_session", $get_user);
    $this->load->view('dash');


  }
  else{
    $this->session->set_flashdata("login_errors", "Invalid username and/or password");
    redirect(base_url());

  }
}
}
}
  ?>
