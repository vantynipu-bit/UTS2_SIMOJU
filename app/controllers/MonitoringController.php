<?php
require_once '../config/api.php';

class MonitoringController extends Controller {

    public function index()
    {
        // CEK LOGIN
        if(!isset($_SESSION['user_id']))
        {
            header("Location: /Simoju_UTS2/public/index.php?url=AuthController/login");
            exit;
        }

        // DATA DUMMY
        $monitoring = $this->model('Monitoring');
        $data = $monitoring->getLatest();
        $this->view('monitoring/index', $data);
    }

    public function daftar()
    {
        $monitoring = $this->model('Monitoring');

        $data['monitoring'] =
        $monitoring->getAllMonitoring();

        $this->view(
            'monitoring/daftar',
            $data
        );
    }

    public function tambah()
    {
        if($_SESSION['role'] != 'admin')
        {
            die('Akses ditolak');
        }

        $this->view('monitoring/tambah');
    }

    public function store()
    {
        if($_SESSION['role'] != 'admin')
        {
            die('Akses ditolak');
        }

        $monitoring = $this->model('Monitoring');

        $monitoring->insert($_POST);

        header(
            "Location: /Simoju_UTS2/public/index.php?url=MonitoringController/daftar"
        );

        exit;
    }

    public function edit($id)
    {
        if($_SESSION['role'] != 'admin')
        {
            die('Akses ditolak');
        }

        $monitoring = $this->model('Monitoring');

        $data['monitoring'] =
        $monitoring->getById($id);

        $this->view(
            'monitoring/edit',
            $data
        );
    }

    public function grafik()
    {
        $monitoring =
        $this->model('Monitoring');

        $data['chart'] =
        $monitoring->getChartData();

        $this->view(
            'monitoring/grafik',
            $data
        );
    }

    public function testApi()
    {
        $url =
        "https://api.openweathermap.org/data/2.5/weather?q=Jakarta,id&appid="
        . OPENWEATHER_API_KEY .
        "&units=metric";

        $response =
        file_get_contents($url);

        echo "<pre>";
        print_r(
            json_decode($response,true)
        );
    }
}