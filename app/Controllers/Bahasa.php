<?php

namespace App\Controllers;

use App\Models\PesertaModel;
use App\Models\DataPesertaModel;
use App\Models\KelulusanModel;
use App\Models\NilaiPesertaModel;
use CodeIgniter\HTTP\Request;

class Bahasa extends BaseController
{
    protected $pesertaModel;
    protected $dataPesertaModel;
    protected $kelulusanModel;
    protected $nilaiPesertaModel;

    public function __construct()
    {
        $this->pesertaModel = new PesertaModel();
        $this->dataPesertaModel = new DataPesertaModel();
        $this->kelulusanModel = new KelulusanModel();
        $this->nilaiPesertaModel = new NilaiPesertaModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Home',
            'totalPeserta' => $this->pesertaModel->countAll(),
            'lulus' => $this->kelulusanModel->where('kelulusan', 1)->countAllResults(),
            'tidakLulus' => $this->kelulusanModel->where('kelulusan', 0)->countAllResults()
        ];
        // dd($data['totalPeserta']);
        return view('admin/home', $data);
    }

    public function peserta()
    {
        $data = [
            'title' => 'Data Peserta',
            'peserta' => $this->pesertaModel->join('data_peserta', 'data_peserta.id_peserta = peserta.id')->findAll()
        ];
        // dd($data['peserta']);
        return view('admin/peserta', $data);
    }

    public function kelulusan()
    {
        $data = [
            'title' => 'Data Kelulusan Peserta',
            'peserta' => $this->pesertaModel->join('data_peserta', 'data_peserta.id_peserta = peserta.id')->join('kelulusan', 'kelulusan.id_peserta = peserta.id')->findAll()
        ];
        // dd($data['peserta']);
        return view('admin/kelulusan', $data);
    }

    public function nilai()
    {
        $data = [
            'title' => 'Nilai Peserta',
            'nilai' => $this->pesertaModel->join('data_peserta', 'data_peserta.id_peserta = peserta.id')->join('nilai_peserta', 'nilai_peserta.id_peserta = peserta.id')->findAll()
        ];
        // dd($data['peserta']);
        return view('admin/tabel-nilai', $data);
    }

    public function tambah()
    {
        // dd($this->request->getPost());
        if (!$this->validate([
            'noPeserta' => 'is_unique[peserta.no_peserta]',
            'nimPeserta' => 'numeric'
        ])) {
            $validation = \Config\Services::validation();
            session()->setFlashdata('pesan', 'Terjadi kesalahan. Nomor peserta sudah terdaftar atau nim tidak berupa angka');
            return redirect()->to(base_url('/Bahasa/peserta'))->withInput()->with('validation', $validation);
        }

        $this->pesertaModel->save([
            'no_peserta' => $this->request->getPost('noPeserta'),
            'nama' => $this->request->getPost('namaPeserta'),
            'tgl_lahir' => $this->request->getPost('tgl_lahir')
        ]);
        $peserta = $this->pesertaModel->where('no_peserta', $this->request->getPost('noPeserta'))->first();
        $this->dataPesertaModel->save([
            'id_peserta' => $peserta['id'],
            'nim' => $this->request->getPost('nimPeserta'),
            'jurusan' => $this->request->getPost('jurusanPeserta'),
            'jenis_kelamin' => $this->request->getPost('jenisKelamin')
        ]);
        // dd($this->request->getPost());
        session()->setFlashdata('berhasil', 'Yeayy! Data berhasil ditambahkan');
        return redirect()->to(base_url('/Bahasa/peserta'));
    }

    public function edit()
    {
        // dd($this->request->getPost());
        if (!$this->validate([
            'nimPeserta' => 'numeric'
        ])) {
            $validation = \Config\Services::validation();
            session()->setFlashdata('pesan', 'Terjadi kesalahan. Nomor peserta sudah terdaftar atau nim tidak berupa angka');
            return redirect()->to(base_url('/Bahasa/peserta'))->withInput()->with('validation', $validation);
        }

        $this->pesertaModel->save([
            'id' => $this->request->getPost('id_peserta'),
            'nama' => $this->request->getPost('namaPeserta'),
            'tgl_lahir' => $this->request->getPost('tgl_lahir')
        ]);
        $peserta = $this->dataPesertaModel->where('id_peserta', $this->request->getPost('id_peserta'))->first();
        $this->dataPesertaModel->save([
            'id' => $peserta['id'],
            'nim' => $this->request->getPost('nimPeserta'),
            'jurusan' => $this->request->getPost('jurusan'),
            'jenis_kelamin' => $this->request->getPost('jenisKelamin')
        ]);
        // dd($this->request->getPost());
        session()->setFlashdata('berhasil', 'Yeayy! Data berhasil diubah');
        return redirect()->to(base_url('/Bahasa/detail') . '/' . $this->request->getPost('no_peserta'));
    }

    public function detail($noPeserta)
    {
        $peserta = $this->pesertaModel->join('data_peserta', 'data_peserta.id_peserta = peserta.id')->select('peserta.id, no_peserta, nama, nim, jurusan, tgl_lahir, jenis_kelamin')->where('no_peserta', $noPeserta)->first();
        $kelulusan = $this->kelulusanModel->where('id_peserta', $peserta['id'])->first();
        $nilai = $this->nilaiPesertaModel->where('id_peserta', $peserta['id'])->first();
        if (!$nilai) {
            if ($kelulusan) {
                $data = [
                    'title' => 'Detail Peserta ' . $noPeserta,
                    'dataPeserta' => $peserta,
                    'nilai' => 0,
                    'kelulusan' => $kelulusan
                ];
            } else {
                $data = [
                    'title' => 'Detail Peserta ' . $noPeserta,
                    'dataPeserta' => $peserta,
                    'nilai' => 0,
                    'kelulusan' => 0
                ];
                # code...
            }
        } else {
            if ($kelulusan) {
                $data = [
                    'title' => 'Detail Peserta ' . $noPeserta,
                    'dataPeserta' => $peserta,
                    'nilai' => $nilai,
                    'kelulusan' => $kelulusan
                ];
            } else {
                $data = [
                    'title' => 'Detail Peserta ' . $noPeserta,
                    'dataPeserta' => $peserta,
                    'nilai' => $nilai,
                    'kelulusan' => 0
                ];
                # code...
            }
        }
        // $tes = [
        //     'data' => $peserta,
        //     'nilai' => $nilai,
        //     'lulus' => $kelulusan
        // ];
        // dd($tes);
        return view('admin/detail-peserta', $data);
    }

    public function tambahnilai()
    {
        // dd($this->request->getPost());
        if (!$this->validate([
            'nilai1' => 'numeric',
            'nilai2' => 'numeric',
            'nilai3' => 'numeric',
            'nilai4' => 'numeric'
        ])) {
            $validation = \Config\Services::validation();
            session()->setFlashdata('pesan', 'Terjadi kesalahan. Nilai yang anda input tidak berupa angka   ');
            return redirect()->to(base_url('/Bahasa/peserta'))->withInput()->with('validation', $validation);
        }

        $this->nilaiPesertaModel->save([
            'id_peserta' => $this->request->getPost('id_peserta'),
            'nilai1' => $this->request->getPost('nilai1'),
            'nilai2' => $this->request->getPost('nilai2'),
            'nilai3' => $this->request->getPost('nilai3'),
            'nilai4' => $this->request->getPost('nilai4'),
        ]);
        session()->setFlashdata('berhasil', 'Yeayy! Nilai berhasil ditambahkan');
        return redirect()->to(base_url('Bahasa/detail') . '/' . $this->request->getPost('no_peserta'));
    }
    public function editnilai()
    {
        // dd($this->request->getPost());
        if (!$this->validate([
            'nilai1' => 'numeric',
            'nilai2' => 'numeric',
            'nilai3' => 'numeric',
            'nilai4' => 'numeric'
        ])) {
            $validation = \Config\Services::validation();
            session()->setFlashdata('pesan', 'Terjadi kesalahan. Nilai yang anda input tidak berupa angka   ');
            return redirect()->to(base_url('/Bahasa/detail') . '/' . $this->request->getPost('no_peserta'))->withInput()->with('validation', $validation);
        }

        $this->nilaiPesertaModel->save([
            'id' => $this->request->getPost('id_nilai'),
            'id_peserta' => $this->request->getPost('id_peserta'),
            'nilai1' => $this->request->getPost('nilai1'),
            'nilai2' => $this->request->getPost('nilai2'),
            'nilai3' => $this->request->getPost('nilai3'),
            'nilai4' => $this->request->getPost('nilai4'),
        ]);
        session()->setFlashdata('berhasil', 'Yeayy! Nilai berhasil diubah');
        return redirect()->to(base_url('Bahasa/detail') . '/' . $this->request->getPost('no_peserta'));
    }
    public function tambahkelulusan()
    {
        // dd($this->request->getPost());
        $this->kelulusanModel->save([
            'id_peserta' => $this->request->getPost('id_peserta'),
            'kelulusan' => $this->request->getPost('kelulusan')
        ]);
        session()->setFlashdata('berhasil', 'Yeayy! Status berhasil ditambahkan');
        return redirect()->to(base_url('Bahasa/detail') . '/' . $this->request->getPost('no_peserta'));
    }

    public function editkelulusan()
    {
        // dd($this->request->getPost());
        $this->kelulusanModel->save([
            'id' => $this->request->getPost('id_kelulusan'),
            'id_peserta' => $this->request->getPost('id_peserta'),
            'kelulusan' => $this->request->getPost('kelulusan')
        ]);
        session()->setFlashdata('berhasil', 'Yeayy! Status kelulusan berhasil diubah');
        return redirect()->to(base_url('Bahasa/detail') . '/' . $this->request->getPost('no_peserta'));
    }

    public function ddletedd($no_peserta)
    {
        $this->pesertaModel->where('no_peserta', $no_peserta)->delete();
        session()->setFlashdata('berhasil', 'Data berhasil dihapus.');
        return redirect()->to(base_url('Bahasa/peserta'));
    }
}
