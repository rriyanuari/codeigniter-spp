<?php

    class Model_user extends CI_Model {

        public function semua(){
            $query = $this->db  ->select('*')
                                ->get('user');
            return $query;
        }
    
        public function by_id($id){
            $query = $this->db  ->select('*')
                                ->where('id_user', $id)
                                ->get('user');
            return $query;
        }
        
        public function tambah($data, $table){
            $query = $this->db->insert($table, $data);
            if($query){
            return TRUE;
            }
        }

        public function hapus_by_id($id){
            $query = $this->db->delete('user', array('id_user' => $id));
            return $query;
        }

        public function update_by_id($where, $data, $table){
            $query =    $this->db->where($where)
                                ->update($table,$data);
            return $query;
        }	
    }