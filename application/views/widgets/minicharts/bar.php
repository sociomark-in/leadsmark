<?php $uid = random_int(100, 999) ?>
<div id="ordersChart<?= $uid ?>" class="mt-md-3 mt-xl-0"></div>
<script>
    var options3 = <?= $options ?>;
    options3.colors = [colors.primary];
    options3.chart.height = <?= $props['height'] ?>;
    console.log(options3);
    if ($('#ordersChart<?= $uid ?>').length) {
        new ApexCharts(document.querySelector("#ordersChart<?= $uid ?>"), options3).render();
    }
</script>