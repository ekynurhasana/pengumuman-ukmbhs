<?php

namespace App\Controllers;

use App\Models\PesertaModel;
use App\Models\NilaiPesertaModel;

class Home extends BaseController
{
	protected $pesertaModel;

	public function __construct()
	{
		$this->pesertaModel = new PesertaModel();
		$this->nilaiPesertaModel = new NilaiPesertaModel();
	}

	public function index()
	{
		date_default_timezone_set('Asia/Makassar');
		$waktu = strtotime("2021-04-08 16:00:00");
		$now = strtotime(date('Y-m-d H:i:s'));
		// echo $now;
		if ($waktu < $now) {
			# code...
			$data = [
				'title' => 'Pengumuman UKM Bahasa PNUP'
			];
			return view('user/index', $data);
		} else {
			$data = [
				'title' => 'Pengumuman UKM Bahasa PNUP'
			];
			return view('user/coming-soon', $data);
			# code...
		}
	}

	public function status()
	{
		// dd($this->request->getPost());
		$dapos = $this->request->getPost();
		$tgl = $dapos['tahun'] . '-' . $dapos['bulan'] . '-' . $dapos['tanggal'];
		// echo $tgl;
		$peserta = $this->pesertaModel->join('data_peserta', 'data_peserta.id_peserta = peserta.id')->join('kelulusan', 'kelulusan.id_peserta = peserta.id')->select('peserta.id, no_peserta, nama, nim, tgl_lahir, jurusan, kelulusan')->where('no_peserta', $this->request->getPost('no_peserta'))->first();
		if ($peserta['tgl_lahir'] == $tgl) {
			if ($peserta['kelulusan'] == 1) {
				$data = [
					'title' => 'Peserta - ' . $peserta['no_peserta'],
					'peserta' => $peserta
				];
				return view('user/accepted', $data);
				# code...
			} else {
				# code...
				$data = [
					'title' => 'Peserta - ' . $peserta['no_peserta'],
					'peserta' => $peserta
				];
				return view('user/rejected', $data);
			}
		} else {
			session()->setFlashdata('pesan', 'Anda tidak memiliki data yang cocok. Silahkan masukkan data yang benar.');
			return redirect()->to(base_url());
		}
	}
}
