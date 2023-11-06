<?php

namespace App\Controllers;

use App\Models\KonfigurasiModel;
use App\Models\MainmenuModel;
use App\Models\SubmenuModel;
use App\Models\MitraModel;
use App\Models\SlideshowModel;
use App\Models\PejabatModel;
use App\Models\BeritaModel;
use App\Models\UsersModel;
use App\Models\LinkModel;
use App\Models\AplikasiModel;

class Pages extends BaseController
{
    protected $MainmenuModel;
    protected $SubmenuModel;
    protected $MitraModel;
    protected $SlideshowModel;
    protected $PejabatModel;
    protected $KonfigurasiModel;
    protected $BeritaModel;
    protected $UsersModel;
    protected $LinkModel;
    protected $AplikasiModel;
    public function __construct()
    {
        $this->MainmenuModel = new MainmenuModel();
        $this->SubmenuModel = new SubmenuModel();
        $this->MitraModel = new MitraModel();
        $this->SlideshowModel = new SlideshowModel();
        $this->PejabatModel = new PejabatModel();
        $this->KonfigurasiModel = new KonfigurasiModel();
        $this->BeritaModel = new BeritaModel();
        $this->UsersModel = new UsersModel();
        $this->LinkModel = new LinkModel();
        $this->AplikasiModel = new AplikasiModel();
    }
    // BEGIN FRONTEND

