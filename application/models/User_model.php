<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

  public function register($enc_password){
       // Array data user
       $data = array(
           'nama' => $this->input->post('nama'),
           'email' => $this->input->post('email'),
           'username' => $this->input->post('username'),
           'password' => $enc_password,
           'kodepos' => $this->input->post('kodepos')
       );

       // Insert user
       return $this->db->insert('users', $data);
   }

    public function login($username, $password){
       // Validasi
       $this->db->where('username', $username);
       $this->db->where('password', $password);

       $result = $this->db->get('users');

       if($result->num_rows() == 1){
           $data['user_id'] = $result->row(0)->user_id;
           $data['level'] = $result->row(0)->level;
           return $data;
       } else {
           return false;
       }
   }

   public function getUser()
   {
     $this->db->where('level','0');
     return $this->db->get('users');
   }

   public function delete($id)
   {
     $this->db->where('user_id', $id);
     return $this->db->delete('users');
   }

   public function getUserById($id)
   {
     $this->db->where('user_id', $id);
     return $this->db->get('users'); 
   }

   public function update($id,$object)
   {
     $this->db->where('user_id', $id);
     $this->db->update('users', $object);
   }


}

