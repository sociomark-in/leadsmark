<?php $uid = random_int(100, 999) ?>
<div id="growthChart<?= $uid ?>" class="mt-md-3 mt-xl-0"></div>
<script>
    var options3 = <?= $charts['line']['growth'] ?>;
    options3.colors = [colors.primary];
    options3.chart.height = 60;
    console.log(options3);
    if ($('#growthChart<?= $uid ?>').length) {
        new ApexCharts(document.querySelector("#growthChart<?= $uid ?>"), options3).render();
    }
</script>