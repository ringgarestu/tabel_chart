@extends('layout')

@section('title', 'Chart Page')

@section('content')
<aside>
    <div class="judul">
        <h3>Chart Tanki Minyak</h3>
    </div>
</aside>

<div class="chart">
    <canvas id="myChart"></canvas>
</div>
@endsection

@section('javascript_custom')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    <?php
    $phpArray = json_encode($tanki);

    echo "let dataLabel = [\n";
    foreach ($tanki as $object) {
        echo $object->ID_TANKI . ",";
    }
    echo "];\n";

    echo "let dataVolume = [\n";
    foreach ($tanki as $object) {
        echo $object->VOLUME . ",";
    }
    echo "];\n";
    ?>
    const ctx = document.getElementById("myChart");

    new Chart(ctx, {
        type: "pie",
        data: {
            labels: dataLabel,
            datasets: [{
                label: "# of Votes",
                data: dataVolume,
                borderWidth: 1,

            }, ],
        },
    });
</script>
@endsection