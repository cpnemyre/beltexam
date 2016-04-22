<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Travel extends CI_Model{

public $user;
function __construct()
{
  parent::__construct();
}
public function insert_user($POST)
{
  $query = "INSERT INTO users (`name`, `user_name`, `password`, `created_at`) VALUES (?, ?, ?, ?, NOW())";
  $query = "SELECT * FROM users";
  $values = array($POST['name'], $POST['user_name'], $POST['password']);

  $this->db->query($query, $values);
   return $this->db->insert_id();
}
public function get_user($POST)
{
  $query = "SELECT * FROM users WHERE user_name = ? AND password = ? limit 1";
  $values = array($POST["user_name"], $POST["password"]);
  $our_user = $this->db->query($query, $values)->row_array();
  return $this->db->insert_id();
}
}
  ?>
