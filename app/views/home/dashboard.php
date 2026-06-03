<div class="container mt-5">

    <div class="card shadow">

        <div class="card-body p-4">

            <div class="d-flex justify-content-between align-items-center">

                <div>

                    <h2>
                        Selamat Datang,
                        <?= $_SESSION['nama']; ?>
                    </h2>

                    <p class="text-muted mb-0">
                        Role:
                        <b><?= ucfirst($_SESSION['role']); ?></b>
                    </p>

                </div>
                
            </div>

            <hr>

            <?php if($_SESSION['role'] == 'admin'): ?>

                <h4 class="mb-4">
                    Dashboard Admin SIMOJU
                </h4>

                <p>
                    Sistem Monitoring Suhu dan Polusi Udara Jakarta
                </p>

                <!-- STATISTIK ADMIN -->
                <div class="row mt-4">

                    <div class="col-md-3">
                        <div class="card text-center shadow">
                            <div class="card-body">
                                <h3><?= $data['totalArtikel']; ?></h3>
                                <p>Artikel Edukasi</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card text-center shadow">
                            <div class="card-body">
                                <h3><?= $data['totalMonitoring']; ?></h3>
                                <p>Data Monitoring</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card text-center shadow">
                            <div class="card-body">
                                <h3><?= $data['totalNotifikasi']; ?></h3>
                                <p>Notifikasi</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card text-center shadow">
                            <div class="card-body">
                                <h3><?= $data['totalUser']; ?></h3>
                                <p>User</p>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- MENU ADMIN -->
                <div class="row mt-4">

                    <div class="col-md-3 mb-3">
                        <div class="card border-primary">
                            <div class="card-body text-center">
                                <h5>Monitoring</h5>
                                <p>Kelola data monitoring.</p>
                                <a href="index.php?url=MonitoringController/daftar"
                                   class="btn btn-primary">
                                    Buka
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 mb-3">
                        <div class="card border-success">
                            <div class="card-body text-center">
                                <h5>Edukasi</h5>
                                <p>Kelola artikel edukasi.</p>
                                <a href="index.php?url=EdukasiController/index"
                                   class="btn btn-success">
                                    Buka
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 mb-3">
                        <div class="card border-warning">
                            <div class="card-body text-center">
                                <h5>Notifikasi</h5>
                                <p>Kelola notifikasi sistem.</p>
                                <a href="index.php?url=NotifikasiController/index"
                                   class="btn btn-warning">
                                    Buka
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 mb-3">
                        <div class="card border-dark">
                            <div class="card-body text-center">
                                <h5>User</h5>
                                <p>Kelola pengguna.</p>
                                <a href="href=index.php?url=UserController/index"
                                   class="btn btn-dark">
                                    Buka
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 mb-3">

                        <div class="card border-info">

                            <div class="card-body text-center">

                                <h5>Grafik AQI</h5>

                                <p>
                                    Statistik kualitas udara.
                                </p>

                                <a
                                href="index.php?url=MonitoringController/grafik"
                                class="btn btn-info">

                                    Buka

                                </a>

                            </div>

                        </div>

                    </div>

                </div>

            <?php else: ?>

                <h4 class="mb-4">
                    Dashboard User SIMOJU
                </h4>

                <p>
                    Sistem Monitoring Suhu dan Polusi Udara Jakarta
                </p>

                <!-- MENU USER -->
                <div class="row mt-4">

                    <div class="col-md-4 mb-3">
                        <div class="card border-primary">
                            <div class="card-body text-center">
                                <h5>Monitoring Realtime</h5>
                                <p>Lihat kondisi udara terbaru.</p>
                                <a href="index.php?url=MonitoringController/index"
                                   class="btn btn-primary">
                                    Buka
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="card border-success">
                            <div class="card-body text-center">
                                <h5>Edukasi</h5>
                                <p>Artikel kesehatan dan lingkungan.</p>
                                <a href="index.php?url=EdukasiController/index"
                                   class="btn btn-success">
                                    Buka
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="card border-warning">
                            <div class="card-body text-center">
                                <h5>Notifikasi</h5>
                                <p>Peringatan kualitas udara.</p>
                                <a href="index.php?url=NotifikasiController/index"
                                   class="btn btn-warning">
                                    Buka
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

            <?php endif; ?>

        </div>

    </div>

</div>