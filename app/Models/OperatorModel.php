<?php

namespace App\Models;

use CodeIgniter\Model;

class OperatorModel extends Model
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

    public function getKelasJurusanById($id_kelas, $id_jurusan)
    {
        $kelas = $this->db->table('tbl_kelas')->where('id_kelas', $id_kelas)->get()->getRowArray();
        $jurusan = $this->db->table('tbl_jurusan')->where('id_jurusan', $id_jurusan)->get()->getRowArray();

        return [
            'nama_kelas_romawi' => $kelas['nama_kelas_romawi'] ?? '',
            'alias_jurusan' => $jurusan['alias_jurusan'] ?? '',
        ];
    }
}