    public function showFile()
    {
        $uri = current_url(true);
        $total = $uri->getTotalSegments();

        if ($uri->getSegment(2) == 'uploads') {
            if (session()->get('username') == NULL) {
                return redirect()->to('/home');
            }
        }

        if ($total == 3) {
            $segment2 = $uri->getSegment(2);
            $segment3 = $uri->getSegment(3);
            helper("filesystem");
            $path = WRITEPATH . '' . $segment3 . '';
            $file = new \CodeIgniter\Files\File($path, true);
            $binary = readfile($path);
            return $this->response
                ->setHeader('Content-Type', $file->getMimeType())
                ->setHeader('Content-disposition', 'inline; filename="' . $file->getBasename() . '"')
                ->setStatusCode(200)
                ->setBody($binary);
        } else if ($total == 4) {
            $segment2 = $uri->getSegment(2);
            $segment3 = $uri->getSegment(3);
            $segment4 = $uri->getSegment(4);
            helper("filesystem");
            $path = WRITEPATH . '' . $segment3 . '/' . $segment4 . '';
            $file = new \CodeIgniter\Files\File($path, true);
            $binary = readfile($path);
            return $this->response
                ->setHeader('Content-Type', $file->getMimeType())
                ->setHeader('Content-disposition', 'inline; filename="' . $file->getBasename() . '"')
                ->setStatusCode(200)
                ->setBody($binary);
        } else if ($total == 5) {
            $segment2 = $uri->getSegment(2);
            $segment3 = $uri->getSegment(3);
            $segment4 = $uri->getSegment(4);
            $segment5 = $uri->getSegment(5);
            if ($segment2 == 'kjhasdlkjhlkjhasdkhadaskdhj') {
                helper("filesystem");
                $path = WRITEPATH . 'uploads/' . $segment3 . '/' . $segment4 . '/' . $segment5 . '';
                $file = new \CodeIgniter\Files\File($path, true);
                $binary = readfile($path);
                return $this->response
                    ->setHeader('Content-Type', $file->getMimeType())
                    ->setHeader('Content-disposition', 'inline; filename="' . $file->getBasename() . '"')
                    ->setStatusCode(200)
                    ->setBody($binary);
            } else {
                helper("filesystem");
                $path = WRITEPATH . '' . $segment3 . '/' . $segment4 . '/' . $segment5 . '';
                $file = new \CodeIgniter\Files\File($path, true);
                $binary = readfile($path);
                return $this->response
                    ->setHeader('Content-Type', $file->getMimeType())
                    ->setHeader('Content-disposition', 'inline; filename="' . $file->getBasename() . '"')
                    ->setStatusCode(200)
                    ->setBody($binary);
            }
        } else if ($total == 6) {
            $segment2 = $uri->getSegment(2);
            $segment3 = $uri->getSegment(3);
            $segment4 = $uri->getSegment(4);
            $segment5 = $uri->getSegment(5);
            $segment6 = $uri->getSegment(6);
            helper("filesystem");
            $path = WRITEPATH . '' . $segment3 . '/' . $segment4 . '/' . $segment5 . '/' . $segment6 . '';
            // dd($path);
            $file = new \CodeIgniter\Files\File($path, true);
            $binary = readfile($path);
            return $this->response
                ->setHeader('Content-Type', $file->getMimeType())
                ->setHeader('Content-disposition', 'inline; filename="' . $file->getBasename() . '"')
                ->setStatusCode(200)
                ->setBody($binary);
        } else if ($total == 7) {
            $segment2 = $uri->getSegment(2);
            $segment3 = $uri->getSegment(3);
            $segment4 = $uri->getSegment(4);
            $segment5 = $uri->getSegment(5);
            $segment6 = $uri->getSegment(6);
            $segment7 = $uri->getSegment(7);
            helper("filesystem");
            $path = WRITEPATH . '' . $segment3 . '/' . $segment4 . '/' . $segment5 . '/' . $segment6 . '/' . $segment7 . '';
            $file = new \CodeIgniter\Files\File($path, true);
            $binary = readfile($path);
            return $this->response
                ->setHeader('Content-Type', $file->getMimeType())
                ->setHeader('Content-disposition', 'inline; filename="' . $file->getBasename() . '"')
                ->setStatusCode(200)
                ->setBody($binary);
        } else if ($total == 8) {
            $segment2 = $uri->getSegment(2);
            $segment3 = $uri->getSegment(3);
            $segment4 = $uri->getSegment(4);
            $segment5 = $uri->getSegment(5);
            $segment6 = $uri->getSegment(6);
            $segment7 = $uri->getSegment(7);
            $segment8 = $uri->getSegment(8);
            helper("filesystem");
            $path = WRITEPATH . '' . $segment3 . '/' . $segment4 . '/' . $segment5 . '/' . $segment6 . '/' . $segment7 . '/' . $segment8 . '';
            $file = new \CodeIgniter\Files\File($path, true);
            $binary = readfile($path);
            return $this->response
                ->setHeader('Content-Type', $file->getMimeType())
                ->setHeader('Content-disposition', 'inline; filename="' . $file->getBasename() . '"')
                ->setStatusCode(200)
                ->setBody($binary);
        } else if ($total == 9) {
            $segment2 = $uri->getSegment(2);
            $segment3 = $uri->getSegment(3);
            $segment4 = $uri->getSegment(4);
            $segment5 = $uri->getSegment(5);
            $segment6 = $uri->getSegment(6);
            $segment7 = $uri->getSegment(7);
            $segment8 = $uri->getSegment(8);
            $segment9 = $uri->getSegment(9);
            helper("filesystem");
            $path = WRITEPATH . '' . $segment3 . '/' . $segment4 . '/' . $segment5 . '/' . $segment6 . '/' . $segment7 . '/' . $segment8 . '/' . $segment9 . '';
            $file = new \CodeIgniter\Files\File($path, true);
            $binary = readfile($path);
            return $this->response
                ->setHeader('Content-Type', $file->getMimeType())
                ->setHeader('Content-disposition', 'inline; filename="' . $file->getBasename() . '"')
                ->setStatusCode(200)
                ->setBody($binary);
        } else if ($total == 10) {
            $segment2 = $uri->getSegment(2);
            $segment3 = $uri->getSegment(3);
            $segment4 = $uri->getSegment(4);
            $segment5 = $uri->getSegment(5);
            $segment6 = $uri->getSegment(6);
            $segment7 = $uri->getSegment(7);
            $segment8 = $uri->getSegment(8);
            $segment9 = $uri->getSegment(9);
            $segment10 = $uri->getSegment(10);
            helper("filesystem");
            $path = WRITEPATH . '' . $segment3 . '/' . $segment4 . '/' . $segment5 . '/' . $segment6 . '/' . $segment7 . '/' . $segment8 . '/' . $segment9 . '/' . $segment10 . '';
            $file = new \CodeIgniter\Files\File($path, true);
            $binary = readfile($path);
            return $this->response
                ->setHeader('Content-Type', $file->getMimeType())
                ->setHeader('Content-disposition', 'inline; filename="' . $file->getBasename() . '"')
                ->setStatusCode(200)
                ->setBody($binary);
        } else {
            return redirect()->to('/home');
        }
    }

