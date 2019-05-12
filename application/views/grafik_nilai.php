<?php 
 foreach ($grafik->result_array() as $row ) {
   $mapel[]=$row['mapel'];
   $nilai[]=(int)$row['nilai'];
 }
?>    
<script src="<?php echo base_url()."/assets/"; ?>js/jquery-1.9.1.min.js"></script>
<script src="<?php echo base_url()."/assets/"; ?>js/highcharts/highcharts.js"></script>
<script src="<?php echo base_url()."/assets/"; ?>js/highcharts/modules/exporting.js"></script>

<!-- untuk tema -->
<script src="<?php echo base_url()."/assets/"; ?>js/highcharts/themes/sand-signika.js"></script>    
<!-- untuk tema -->

<script type="text/javascript">
$(function () {
    Highcharts.chart('container', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Daftar Nilai Siswa'
        },
        subtitle: {
            text: 'Contoh Subtitle'
        },
        xAxis: {
            categories: <?php echo json_encode($mapel)?>            
        },
        yAxis: {
            min: 10,
            max: 100,
            title: {
                text: 'Rentan Nilai'
            }
        },
        tooltip: {
            valueSuffix: ' point'
        },
        plotOptions: {
            bar: {
                dataLabels: {
                    enabled: true
                }
            }
        }, 
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

 <!-- untuk cari nilai siswa-->
<form role="form" method="POST" action="<?php echo site_url('grafik/cari'); ?>">
    <div class="form-group input-group">
        <input type="text" class="form-control" name="nis" placeholder="Masukan NIS Siswa">
        <span class="input-group-btn">
          <button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>
        </span>
    </div>
</form>
 <!-- untuk cari nilai siswa-->

<div id="container" style="width:100%; height:500px;"></div>

                </div>
</div>