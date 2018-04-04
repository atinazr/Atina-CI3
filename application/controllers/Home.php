<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Home extends CI_Controller {

 	public function __construct()
 	{
 		parent:: __construct();
 	}
 
 	public function index()
 	{
 		$this->load->model('biodata');
 		$data['biodata_array'] = $this->biodata->getBiodataQueryArray();
 		$data['biodata_object'] = $this->biodata->getBiodataQueryObject();
 		$data['biodata_builder_array'] = $this->biodata->getBiodataBuilderArray();
 		$data['biodata_builder_object'] = $this->biodata->getBiodataBuilderObject();
 		$this->load->view('home',$data);		
 	}
 
	public function about()
	{
		$this->load->view('about');
	}
	public function contact()
	{
		$this->load->view('contact');
	}
	public function news($nama = null)
	{
		if($nama == null)
			$nama = '<a href="'.base_url('News/AtinaZaima').'">Parameter Page</a>';
		$data['nama'] = $nama;
		$this->load->view('news',$data);
	}

}
?>