    public function index()
    {
        $countaplikasi = $this->AplikasiModel->selectcount('id')->first();
        $jum_aplikasi = $countaplikasi['id'];
        $data = [
            'title' => 'Beranda',
            'title_pages' => '',
            'submenu' => $this->SubmenuModel->select('*')->select('submenu.id as submenu_id')->select('mainmenu.id as mainmenu_id')->select('mainmenu.urutan as urutan_mainmenu')->select('submenu.urutan as urutan_submenu')->join('mainmenu', 'submenu.id_mainmenu=mainmenu.id')->orderBy('urutan_mainmenu', 'ASC')->orderBy('urutan_submenu', 'ASC')->get()->getResultArray(),
            'mainmenu' => $this->MainmenuModel->orderBy('urutan', 'ASC')->get()->getResultArray(),
            'menu' => $this->MainmenuModel->orderBy('urutan', 'ASC')->findAll(4),
            'menu2' => $this->MainmenuModel->orderBy('urutan', 'ASC')->findAll(5, 4),
            'konfigurasi' => $this->KonfigurasiModel->first(),
            'mitra' => $this->MitraModel->orderBy('nama', 'DESC')->get()->getResultArray(),
            'slideshow' => $this->SlideshowModel->orderBy('nama', 'ASC')->get()->getResultArray(),
            'pejabat' => $this->PejabatModel->orderBy('urutan', 'ASC')->get()->getResultArray(),
            'konf' => $this->KonfigurasiModel->findAll(),
            'link_partner' => $this->LinkModel->where('kategori', 'partner')->findAll(8),
            'link_lib' => $this->LinkModel->where('kategori', 'e-Library')->orWhere('kategori', 'e-Journal')->findAll(8),
            'berita' => $this->BeritaModel->orderby('tanggal', 'DESC')->orderby('timestamp', 'DESC')->findAll(6),
            'aplikasi' => $this->AplikasiModel->orderby('urutan', 'ASC')->findAll(),
            'jum_app' => $jum_aplikasi,
        ];
        return view('frontend/pages/beranda', $data);
    }

    public function pages($slug)
    {
        $uri = current_url(true);
        $slugx = $uri->getSegment(3); // Method - instrument
        $cek_menu = $this->SubmenuModel->join('mainmenu', 'submenu.id_mainmenu=mainmenu.id')->where('slug', $slugx)->first();
        $judul = $cek_menu['mainmenu'];
        $data = [
            'title' => '',
            'title_pages' => $judul,
            'slug'  => $slug,
            'submenu' => $this->SubmenuModel->select('*')->select('submenu.id as submenu_id')->select('mainmenu.id as mainmenu_id')->select('mainmenu.urutan as urutan_mainmenu')->select('submenu.urutan as urutan_submenu')->join('mainmenu', 'submenu.id_mainmenu=mainmenu.id')->orderBy('urutan_mainmenu', 'ASC')->orderBy('urutan_submenu', 'ASC')->get()->getResultArray(),
            'mainmenu' => $this->MainmenuModel->orderBy('urutan', 'ASC')->get()->getResultArray(),
            'menu' => $this->MainmenuModel->orderBy('urutan', 'ASC')->findAll(4),
            'menu2' => $this->MainmenuModel->orderBy('urutan', 'ASC')->findAll(5, 4),
            'content' => $this->SubmenuModel->where('slug', $slugx)->findAll(),
            'mitra' => $this->MitraModel->orderBy('nama', 'DESC')->get()->getResultArray(),
            'slideshow' => $this->SlideshowModel->orderBy('nama', 'ASC')->get()->getResultArray(),
            'pejabat' => $this->PejabatModel->orderBy('urutan', 'ASC')->get()->getResultArray(),
            'konf' => $this->KonfigurasiModel->findAll(),
            'prodi' => $this->SubmenuModel->orderBy('urutan', 'ASC')->where('id_mainmenu', '25')->findAll(),
        ];
        return view('frontend/pages/pages', $data);
    }

