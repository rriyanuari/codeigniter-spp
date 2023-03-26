<?php

    class Model_pembayaran extends CI_Model {

        public function semua(){
            $query = $this->db  ->select('*')
                                ->get('pembayaran');
            return $query;
        }

        public function buku_spp($periode, $nim){
            $query = $this->db  ->select('*')
                                ->where('periode', $periode)
                                ->where('nim', $nim)
                                ->get('pembayaran');
            return $query;
        }

        public function by_id($id){
            $query = $this->db  ->select('*')
                                ->where('id', $id)
                                ->get('pembayaran');
            return $query;
        }

        public function by_nim($nim){
            $query = $this->db  ->select('*')
                                ->where('nim', $nim)
                                ->get('pembayaran');
            return $query;
        }
        
        public function tambah($data){
            $query = $this->db->insert('pembayaran', $data);
            if($query){
                return TRUE;
            }
        }

        public function hapus_by_id($id){
            $query = $this->db->delete('pembayaran', array('id' => $id));
            return $query;
        }

        public function update_by_id($where, $data){
            $query =    $this->db->where($where)
                                ->update('pembayaran', $data);
            return $query;
        }	
    }