<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
 
  class M_account extends CI_Model{

      function daftar($data)
      {
            $this->db->insert('users',$data);
      }

 	   function get_data ($table)
 	   {
 			return $this->db->get($table);
 	   }

 	  function get_where($table, $where){
      $query = $this->db->get_Where($table, $where);
      return $query->result();
    }

		function login($table, $where){
      $query = $this->db->get_Where($table, $where);
      return $query->num_rows();
    }

    function add_data($table, $data){
      $this->db->insert($table, $data);
    }

    function delete_data($table, $data){
      $this->db->delete($table, $data);
    }    
    
    function update_data($table, $where, $data){
      $this->db->where($where);
      $this->db->update($table, $data);
    }

    function get_data_image($table, $field){
      $this->db->order_by($field,'DESC');
      $this->db->limit(5);
      $query = $this->db->get($table);
      return $query->result();
    }

  	function profil($data){
  			if($cek>0){
  				$data_session = array(
  					'nama' => $username,
  					'alamat' => $alamat

  				);
  			}
  		}

  }
 