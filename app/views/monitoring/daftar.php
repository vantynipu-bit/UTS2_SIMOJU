<div class="container mt-4">

    <div class="d-flex justify-content-between mb-3">

        <a
        href="index.php?url=HomeController/dashboard"
        class="btn btn-secondary">

            Kembali

        </a>
        
        <h2>Data Monitoring</h2>

        <?php if($_SESSION['role'] == 'admin'): ?>

        <a
        href="index.php?url=MonitoringController/tambah"
        class="btn btn-primary">

            Tambah Data

        </a>

        <?php endif; ?>

    </div>

    <?php while($row = $data['monitoring']->fetch_assoc()): ?>

    <div class="card mb-3">

        <div class="card-body">

            <h5><?= $row['wilayah']; ?></h5>

            <p>
                Suhu :
                <?= $row['suhu']; ?> °C
            </p>

            <p>
                AQI :
                <?= $row['aqi']; ?>
            </p>

            <p>
                Kategori :
                <?= $row['kategori']; ?>
            </p>

            <?php if($_SESSION['role'] == 'admin'): ?>

            <a
            href="index.php?url=MonitoringController/edit/<?= $row['id']; ?>"
            class="btn btn-success btn-sm">

                Edit

            </a>

            <a
            href="index.php?url=MonitoringController/delete/<?= $row['id']; ?>"
            class="btn btn-danger btn-sm">

                Hapus

            </a>

            <?php endif; ?>

        </div>

    </div>

    <?php endwhile; ?>

</div>