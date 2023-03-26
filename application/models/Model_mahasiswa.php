<?php

    class Model_mahasiswa extends CI_Model {

        public function semua(){
            $query = $this->db  ->select('*')
                                ->get('mahasiswa');
            return $query;
        }

        public function by_id($id){
            $query = $this->db  ->select('*')
                                ->where('id', $id)
                                ->get('mahasiswa');
            return $query;
        }
        
        public function tambah($data){
            $query = $this->db->insert('mahasiswa', $data);
            if($query){
                return TRUE;
            }
        }

        public function hapus_by_id($id){
            $query = $this->db->delete('mahasiswa', array('id' => $id));
            return $query;
        }

        public function update_by_id($where, $data){
            $query =    $this->db->where($where)
                                ->update('mahasiswa', $data);
            return $query;
        }	
    }