    public function prodi($slug)
    {
        $data = [
            'title' => 'Program Studi',
            'title_pages' => '',
            'slug'  => $slug,
            'submenu' => $this->SubmenuModel->select('*')->select('submenu.id as submenu_id')->select('mainmenu.id as mainmenu_id')->select('mainmenu.urutan as urutan_mainmenu')->select('submenu.urutan as urutan_submenu')->join('mainmenu', 'submenu.id_mainmenu=mainmenu.id')->orderBy('urutan_mainmenu', 'ASC')->orderBy('urutan_submenu', 'ASC')->get()->getResultArray(),
            'mainmenu' => $this->MainmenuModel->orderBy('urutan', 'ASC')->get()->getResultArray(),
            'menu' => $this->MainmenuModel->orderBy('urutan', 'ASC')->findAll(4),
            'menu2' => $this->MainmenuModel->orderBy('urutan', 'ASC')->findAll(5, 4),
            'mitra' => $this->MitraModel->orderBy('nama', 'DESC')->get()->getResultArray(),
            'slideshow' => $this->SlideshowModel->orderBy('nama', 'ASC')->get()->getResultArray(),
            'pejabat' => $this->PejabatModel->orderBy('urutan', 'ASC')->get()->getResultArray(),
            'konf' => $this->KonfigurasiModel->findAll(),
            'prodi' => $this->SubmenuModel->orderBy('urutan', 'ASC')->where('id_mainmenu', '25')->findAll(),
        ];
        return view('frontend/pages/prodi-detail', $data);
    }

    public function sdm($slug)
    {
        $data = [
            'title' => 'Sumber Daya Manusia',
            'title_pages' => '',
            'slug'  => $slug,
            'submenu' => $this->SubmenuModel->select('*')->select('submenu.id as submenu_id')->select('mainmenu.id as mainmenu_id')->select('mainmenu.urutan as urutan_mainmenu')->select('submenu.urutan as urutan_submenu')->join('mainmenu', 'submenu.id_mainmenu=mainmenu.id')->orderBy('urutan_mainmenu', 'ASC')->orderBy('urutan_submenu', 'ASC')->get()->getResultArray(),
            'mainmenu' => $this->MainmenuModel->orderBy('urutan', 'ASC')->get()->getResultArray(),
            'menu' => $this->MainmenuModel->orderBy('urutan', 'ASC')->findAll(4),
            'menu2' => $this->MainmenuModel->orderBy('urutan', 'ASC')->findAll(5, 4),
            'mitra' => $this->MitraModel->orderBy('nama', 'DESC')->get()->getResultArray(),
            'slideshow' => $this->SlideshowModel->orderBy('nama', 'ASC')->get()->getResultArray(),
            'pejabat' => $this->PejabatModel->orderBy('urutan', 'ASC')->get()->getResultArray(),
            'konf' => $this->KonfigurasiModel->findAll(),
            'prodi' => $this->SubmenuModel->orderBy('urutan', 'ASC')->where('id_mainmenu', '25')->findAll(),
        ];
        return view('frontend/pages/sdm', $data);
    }

    public function tentangkami($slug)
    {
        $data = [
            'title' => 'Tentang Kami',
            'title_pages' => '',
            'slug'  => $slug,
            'submenu' => $this->SubmenuModel->select('*')->select('submenu.id as submenu_id')->select('mainmenu.id as mainmenu_id')->select('mainmenu.urutan as urutan_mainmenu')->select('submenu.urutan as urutan_submenu')->join('mainmenu', 'submenu.id_mainmenu=mainmenu.id')->orderBy('urutan_mainmenu', 'ASC')->orderBy('urutan_submenu', 'ASC')->get()->getResultArray(),
            'mainmenu' => $this->MainmenuModel->orderBy('urutan', 'ASC')->get()->getResultArray(),
            'menu' => $this->MainmenuModel->orderBy('urutan', 'ASC')->findAll(4),
            'menu2' => $this->MainmenuModel->orderBy('urutan', 'ASC')->findAll(5, 4),
            'mitra' => $this->MitraModel->orderBy('nama', 'DESC')->get()->getResultArray(),
            'slideshow' => $this->SlideshowModel->orderBy('nama', 'ASC')->get()->getResultArray(),
            'pejabat' => $this->PejabatModel->orderBy('urutan', 'ASC')->get()->getResultArray(),
            'konf' => $this->KonfigurasiModel->findAll(),
            'prodi' => $this->SubmenuModel->orderBy('urutan', 'ASC')->where('id_mainmenu', '25')->findAll(),
        ];
        return view('frontend/pages/tentangkami', $data);
    }

