<?php

namespace App\Controllers;
use App\Models\KaryawanModel;
use App\Models\LoginModel;
use App\Models\TransaksiModel;
use App\Models\PelangganModel;

class Superadmin extends BaseController
{
    public function __construct()
    {
		$this->KaryawanModel = new KaryawanModel();
		$this->LoginModel = new LoginModel();
		$this->TransaksiModel = new TransaksiModel();
		$this->PelangganModel = new PelangganModel();
        helper(['form', 'date', 'inflector', 'text', 'number']);
    }

    public function index()
    {
        $data = [
            'title' => 'Beranda',
            'subtitle' => 'Superadmin',
            'TotalGalonKeluar' => $this->TransaksiModel->selectSum('galon_keluar')->get()->getRowArray(),
            'TotalPelanggan' => $this->PelangganModel->where('deleted_at', NULL)->countAllResults(),
            'TotalTransaksiBelumBayar' => $this->TransaksiModel->where('status', '1')->countAllResults(),
            'TotalTransaksiKurangBayar' => $this->TransaksiModel->where('status', '2')->countAllResults(),
            'TotalTransaksiLunas' => $this->TransaksiModel->where('status', '3')->countAllResults(),
        ];
        return view('fv_superadmin/v_beranda', $data);
    }

    public function DepotAir()
    {
        $data = [
            'title' => 'Beranda',
            'subtitle' => 'Depot Air',
            'AmbilSemuaDataDepotAir' => $this->PelangganModel->findAll(),
        ];
        return view('fv_superadmin/v_depotair', $data);
    }
    
    public function TambahDataDepotAir()
    {
        $PelangganModel = new PelangganModel();
        $data = [
            'nama_pelanggan' => reduce_multiples(ucwords(strtolower($this->request->getVar('nama_pelanggan'))), ' ', true),
            'nomor_wa' => $this->request->getVar('nomor_wa'),
        ];
        $PelangganModel->insert($data);
        session()->setFlashdata('tambah', 'Data Berhasil Di Tambah');
        return redirect()->to('Superadmin/DepotAir');
    }
    
    public function DetailDepotAir($id_pelanggan)
    {
        $data = [
            'title' => 'Transaksi',
            'subtitle' => 'Pelanggan',
            'AmbilDataDetailDepotAir'  =>  $this->PelangganModel->where('id_pelanggan', $id_pelanggan)->get()->getRowArray(),
            'AmbilDataDetailTransaksi'  => $this->TransaksiModel->where('id_pelanggan', $id_pelanggan)->findAll(),
            'AmbilSemuaDataDetailTransaksi' => $this->TransaksiModel->findAll(),
        ];
        return view('fv_superadmin/v_detail_depotair', $data);
    }

    public function UbahDetailDepotAir($id_pelanggan)
    {
        $data = [
            'title' => 'Transaksi',
            'subtitle' => 'Ubah',
            'AmbilUbahDataDetailTransaksi'  =>  $this->TransaksiModel->where('id_transaksi', $id_pelanggan)->get()->getRowArray(),
        ];
        return view('fv_superadmin/v_ubahdetaildepotair', $data);
    }

    public function UbahDetailTransaksi($id_transaksi)
    {
        $data = [
            'id_transaksi' => $id_transaksi,
            'tanggal_transaksi' => $this->request->getVar('tanggal_transaksi'),
            'galon_keluar' => $this->request->getVar('galon_keluar'),
            'galon_kosong' => $this->request->getVar('galon_kosong'),
            'plus_minus_galon' => $this->request->getVar('galon_keluar') - $this->request->getVar('galon_kosong'),
            'total_harga' => $this->request->getVar('total_harga'),
            'dibayar' => $this->request->getVar('dibayar'),
            'keterangan' => reduce_multiples(ucwords(strtolower($this->request->getVar('keterangan'))), ' ', true),
            'status' => $this->request->getVar('status'),
        ];
        $this->TransaksiModel->update($id_transaksi, $data);
        
        session()->setFlashdata('ubah', 'Data Berhasil Di Ubah');
        return redirect()->to('Superadmin/DepotAir');
    }

    public function HapusDetailTransaksi($id_transaksi)
    {
        $this->TransaksiModel->where('id_transaksi', $id_transaksi)->delete();
        session()->setFlashdata('hapus', 'Data Berhasil Di Hapus');
        return redirect()->to('Superadmin/DepotAir');
    }

    public function TransaksiTerhapus()
    {
        $data = [
            'title' => 'Beranda',
            'subtitle' => 'Depot Air',
            'AmbilSemuaDataTransaksiTerhapus' => $this->TransaksiModel->onlyDeleted()->findAll(),
            'AmbilSemuaDataDepotAir' => $this->PelangganModel->findAll(),
        ];
        return view('fv_superadmin/v_transaksiterhapus', $data);
    }

    public function KembalikanTransaksiTerhapus($id_transaksi)
    {
        $data = [
            'id_transaksi' => $id_transaksi,
            'deleted_at' =>  NULL,
        ];
        $this->TransaksiModel->update($id_transaksi, $data);
        
        session()->setFlashdata('ubah', 'Data Berhasil Di Ubah');
        return redirect()->to('Superadmin/TransaksiTerhapus');
    }

