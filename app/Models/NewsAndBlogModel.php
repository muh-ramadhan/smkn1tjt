<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsAndBlogModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tbl_newsandblog';
    protected $primaryKey       = 'id_newsandblog';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_newsandblog', 'id_kategori', 'judul_newsandblog', 'penulis_newsandblog', 'isi_newsandblog', 'status_newsandblog'];

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

    // Metode untuk mengambil data dengan JOIN tabel kategori
    public function getNewsAndBlogWithCategory()
    {
        $builder = $this->db->table('tbl_newsandblog');
        $builder->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_newsandblog.id_kategori');
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function getNewsAndBlogWithCategoryLimited($limit = 3, $offset = 1)
    {
        $builder = $this->db->table('tbl_newsandblog');
        $builder->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_newsandblog.id_kategori');
        $builder->where('deleted_at', null);
        $builder->orderBy('created_at', 'desc');
        $builder->limit($limit, $offset);
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function getSiswa123()
    {
        $builder = $this->db->table('tbl_pengguna');
        $builder->join('tbl_login', 'tbl_login.id_pengguna = tbl_pengguna.id_pengguna');
        $builder->where('tbl_login.level', 5);
        $builder->orderBy('tbl_pengguna.is_top_1', 'DESC');
        $builder->orderBy('tbl_pengguna.is_top_2', 'DESC');
        $builder->orderBy('tbl_pengguna.is_top_3', 'DESC');
        $builder->limit(3); // Batasi hasil hingga 3 data
        $query = $builder->get();
        return $query->getResultArray();
    }
}
