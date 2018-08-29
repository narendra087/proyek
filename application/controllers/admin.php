<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

	public function profile($id)
	{
		$emp = $this->model->prof("where nmr = $id");
		$data = array(
			"nama"=>$emp[0]['nama'],
			"nmr"=>$emp[0]['nmr'],
			"tmptlhr"=>$emp[0]['tmptlhr'],
			"tgllhr"=>$emp[0]['tgllhr'],
			"gender"=>$emp[0]['gender'],
			"pnddkn"=>$emp[0]['pnddkn'],
			"agama"=>$emp[0]['agama'],
			"unit"=>$emp[0]['unit'],
			"posisi"=>$emp[0]['posisi'],
			"pnglman"=>$emp[0]['pnglman'],
			"hobby"=>$emp[0]['hobby'],
			"nohp"=>$emp[0]['nohp'],
			"notlp"=>$emp[0]['notlp'],
			"email"=>$emp[0]['email'],
			"status"=>$emp[0]['status'],
			"jmlhkeluarga"=>$emp[0]['jmlhkeluarga'],
			"alamat"=>$emp[0]['alamat'],
			"kodepos"=>$emp[0]['kodepos'],
			"bpjs"=>$emp[0]['bpjs'],
			"rekening"=>$emp[0]['rekening'],
			"gbr"=>$emp[0]['gbr']
		);
		$this->load->view('header');
		$this->load->view('profile', $data);
		$this->load->view('footer');
	}

	public function delete($nmr)
	{
    	$where = array('nmr' => $nmr);
    	$del = $this->model->delete('employee', $where);
    	if ($del>=1) {
    		$data['krywn'] = $this->model->datakaryawan();
			$this->load->view('header');
			$this->load->view('admin/home', $data);
			$this->load->view('footer');	
    	}
    }


    //==================================================================== EDIT PROFILE

    public function upd_work()
    {
    	$nmr = $_POST['nmr'];
        $unit = $_POST['unit'];
        $posisi = $_POST['posisi'];
        $pnglman = $_POST['pnglman'];
        $data = array(
	            'unit' => $unit,
	            'posisi' => $posisi,
				'pnglman' => $pnglman
	    );
	    $where = array('nmr'=>$nmr);
        $upd = $this->model->edit_data('employee', $data, $where);
        redirect("admin/profile/".$nmr);
    }

    public function upd_personal()
    {
    	$nmr = $_POST['nmr'];
        $nama = $_POST['nama'];
        $tmptlhr = $_POST['tmptlhr'];
        $tgllhr = $_POST['tgllhr'];
        $alamat = $_POST['alamat'];
        $kodepos = $_POST['kodepos'];
        $gender = $_POST['gender'];
        $agama = $_POST['agama'];
        $pnddkn = $_POST['pnddkn'];
        $hobby = $_POST['hobby'];
        $status = $_POST['status'];
        $jmlhkeluarga = $_POST['jmlhkeluarga'];
        $bpjs = $_POST['bpjs'];
        $rekening = $_POST['rekening'];
        $data = array(
	            'nama' => $nama,
	            'tmptlhr' => $tmptlhr,
				'tgllhr' => $tgllhr,
				'alamat' => $alamat,
				'kodepos' => $kodepos,
				'gender' => $gender,
				'agama' => $agama,
				'pnddkn' => $pnddkn,
				'hobby' => $hobby,
				'status' => $status,
				'jmlhkeluarga' => $jmlhkeluarga,
				'bpjs' => $bpjs,
				'rekening' => $rekening
	    );
	    $where = array('nmr'=>$nmr);
        $upd = $this->model->edit_data('employee', $data, $where);
        redirect("admin/profile/".$nmr);
    }

    public function upd_contact()
    {
    	$nmr = $_POST['nmr'];
        $email = $_POST['email'];
        $nohp = $_POST['nohp'];
        $notlp = $_POST['notlp'];
        $data = array(
	            'email' => $email,
	            'nohp' => $nohp,
				'notlp' => $notlp
	    );
	    $where = array('nmr'=>$nmr);
        $upd = $this->model->edit_data('employee', $data, $where);
        redirect("admin/profile/".$nmr);
    }
}