    public function HapusTransaksiTerhapus($id_transaksi)
    {
        $this->TransaksiModel->where('id_transaksi', $id_transaksi)->purgeDeleted();
        session()->setFlashdata('hapus', 'Data Berhasil Di Hapus Permanen');
        return redirect()->to('Superadmin/DepotAir');
    }

    public function Karyawan()
    {
        $data = [
            'title' => 'Master Data',
            'subtitle' => 'Karyawan',
            'AmbilSemuaDataKaryawan' => $this->KaryawanModel->findAll(),
        ];
        return view('fv_superadmin/v_karyawan', $data);
    }

    public function TambahDataKaryawan()
    {
        $KaryawanModel = new KaryawanModel();
        $data = [
            'nama_karyawan' => reduce_multiples(ucwords(strtolower($this->request->getVar('nama_karyawan'))), ' ', true),
        ];
        $KaryawanModel->insert($data);
        $last_insert_id = $KaryawanModel->getInsertID();

        $data = [
            'id_karyawan' => $last_insert_id,
            'nama_pengguna' => $this->request->getVar('nama_pengguna'),
            'kata_sandi' => $this->request->getVar('kata_sandi'),
            'level' => 2,
        ];
        $LoginModel = new LoginModel();
        $LoginModel->insert($data);

        session()->setFlashdata('tambah', 'Data Berhasil Di Tambah');
        return redirect()->to('Superadmin/Karyawan');
    }

    public function DetailKaryawan($id_karyawan)
    {
        $data = [
            'title' => 'Detail Data',
            'subtitle' => 'Karyawan',
            'AmbilDataDetailKaryawan'  =>  $this->KaryawanModel->where('id_karyawan', $id_karyawan)->get()->getRowArray(),
            'AmbilDataDetailLogin'  => $this->LoginModel->where('id_karyawan', $id_karyawan)->get()->getRowArray(),
        ];
        return view('fv_superadmin/v_detail_karyawan', $data);
    }

    public function UbahDataKaryawan($id_karyawan)
    {
        $data = [
            'id_karyawan' => $id_karyawan,
            'nama_karyawan' => reduce_multiples(ucwords(strtolower($this->request->getVar('nama_karyawan'))), ' ', true),
        ];
        $this->KaryawanModel->update($id_karyawan, $data);
        
        session()->setFlashdata('ubah', 'Data Berhasil Di Ubah');
        return redirect()->to('Superadmin/Karyawan');
    }

    public function UbahDataLoginKaryawan($id_karyawan)
    {
        $data = [
            'id_login' => $id_karyawan, //Primary
            'nama_pengguna' => $this->request->getVar('nama_pengguna'),
            'kata_sandi' => $this->request->getVar('kata_sandi'),
            'level' => 2,
        ];
        $this->LoginModel->update($id_karyawan, $data);
        //dd($id_karyawan, $data);
        
        session()->setFlashdata('ubah', 'Data Berhasil Di Ubah');
        return redirect()->to('Superadmin/Karyawan');
    }

    public function HapusDataKaryawan($id_karyawan)
    {
        $this->KaryawanModel->where('id_karyawan', $id_karyawan)->delete();
        $this->LoginModel->where('id_karyawan', $id_karyawan)->delete();
        session()->setFlashdata('hapus', 'Data Berhasil Di Hapus');
        return redirect()->to('Superadmin/Karyawan');
    }

    public function Pelanggan()
    {
        $data = [
            'title' => 'Beranda',
            'subtitle' => 'Pelanggan',
            'AmbilSemuaDataPelanggan' => $this->PelangganModel->findAll(),
        ];
        return view('fv_superadmin/v_pelanggan', $data);
    }

    public function DetailPelanggan($id_pelanggan)
    {
        $data = [
            'title' => 'Detail Data',
            'subtitle' => 'Pelanggan',
            'AmbilDataDetailPelanggan'  =>  $this->PelangganModel->where('id_pelanggan', $id_pelanggan)->get()->getRowArray(),
        ];
        return view('fv_superadmin/v_detail_pelanggan', $data);
    }

    public function UbahDataPelanggan($id_pelanggan)
    {
        $data = [
            'id_pelanggan' => $id_pelanggan,
            'nama_pelanggan' => reduce_multiples(ucwords(strtolower($this->request->getVar('nama_pelanggan'))), ' ', true),
            'nomor_wa' => $this->request->getVar('nomor_wa'),
        ];
        $this->PelangganModel->update($id_pelanggan, $data);
        
        session()->setFlashdata('ubah', 'Data Berhasil Di Ubah');
        return redirect()->to('Superadmin/Pelanggan');
    }

    public function HapusDataPelanggan($id_pelanggan)
    {
        $this->PelangganModel->where('id_pelanggan', $id_pelanggan)->delete();
        session()->setFlashdata('hapus', 'Data Berhasil Di Hapus');
        return redirect()->to('Superadmin/Pelanggan');
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
