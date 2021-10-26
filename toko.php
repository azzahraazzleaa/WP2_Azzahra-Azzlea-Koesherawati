<?php
class toko extends CI_Controller
{
 public function index()
 {
 $this->load->view('view-toko-sepatu');
 }
 public function cetak()
 {
 $data = [
 'nama' => $this->input->post('nama'),
 'nohp' => $this->input->post('nohp'),
 'merksepatu' => $this->input->post('merksepatu'),
 'ukuran' => $this->input->post('ukuran'),
 'harga' => $this->input->post('harga')
 ];
 if ($this->input->post('merksepatu') == 'nike') {$data['harga'] = 375000;} 
 elseif ($this->input->post('merksepatu') == 'addidas') {$data['harga'] = 300000;} 
 elseif ($this->input->post('merksepatu') == 'kickers') {$data['harga'] = 250000;} 
 elseif ($this->input->post('merksepatu') == 'eiger') {$data['harga'] = 275000;} 
 elseif ($this->input->post('merksepatu') == 'bucherri') {$data['harga'] = 400000;}

$this->load->view('view-data-toko', $data);
 }
}
?>