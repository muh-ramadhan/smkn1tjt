<?php

namespace App\Controllers;
use App\Models\PelangganModel;
use App\Models\TransaksiModel;

class Karyawan extends BaseController
{
    public function __construct()
    {
		$this->PelangganModel = new PelangganModel();
		$this->TransaksiModel = new TransaksiModel();
        helper(['form', 'date', 'inflector', 'text', 'number']);
    }

    public function index()
    {
        $data = [
            'title' => 'Beranda',
            'subtitle' => 'Karyawan',
            'TotalGalonKeluar' => $this->TransaksiModel->selectSum('galon_keluar')->get()->getRowArray(),
            'TotalGalonKosong' => $this->TransaksiModel->selectSum('galon_kosong')->get()->getRowArray(),
            'TotalPelanggan' => $this->PelangganModel->where('deleted_at', NULL)->countAllResults(),
            'TotalTransaksiBelumBayar' => $this->TransaksiModel->where('status', '1')->countAllResults(),
            'TotalTransaksiKurangBayar' => $this->TransaksiModel->where('status', '2')->countAllResults(),
            'TotalTransaksiLunas' => $this->TransaksiModel->where('status', '3')->countAllResults(),
            
        ];
        return view('fv_karyawan/v_beranda', $data);
    }
    
    public function DepotAir()
    {
        $data = [
            'title' => 'Beranda',
            'subtitle' => 'Depot Air',
            'AmbilSemuaDataDepotAir' => $this->PelangganModel->findAll(),
        ];
        return view('fv_karyawan/v_depotair', $data);
    }

    
    public function TambahDataDepotAir()
    {
      
      
        if ($this->validate([
            'nomor_wa' => [
                'label' => 'No HP',
                'rules' => 'required',
                'errors'    => [
                    'required'  => '{field} Wajib Diisi'
                ]
            ],
        ])) {
            //Jika Valid
                
        $PelangganModel = new PelangganModel();
        $data = [
            'nama_pelanggan' => reduce_multiples(ucwords(strtolower($this->request->getVar('nama_pelanggan'))), ' ', true),
            'nomor_wa' => $this->request->getVar('nomor_wa'),
        ];
        $PelangganModel->insert($data);
        session()->setFlashdata('tambah', 'Data Berhasil Di Tambah');
        return redirect()->to('Karyawan/DepotAir');
          
        } else {
            //Jika Tidak Valid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to('Karyawan/DepotAir');
        }
      

    }
    
    
    public function DetailDepotAir($id_pelanggan)
    {
        $data = [
            'title' => 'Transaksi',
            'subtitle' => 'Pelanggan',
            'AmbilDataDetailDepotAir'  =>  $this->PelangganModel->where('id_pelanggan', $id_pelanggan)->get()->getRowArray(),
            'AmbilDataDetailTransaksi'  => $this->TransaksiModel->where('id_pelanggan', $id_pelanggan)->get()->getResultArray(),
            'AmbilSemuaDataDetailTransaksi' => $this->TransaksiModel->findAll(),
        ];
        return view('fv_karyawan/v_detail_depotair', $data);
    }

    
    public function TambahDataTransaksiPelanggan($id_pelanggan)
    {
        $uri = $this->request->uri->getSegment(3);
        $data = [
            'id_pelanggan' => $id_pelanggan,
            'tanggal_transaksi' => $this->request->getVar('tanggal_transaksi'),
            'galon_keluar' => $this->request->getVar('galon_keluar'),
            'galon_kosong' => $this->request->getVar('galon_kosong'),
            'plus_minus_galon' => $this->request->getVar('galon_keluar') - $this->request->getVar('galon_kosong'),
            'total_harga' => $this->request->getVar('total_harga'),
            'dibayar' => $this->request->getVar('dibayar'),
            'keterangan' => reduce_multiples(ucwords(strtolower($this->request->getVar('keterangan'))), ' ', true),
            'status' => $this->request->getVar('status'),
        ];
        $this->TransaksiModel->save($data);
        session()->setFlashdata('ubah', 'Data Berhasil Di Ubah');
        return redirect()->to('Karyawan/DetailDepotAir/'.$uri);
    }
    
}
