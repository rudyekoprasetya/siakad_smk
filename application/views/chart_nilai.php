<?php
 foreach ($report->result_array() as $row ) {
   $mapel[]=$row['mapel'];
   $nilai[]=(int)$row['nilai'];
 }
?>	  
<script src="<?php echo base_url()."/assets/"; ?>js/jquery-1.9.1.min.js"></script>
<script src="<?php echo base_url()."/assets/"; ?>js/highcharts/highcharts.js"></script>
<script src="<?php echo base_url()."/assets/"; ?>js/highcharts/modules/exporting.js"></script>    
<script type="text/javascript">
$(function () {
    Highcharts.chart('container', {
        chart: { type: 'column' },
        title: { text: 'Daftar Nilai Siswa' },
        subtitle: {text: 'Contoh Subtitle'},
        xAxis: {
            categories: <?php echo json_encode($mapel)?>        
        },
        yAxis: { min: 10, max: 100,
            title: { text: 'Rentan Nilai'}
        },
        tooltip: {valueSuffix: ' point'},
        plotOptions: {
            bar: { dataLabels: { enabled: true}
            } }, 
        series: [{
            name: 'Nilai Siswa',
            data: <?php echo json_encode($nilai)?>
        }]
    });
});
</script>

<div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> <?php echo $judul; ?> </h3>
              </div>
              <div class="panel-body">
               <div id="container" style="width:100%; height:300px;"></div>

                </div>
</div>