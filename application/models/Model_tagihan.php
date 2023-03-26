<?php

    class Model_tagihan extends CI_Model {

        public function semua(){
            $query = $this->db  ->select('*')
                                ->get('tagihan');
            return $query;
        }

        public function by_id($id){
            $query = $this->db  ->select('*')
                                ->where('id', $id)
                                ->get('tagihan');
            return $query;
        }

        public function by_jurusan($jurusan){
            $query = $this->db  ->select('*')
                                ->where('jurusan', $jurusan)
                                ->get('tagihan');
            return $query;
        }
        
        public function tambah($data){
            $query = $this->db->insert('tagihan', $data);
            if($query){
                return TRUE;
            }
        }

        public function hapus_by_id($id){
            $query = $this->db->delete('tagihan', array('id' => $id));
            return $query;
        }

        public function update_by_id($where, $data){
            $query =    $this->db->where($where)
                                ->update('tagihan', $data);
            return $query;
        }	
    }