    public function informasi()
    {
        $countaplikasi = $this->AplikasiModel->selectcount('id')->first();
        $jum_aplikasi = $countaplikasi['id'];
        $data = [
            'title' => 'Informasi',
            'title_pages' => '',
            'slug'  => 'Berita, Artikel dan Agenda',
            'submenu' => $this->SubmenuModel->select('*')->select('submenu.id as submenu_id')->select('mainmenu.id as mainmenu_id')->select('mainmenu.urutan as urutan_mainmenu')->select('submenu.urutan as urutan_submenu')->join('mainmenu', 'submenu.id_mainmenu=mainmenu.id')->orderBy('urutan_mainmenu', 'ASC')->orderBy('urutan_submenu', 'ASC')->get()->getResultArray(),
            'mainmenu' => $this->MainmenuModel->orderBy('urutan', 'ASC')->get()->getResultArray(),
            'menu' => $this->MainmenuModel->orderBy('urutan', 'ASC')->findAll(4),
            'menu2' => $this->MainmenuModel->orderBy('urutan', 'ASC')->findAll(5, 4),
            'berita' => $this->BeritaModel->first(),
            'populer' => $this->BeritaModel->orderBy('dilihat', 'DESC')->findAll(3),
            'mitra' => $this->MitraModel->orderBy('nama', 'DESC')->get()->getResultArray(),
            'slideshow' => $this->SlideshowModel->orderBy('nama', 'ASC')->get()->getResultArray(),
            'pejabat' => $this->PejabatModel->orderBy('urutan', 'ASC')->get()->getResultArray(),
            'konf' => $this->KonfigurasiModel->findAll(),
            'konfigurasi' => $this->KonfigurasiModel->first(),
            'link_partner' => $this->LinkModel->where('kategori', 'partner')->findAll(8),
            'link_lib' => $this->LinkModel->where('kategori', 'e-Library')->orWhere('kategori', 'e-Journal')->findAll(8),
            'aplikasi' => $this->AplikasiModel->orderby('urutan', 'ASC')->findAll(),
            'jum_app' => $jum_aplikasi,
        ];
        return view('frontend/pages/informasi', $data);
    }

    public function informasi_detail($slug)
    {
        $countaplikasi = $this->AplikasiModel->selectcount('id')->first();
        $jum_aplikasi = $countaplikasi['id'];
        $data = [
            'title' => 'Informasi',
            'title_pages' => '',
            'slug'  => $slug,
            'submenu' => $this->SubmenuModel->select('*')->select('submenu.id as submenu_id')->select('mainmenu.id as mainmenu_id')->select('mainmenu.urutan as urutan_mainmenu')->select('submenu.urutan as urutan_submenu')->join('mainmenu', 'submenu.id_mainmenu=mainmenu.id')->orderBy('urutan_mainmenu', 'ASC')->orderBy('urutan_submenu', 'ASC')->get()->getResultArray(),
            'mainmenu' => $this->MainmenuModel->orderBy('urutan', 'ASC')->get()->getResultArray(),
            'menu' => $this->MainmenuModel->orderBy('urutan', 'ASC')->findAll(4),
            'menu2' => $this->MainmenuModel->orderBy('urutan', 'ASC')->findAll(5, 4),
            'berita' => $this->BeritaModel->where('slug', $slug)->first(),
            'populer' => $this->BeritaModel->orderBy('dilihat', 'DESC')->findAll(3),
            'mitra' => $this->MitraModel->orderBy('nama', 'DESC')->get()->getResultArray(),
            'slideshow' => $this->SlideshowModel->orderBy('nama', 'ASC')->get()->getResultArray(),
            'pejabat' => $this->PejabatModel->orderBy('urutan', 'ASC')->get()->getResultArray(),
            'konf' => $this->KonfigurasiModel->findAll(),
            'konfigurasi' => $this->KonfigurasiModel->first(),
            'link_partner' => $this->LinkModel->where('kategori', 'partner')->findAll(8),
            'link_lib' => $this->LinkModel->where('kategori', 'e-Library')->orWhere('kategori', 'e-Journal')->findAll(8),
            'aplikasi' => $this->AplikasiModel->orderby('urutan', 'ASC')->findAll(),
            'jum_app' => $jum_aplikasi,
        ];
        return view('frontend/pages/informasi-detail', $data);
    }

