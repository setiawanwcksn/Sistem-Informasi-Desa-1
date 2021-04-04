<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MPengeluaran extends CI_Model {
    public function getAll(){
      $this->db->select('*');
      $this->db->from('Pengeluaran');
      $this->db->join('parameter','parameter.Id_Parameter = Pengeluaran.fk_parameter');      
      $query = $this->db->get()->result_array();
      return $query;
      }

      function Simpan_pengeluaran($data_pengeluaran,$id_pengeluaran){
        $this->db->where('Id_Pengeluaran', $id_pengeluaran);
        $query=$this->db->from('Pengeluaran');
        $data = $query->get()->row();        
        if($data){
          $this->db->where('Id_Pengeluaran', $id_pengeluaran);
          $this->db->update('Pengeluaran', $data_pengeluaran);
          return $data;
        }else{
          $this->db->insert('Pengeluaran', $data_pengeluaran);
          return true;
        }
      }

      function hapus_pengeluaran($id_pengeluaran){
        $this->db->delete('Pengeluaran', array('Id_Pengeluaran' => $id_pengeluaran));
      }

      function getDataPengeluaran($bulan,$tahun){
        $this->db->select('*');
        $this->db->from('Pengeluaran');
        $this->db->join('parameter','parameter.Id_Parameter = Pengeluaran.fk_parameter'); 
        $this->db->where('month(Tanggal_Pengeluaran)',$bulan);
        $this->db->where('year(Tanggal_Pengeluaran)',$tahun);
        $query = $this->db->get()->result_array();    
        return $query;
      }

      function total_Pengeluaran($bulan,$tahun){       
        $this->db->select('SUM(Nominal) as total');
        $this->db->from('Pengeluaran');
        $this->db->where('month(Tanggal_Pengeluaran)',$bulan);
        $this->db->where('year(Tanggal_Pengeluaran)',$tahun);
        $query = $this->db->get()->row();
        return $query;
      }
}