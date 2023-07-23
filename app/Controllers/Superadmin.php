<?php

namespace App\Controllers;
use App\Models\PenggunaModel;
use App\Models\AdminModel;
use App\Models\OperatorModel;
use App\Models\GuruModel;
use App\Models\SiswaModel;
use App\Models\LoginModel;
use App\Models\TransaksiModel;
use App\Models\PelangganModel;

class Superadmin extends BaseController
{
    public function __construct()
    {
		$this->PenggunaModel = new PenggunaModel();
		$this->AdminModel = new AdminModel();
		$this->OperatorModel = new OperatorModel();
		$this->GuruModel = new GuruModel();
		$this->SiswaModel = new SiswaModel();
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

    public function Pengguna()
    {
        $data = [
            'title' => 'Master Data',
            'subtitle' => 'Pengguna',
            'AmbilSemuaDataPengguna' => $this->PenggunaModel->findAll(),
        ];
        return view('fv_superadmin/v_karyawan', $data);
    }

    public function TambahDataPengguna()
    {
        $PenggunaModel = new PenggunaModel();
        $data = [
            'nama_lengkap' => reduce_multiples(ucwords(strtolower($this->request->getVar('nama_lengkap'))), ' ', true),
        ];
        $PenggunaModel->insert($data);
        $last_insert_id = $PenggunaModel->getInsertID();

        $data = [
            'id_pengguna' => $last_insert_id,
            'username' => $this->request->getVar('username'),
            'password' => $this->request->getVar('password'),
            'level' => 2,
        ];
        $LoginModel = new LoginModel();
        $LoginModel->insert($data);

        session()->setFlashdata('tambah', 'Data Berhasil Di Tambah');
        return redirect()->to('Superadmin/Pengguna');
    }

    public function DetailPengguna($id_pengguna)
    {
        $data = [
            'title' => 'Detail Data',
            'subtitle' => 'Pengguna',
            'AmbilDataDetailPengguna'  =>  $this->PenggunaModel->where('id_pengguna', $id_pengguna)->get()->getRowArray(),
            'AmbilDataDetailLogin'  => $this->LoginModel->where('id_pengguna', $id_pengguna)->get()->getRowArray(),
        ];
        return view('fv_superadmin/v_detail_karyawan', $data);
    }

    public function UbahDataPengguna($id_pengguna)
    {
        $data = [
            'id_pengguna' => $id_pengguna,
            'nama_lengkap' => reduce_multiples(ucwords(strtolower($this->request->getVar('nama_lengkap'))), ' ', true),
        ];
        $this->PenggunaModel->update($id_pengguna, $data);
        
        session()->setFlashdata('ubah', 'Data Berhasil Di Ubah');
        return redirect()->to('Superadmin/Pengguna');
    }

    public function UbahDataLoginPengguna($id_pengguna)
    {
        $data = [
            'id_login' => $id_pengguna, //Primary
            'username' => $this->request->getVar('username'),
            'password' => $this->request->getVar('password'),
            'level' => 2,
        ];
        $this->LoginModel->update($id_pengguna, $data);
        //dd($id_pengguna, $data);
        
        session()->setFlashdata('ubah', 'Data Berhasil Di Ubah');
        return redirect()->to('Superadmin/Pengguna');
    }

    public function HapusDataPengguna($id_pengguna)
    {
        $this->PenggunaModel->where('id_pengguna', $id_pengguna)->delete();
        $this->LoginModel->where('id_pengguna', $id_pengguna)->delete();
        session()->setFlashdata('hapus', 'Data Berhasil Di Hapus');
        return redirect()->to('Superadmin/Pengguna');
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