    public function laboratorium($slug)
    {
        $data = [
            'title' => 'Laboratorium',
            'title_pages' => '',
            'slug'  => $slug,
            'submenu' => $this->SubmenuModel->select('*')->select('submenu.id as submenu_id')->select('mainmenu.id as mainmenu_id')->select('mainmenu.urutan as urutan_mainmenu')->select('submenu.urutan as urutan_submenu')->join('mainmenu', 'submenu.id_mainmenu=mainmenu.id')->orderBy('urutan_mainmenu', 'ASC')->orderBy('urutan_submenu', 'ASC')->get()->getResultArray(),
            'mainmenu' => $this->MainmenuModel->orderBy('urutan', 'ASC')->get()->getResultArray(),
            'menu' => $this->MainmenuModel->orderBy('urutan', 'ASC')->findAll(4),
            'menu2' => $this->MainmenuModel->orderBy('urutan', 'ASC')->findAll(5, 4),
            'mitra' => $this->MitraModel->orderBy('nama', 'DESC')->get()->getResultArray(),
            'slideshow' => $this->SlideshowModel->orderBy('nama', 'ASC')->get()->getResultArray(),
            'pejabat' => $this->PejabatModel->orderBy('urutan', 'ASC')->get()->getResultArray(),
            'konf' => $this->KonfigurasiModel->findAll(),
            'prodi' => $this->SubmenuModel->orderBy('urutan', 'ASC')->where('id_mainmenu', '25')->findAll(),
        ];
        return view('frontend/pages/laboratorium', $data);
    }


    public function laboratorium_detail($slug)
    {
        $data = [
            'title' => 'Laboratorium',
            'title_pages' => '',
            'slug'  => $slug,
            'submenu' => $this->SubmenuModel->select('*')->select('submenu.id as submenu_id')->select('mainmenu.id as mainmenu_id')->select('mainmenu.urutan as urutan_mainmenu')->select('submenu.urutan as urutan_submenu')->join('mainmenu', 'submenu.id_mainmenu=mainmenu.id')->orderBy('urutan_mainmenu', 'ASC')->orderBy('urutan_submenu', 'ASC')->get()->getResultArray(),
            'mainmenu' => $this->MainmenuModel->orderBy('urutan', 'ASC')->get()->getResultArray(),
            'menu' => $this->MainmenuModel->orderBy('urutan', 'ASC')->findAll(4),
            'menu2' => $this->MainmenuModel->orderBy('urutan', 'ASC')->findAll(5, 4),
            'mitra' => $this->MitraModel->orderBy('nama', 'DESC')->get()->getResultArray(),
            'slideshow' => $this->SlideshowModel->orderBy('nama', 'ASC')->get()->getResultArray(),
            'pejabat' => $this->PejabatModel->orderBy('urutan', 'ASC')->get()->getResultArray(),
            'konf' => $this->KonfigurasiModel->findAll(),
            'prodi' => $this->SubmenuModel->orderBy('urutan', 'ASC')->where('id_mainmenu', '25')->findAll(),
        ];
        return view('frontend/pages/laboratorium-detail', $data);
    }

    public function menu()
    {
        $data = [
            'title' => 'Menu',
            'title_pages' => '',
            'submenu' => $this->SubmenuModel->select('*')->select('submenu.id as submenu_id')->select('mainmenu.id as mainmenu_id')->select('mainmenu.urutan as urutan_mainmenu')->select('submenu.urutan as urutan_submenu')->join('mainmenu', 'submenu.id_mainmenu=mainmenu.id')->orderBy('urutan_mainmenu', 'ASC')->orderBy('urutan_submenu', 'ASC')->get()->getResultArray(),
            'mainmenu' => $this->MainmenuModel->orderBy('urutan', 'ASC')->get()->getResultArray(),
            'menu' => $this->MainmenuModel->orderBy('urutan', 'ASC')->findAll(4),
            'menu2' => $this->MainmenuModel->orderBy('urutan', 'ASC')->findAll(5, 4),
            'mitra' => $this->MitraModel->orderBy('nama', 'DESC')->get()->getResultArray(),
            'slideshow' => $this->SlideshowModel->orderBy('nama', 'ASC')->get()->getResultArray(),
            'pejabat' => $this->PejabatModel->orderBy('urutan', 'ASC')->get()->getResultArray(),
            'konf' => $this->KonfigurasiModel->findAll(),
            'prodi' => $this->SubmenuModel->orderBy('urutan', 'ASC')->where('id_mainmenu', '25')->findAll(),
        ];
        return view('frontend/pages/menu', $data);
    }

