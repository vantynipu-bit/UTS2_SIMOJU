<?php

class HomeController extends Controller {

    public function index()
    {
        $this->dashboard();
    }

    public function dashboard()
    {

        if(!isset($_SESSION['user_id']))
        {
            header("Location: /Simoju_UTS2/public/index.php?url=AuthController/login");
            exit;
        }

        $data['totalArtikel'] =
        $this->model('Edukasi')->countAll();

        $data['totalMonitoring'] =
        $this->model('Monitoring')->countAll();

        $data['totalNotifikasi'] =
        $this->model('Notifikasi')->countAll();

        $data['totalUser'] =
        $this->model('User')->countAll();

        $this->view(
            'home/dashboard',
            $data
        );
    }
}