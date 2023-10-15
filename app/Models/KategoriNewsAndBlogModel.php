<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriNewsAndBlogModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tbl_kategori_newsandblog';
    protected $primaryKey       = 'id_kategori_news_and_blog';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['judul_kategori_news_and_blog', 'isi_kategori_news_and_blog', 'slug_kategori_news_and_blog', 'warna_kategori_news_and_blog', 'status_kategori_news_and_blog'];

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

    public function getKategoryNewsAndBlog()
    {
        $builder = $this->db->table('tbl_kategori_newsandblog');
        $builder->where('tbl_kategori_newsandblog.deleted_at', null);
        $builder->orderBy('tbl_kategori_newsandblog.created_at', 'desc');
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function getKategoryLimitNewsAndBlog($limit = 3)
    {
        $builder = $this->db->table('tbl_kategori_newsandblog');
        $builder->where('tbl_kategori_newsandblog.deleted_at', null);
        $builder->orderBy('tbl_kategori_newsandblog.created_at', 'desc');
        $builder->limit($limit); // Tambahkan batasan limit di sini
        $query = $builder->get();

        // Debug: Cetak hasil query
        // echo $this->db->getLastQuery(); exit;

        return $query->getResultArray();
    }
}
