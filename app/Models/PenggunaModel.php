<?php

namespace App\Models;

use CodeIgniter\Model;

class PenggunaModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tbl_pengguna';
    protected $primaryKey       = 'id_pengguna';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_kelas', 'id_jurusan', 'status', 'foto', 'nama_lengkap', 'nisn', 'no_hp', 'tempat_lahir', 'tanggal_lahir', 'is_top_1', 'is_top_2', 'is_top_3', 'deleted_at'];

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

    function getAll()
    {
        $builder = $this->db->table('tbl_pengguna');
        $builder->join('tbl_login', 'tbl_login.id_pengguna = tbl_pengguna.id_pengguna');
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function getSiswa()
    {
        $builder = $this->db->table('tbl_pengguna');
        $builder->join('tbl_login', 'tbl_login.id_pengguna = tbl_pengguna.id_pengguna');
        $builder->join('tbl_jurusan', 'tbl_jurusan.id_jurusan = tbl_pengguna.id_jurusan', 'left');
        $builder->join('tbl_kelas', 'tbl_kelas.id_kelas = tbl_pengguna.id_kelas', 'left');

        // Setelah melakukan join, tambahkan kondisi untuk deleted_at=NULL
        $builder->where('tbl_login.level', 5);
        $builder->where('tbl_pengguna.deleted_at', NULL);
        
        $builder->orderBy('tbl_pengguna.is_top_1', 'DESC');
        $builder->orderBy('tbl_pengguna.is_top_2', 'DESC');
        $builder->orderBy('tbl_pengguna.is_top_3', 'DESC');

        // Pilih kolom-kolom yang ingin ditampilkan, termasuk kolom nama_jurusan dan nama_kelas_angka
        $builder->select('tbl_pengguna.*, tbl_jurusan.nama_jurusan, tbl_jurusan.alias_jurusan, tbl_kelas.nama_kelas_huruf, tbl_kelas.nama_kelas_romawi, tbl_kelas.nama_kelas_angka');

        $query = $builder->get();

        return $query->getResultArray();
    }
}
