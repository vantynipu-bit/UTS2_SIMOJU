<?php

$labels = [];
$aqi = [];

while($row = $data['chart']->fetch_assoc())
{
    $labels[] = $row['wilayah'];
    $aqi[] = $row['aqi'];
}

$labels = array_reverse($labels);
$aqi = array_reverse($aqi);

?>

<div class="container mt-4">
        <a
        href="index.php?url=HomeController/dashboard"
        class="btn btn-secondary">

            Kembali

        </a>

    <h2>Grafik AQI</h2>

    <canvas id="aqiChart"></canvas>

</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>

const ctx =
document.getElementById('aqiChart');

new Chart(ctx, {

    type: 'line',

    data: {

        labels:
        <?= json_encode($labels); ?>,

        datasets: [{

            label: 'AQI',

            data:
            <?= json_encode($aqi); ?>,

            borderWidth: 3,
            tension: 0.3

        }]
    }
});

</script>