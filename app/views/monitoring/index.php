<div class="container mt-5">

    <div class="card shadow p-4">

        <h1 class="mb-4">
            Monitoring Udara Jakarta
        </h1>

        <hr>

        <div class="mb-3">
            <h4>Wilayah</h4>
            <p><?= $data['wilayah']; ?></p>
        </div>

        <div class="mb-3">
            <h4>Suhu</h4>
            <p><?= $data['suhu']; ?> °C</p>
        </div>

        <div class="mb-3">
            <h4>AQI</h4>
            <p><?= $data['aqi']; ?></p>
        </div>

        <div class="mb-3">
            <h4>Kategori Udara</h4>
            <p><?= $data['kategori']; ?></p>
        </div>

        <a href="http://localhost/Simoju_UTS2/public/index.php?url=HomeController/dashboard"
           class="btn btn-secondary">
            Kembali Dashboard
        </a>

    </div>

</div>