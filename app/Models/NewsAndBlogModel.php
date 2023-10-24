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
    protected $allowedFields    = ['id_newsandblog', 'id_kategori_news_and_blog', 'id_kategori_news_and_blog_tambahan', 'judul_newsandblog', 'slug_newsandblog', 'cover_newsandblog', 'penulis_newsandblog', 'deskripsi_singkat_newsandblog', 'isi_newsandblog', 'video_url_newsandblog', 'video_newsandblog', 'status_newsandblog'];

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

    public function getNewsAndBlogWithCategory()
    {
        $builder = $this->db->table('tbl_newsandblog');
        $builder->join(
            'tbl_kategori_newsandblog',
            'tbl_kategori_newsandblog.id_kategori_news_and_blog = tbl_newsandblog.id_kategori_news_and_blog'
        );
        $builder->where('tbl_newsandblog.deleted_at', null);
        $query = $builder->get();
        return $query->getResultArray();
    }
    
    public function getNewsAndBlogWithCategoryLatest()
    {
        $builder = $this->db->table('tbl_newsandblog');
        $builder->join(
            'tbl_kategori_newsandblog',
            'tbl_kategori_newsandblog.id_kategori_news_and_blog = tbl_newsandblog.id_kategori_news_and_blog'
        );
        $builder->select('tbl_newsandblog.*, 
            tbl_kategori_newsandblog.created_at AS kategori_created_at, 
            tbl_kategori_newsandblog.warna_kategori_news_and_blog AS warna_kategori_news_and_blog, 
            tbl_kategori_newsandblog.judul_kategori_news_and_blog AS judul_kategori_news_and_blog');
        $builder->where('tbl_newsandblog.deleted_at', null);
        $builder->orderBy('tbl_newsandblog.created_at', 'desc');
        $query = $builder->get();
        return $query->getResultArray();
    }
    
    public function getNewsAndBlogWithCategoryLimited($limit = 3, $offset = 1)
    {
        $builder = $this->db->table('tbl_newsandblog');
        $builder->join(
            'tbl_kategori_newsandblog',
            'tbl_kategori_newsandblog.id_kategori_news_and_blog = tbl_newsandblog.id_kategori_news_and_blog'
        );
        $builder->select('tbl_newsandblog.*, 
        tbl_kategori_newsandblog.created_at AS kategori_created_at, 
        tbl_kategori_newsandblog.warna_kategori_news_and_blog AS warna_kategori_news_and_blog, 
        tbl_kategori_newsandblog.judul_kategori_news_and_blog AS judul_kategori_news_and_blog');
        $builder->where('tbl_newsandblog.deleted_at', null);
        $builder->orderBy('tbl_newsandblog.created_at', 'desc');
        $builder->limit($limit, $offset);
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function getSiswa123()
    {
        $builder = $this->db->table('tbl_pengguna');
        $builder->join('tbl_login', 'tbl_login.id_pengguna = tbl_pengguna.id_pengguna');
        $builder->join('tbl_jurusan', 'tbl_jurusan.id_jurusan = tbl_pengguna.id_jurusan', 'left'); // Join dengan tbl_jurusan
        $builder->where('tbl_login.level', 5);
        $builder->orderBy('tbl_pengguna.is_top_1', 'DESC');
        $builder->orderBy('tbl_pengguna.is_top_2', 'DESC');
        $builder->orderBy('tbl_pengguna.is_top_3', 'DESC');
        $builder->limit(3); // Batasi hasil hingga 3 data

        // Pilih kolom-kolom yang ingin ditampilkan, termasuk kolom nama_jurusan
        $builder->select('tbl_pengguna.*, tbl_jurusan.nama_jurusan');

        $query = $builder->get();

        // Debug: Cetak hasil query
        // echo $this->db->getLastQuery(); exit;

        return $query->getResultArray();
    }


    public function getNewsAndBlogBySlug($slug_newsandblog)
    {
        $builder = $this->db->table('tbl_newsandblog');
        $builder->join('tbl_kategori_newsandblog', 'tbl_kategori_newsandblog.id_kategori_news_and_blog = tbl_newsandblog.id_kategori_news_and_blog');
        $builder->where('tbl_newsandblog.slug_newsandblog', $slug_newsandblog);
        $builder->where('tbl_newsandblog.deleted_at', null);
        $query = $builder->get();
        return $query->getRowArray();
    }


    public function getNewsAndBlogBySlug2($slug_newsandblog)
    {
        $builder = $this->db->table('tbl_newsandblog');
        $builder->join('tbl_kategori_newsandblog', 'tbl_kategori_newsandblog.id_kategori_news_and_blog = tbl_newsandblog.id_kategori_news_and_blog_tambahan');
        $builder->where('tbl_newsandblog.slug_newsandblog', $slug_newsandblog);
        $builder->where('tbl_newsandblog.deleted_at', null);
        $query = $builder->get();
        return $query->getRowArray();
    }

    public function increaseViewCount($id_newsandblog)
    {
        $this->db->table('tbl_newsandblog')
            ->where('id_newsandblog', $id_newsandblog)
            ->set('jumlah_view', 'jumlah_view + 1', false)
            ->update();
    }
}
