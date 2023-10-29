<?php

namespace App\Controllers;

use App\Models\OperatorModel;
use App\Models\PengaturanWebModel;
use App\Models\BukuModel;
use App\Models\PenggunaModel;

class Operator extends BaseController
{
    protected $PengaturanWebModel;
    protected $BukuModel;

    public function __construct()
    {
        $this->OperatorModel = new OperatorModel();
        $this->PengaturanWebModel = new PengaturanWebModel();
        $this->BukuModel = new BukuModel();
        $this->PenggunaModel = new PenggunaModel();
        helper(['form', 'date', 'inflector', 'text', 'number']);
    }

    public function index()
    {
        $data = [
            'title' => 'Beranda',
            'subtitle' => 'Operator',
        ];
        return view('fv_operator/v_beranda', $data);
    }

    public function pinjamBuku($id_nfc_pengguna)
    {
        $data = [
            'title' => 'Operator',
            'subtitle' => 'Pinjam Buku',
            'DetailIdNfcPengguna' => $this->PenggunaModel->where('id_nfc_pengguna', $id_nfc_pengguna)->first(),
        ];
    
        // Ambil informasi kelas dan jurusan berdasarkan id_kelas dan id_jurusan
        $kelasJurusan = $this->OperatorModel->getKelasJurusanById($data['DetailIdNfcPengguna']['id_kelas'], $data['DetailIdNfcPengguna']['id_jurusan']);
    
        // Tambahkan data kelas dan jurusan ke dalam array data
        $data['DetailIdNfcPengguna']['nama_kelas_romawi'] = $kelasJurusan['nama_kelas_romawi'] ?? '';
        $data['DetailIdNfcPengguna']['alias_jurusan'] = $kelasJurusan['alias_jurusan'] ?? '';
    
        return view('fv_operator/v_pinjam_buku', $data);
    }
    

    public function ambilDetailNfcBuku($id_nfc_buku)
    {
        // Ambil informasi buku dari database berdasarkan ID NFC
        $bookInfo = $this->BukuModel->where('id_nfc_buku', $id_nfc_buku)->first();
    
        return $this->response->setJSON($bookInfo);
    }
}
