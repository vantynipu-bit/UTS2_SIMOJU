<?php

class Monitoring extends Model {

    public function getAllMonitoring()
    {
        $query = "SELECT * FROM riwayat_monitoring
        ORDER BY id DESC";

        $result = $this->db->query($query);
        if(!$result)
        {
            die("SQL Error: " . $this->db->error);
        }
        return $result;
        
    }

    public function getLatest()
    {
        $query = "SELECT * FROM riwayat_monitoring ORDER BY id DESC LIMIT 1";
        $result = $this->db->query($query);

        if(!$result) {
            die("Error MySQL: " . $this->db->error);
        }

        return $result->fetch_assoc(); // hasilnya array
    }

     public function getById($id)
    {
        $query =
        "SELECT * FROM riwayat_monitoring
        WHERE id = $id";

        $result =
        $this->db->query($query);

        return $result->fetch_assoc();
    }

    public function insert($data)
    {
        $wilayah = $data['wilayah'];
        $suhu = $data['suhu'];
        $aqi = $data['aqi'];
        $status = $data['status'];

        $query =
        "INSERT INTO riwayat_monitoring
        (wilayah,suhu,aqi,status)
        VALUES
        ('$wilayah','$suhu','$aqi','$status')";

        return $this->db->query($query);
    }

    public function update($id)
    {
        if($_SESSION['role'] != 'admin')
        {
            die('Akses ditolak');
        }

        $monitoring = $this->model('Monitoring');

        $monitoring->update(
            $id,
            $_POST
        );

        header(
            "Location: /Simoju_UTS2/public/index.php?url=MonitoringController/daftar"
        );

        exit;
    }
 

    public function delete($id)
    {
        $query =
        "DELETE FROM riwayat_monitoring
        WHERE id = $id";

        return $this->db->query($query);
    }

    public function countAll()
    {
        $query =
        "SELECT COUNT(*) as total
        FROM riwayat_monitoring";

        $result =
        $this->db->query($query);

        return $result->fetch_assoc()['total'];
    }

    public function getRiwayat()
    {
        $query = "
        SELECT *
        FROM riwayat_monitoring
        ORDER BY id ASC
        LIMIT 10
        ";

        return $this->db->query($query);
    }

    public function getChartData()
    {
        $query =
        "SELECT *
        FROM riwayat_monitoring
        ORDER BY id DESC
        LIMIT 10";

        return $this->db->query($query);
    }


}