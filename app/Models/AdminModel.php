<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tbl_pengguna';
    protected $primaryKey       = 'id_pengguna';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_pengguna', 'nama_pengguna'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    // Jointable
    function getAll()
    {
        $builder = $this->db->table('tbl_pengguna');
        $builder->join('tbl_login', 'tbl_login.id_pengguna = tbl_pengguna.id_pengguna');
        $query = $builder->get();
        return $query->getResultArray();
    }
    
    public function getAllKelas()
    {
        $query = $this->db->table('tbl_kelas')->get();
        return $query->getResultArray();
    }
    
    public function getAllJurusan()
    {
        $query = $this->db->table('tbl_jurusan')->get();
        return $query->getResultArray();
    }
    
    public function getDetailPengguna($id_pengguna)
    {
        $builder = $this->db->table('tbl_pengguna');
        $builder->join('tbl_login', 'tbl_login.id_pengguna = tbl_pengguna.id_pengguna');
        $builder->join('tbl_jurusan', 'tbl_jurusan.id_jurusan = tbl_pengguna.id_jurusan', 'left');
        $builder->join('tbl_kelas', 'tbl_kelas.id_kelas = tbl_pengguna.id_kelas', 'left');
    
        // Setelah melakukan join, tambahkan kondisi untuk deleted_at=NULL dan id_pengguna sesuai parameter
        $builder->where('tbl_login.level', 5);
        $builder->where('tbl_pengguna.id_pengguna', $id_pengguna);
    
        // Pilih kolom-kolom yang ingin ditampilkan, termasuk kolom nama_jurusan dan nama_kelas_angka
        $builder->select('tbl_pengguna.*, tbl_jurusan.nama_jurusan, tbl_jurusan.alias_jurusan, tbl_kelas.nama_kelas_huruf, tbl_kelas.nama_kelas_romawi, tbl_kelas.nama_kelas_angka');
    
        $query = $builder->get();
    
        return $query->getRowArray(); // Menggunakan getRowArray() karena ini adalah data satu baris (detail siswa)
    }
    
}
