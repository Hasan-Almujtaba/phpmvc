<?php 

class About extends Controller {

	public function index($nama = 'Hasan' , $pekerjaan = 'Programmer', $umur = 18 ) {
		
		$data['nama'] = $nama;
		$data['pekerjaan'] = $pekerjaan;
		$data['umur'] = $umur;
		$data['judul'] = 'About';
		$this->view('templates/header', $data);
		$this->view('about/index', $data);
		$this->view('templates/footer');

	}

	public function page() {
		$data['judul'] = 'About';
		$this->view('templates/header', $data);
		$this->view('about/page');
		$this->view('templates/footer');
	}
}

 ?>