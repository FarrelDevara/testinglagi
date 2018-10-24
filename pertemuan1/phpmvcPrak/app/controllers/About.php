<?php 
class About extends Controller{
	public function index($nama = "Farrel", $job = "Mahasiswa", $umur = "19"){
		$data = array(
				'nama' => $nama,
				'job' => $job,
				'umur' => $umur,
				'judul' => 'About Me'
			);
		$this->view('templates/header', $data);
		$this->view('about/index',$data);
		$this->view('templates/footer');
	}

	public function page(){
		$data['judul'] = "pages";
		$this->view('templates/header', $data);
		$this->view('about/page');
		$this->view('templates/footer');
	}

}