    public function mitra()
    {
        $data = [
            'title' => 'Mitra Kerjasama',
            'title_pages' => '',
            'submenu' => $this->SubmenuModel->select('*')->select('submenu.id as submenu_id')->select('mainmenu.id as mainmenu_id')->select('mainmenu.urutan as urutan_mainmenu')->select('submenu.urutan as urutan_submenu')->join('mainmenu', 'submenu.id_mainmenu=mainmenu.id')->orderBy('urutan_mainmenu', 'ASC')->orderBy('urutan_submenu', 'ASC')->get()->getResultArray(),
            'mainmenu' => $this->MainmenuModel->orderBy('urutan', 'ASC')->get()->getResultArray(),
            'menu' => $this->MainmenuModel->orderBy('urutan', 'ASC')->findAll(4),
            'menu2' => $this->MainmenuModel->orderBy('urutan', 'ASC')->findAll(5, 4),
            'mitra' => $this->MitraModel->orderBy('nama', 'DESC')->get()->getResultArray(),
            'slideshow' => $this->SlideshowModel->orderBy('nama', 'ASC')->get()->getResultArray(),
            'pejabat' => $this->PejabatModel->orderBy('urutan', 'ASC')->get()->getResultArray(),
            'konf' => $this->KonfigurasiModel->findAll(),
            'prodi' => $this->SubmenuModel->orderBy('urutan', 'ASC')->where('id_mainmenu', '25')->findAll(),
        ];
        return view('frontend/pages/mitra', $data);
    }


    public function mitra_detail($slug)
    {
        $data = [
            'title' => 'Mitra Kerjasama',
            'title_pages' => '',
            'slug'  => $slug,
            'submenu' => $this->SubmenuModel->select('*')->select('submenu.id as submenu_id')->select('mainmenu.id as mainmenu_id')->select('mainmenu.urutan as urutan_mainmenu')->select('submenu.urutan as urutan_submenu')->join('mainmenu', 'submenu.id_mainmenu=mainmenu.id')->orderBy('urutan_mainmenu', 'ASC')->orderBy('urutan_submenu', 'ASC')->get()->getResultArray(),
            'mainmenu' => $this->MainmenuModel->orderBy('urutan', 'ASC')->get()->getResultArray(),
            'menu' => $this->MainmenuModel->orderBy('urutan', 'ASC')->findAll(4),
            'menu2' => $this->MainmenuModel->orderBy('urutan', 'ASC')->findAll(5, 4),
            'mitra' => $this->MitraModel->orderBy('nama', 'DESC')->get()->getResultArray(),
            'slideshow' => $this->SlideshowModel->orderBy('nama', 'ASC')->get()->getResultArray(),
            'pejabat' => $this->PejabatModel->orderBy('urutan', 'ASC')->get()->getResultArray(),
            'konf' => $this->KonfigurasiModel->findAll(),
            'prodi' => $this->SubmenuModel->orderBy('urutan', 'ASC')->where('id_mainmenu', '25')->findAll(),
        ];
        return view('frontend/pages/mitra-detail', $data);
    }
    // END FRONTEND

    // START BACKEND
    public function beranda()
    {
        if (session()->get('username') == NULL || session()->get('level') !== 'Superadmin') {
            return redirect()->to(base_url('/login'));
        }
        $admin = session()->get('nama');
        $lvl = session()->get('level');
        $usernamex = session()->get('username');
        $file = session()->get('file');
        if ($file <  1) {
            $gambar = 'app-assets/images/profile/user-profile.png';
        } else {
            $gambar = 'content/user/' . $file;
        }
        $data = [
            'title' => 'Beranda',
            'lvl' => $lvl,
            'akun' => $this->UsersModel->where('username', $usernamex)->first(),
            'admin' => $admin,
            'foto' => $gambar,

        ];
        return view('backend/pages/beranda', $data);
    }

    public function login()
    {
        $captcha1 = rand(0, 9);
        $captcha2 = rand(0, 9);
        $captcha3 = rand(0, 9);
        $captcha4 = rand(0, 9);
        $captcha = $captcha1 . $captcha2 . $captcha3 . $captcha4;
        $data = [
            'title' => 'Login',
            'captcha' => $captcha,
        ];
        return view('backend/pages/login', $data);
    }
    // END BACKEND
}
