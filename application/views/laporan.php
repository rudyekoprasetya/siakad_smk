			<div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> <?php echo $judul; ?></h3>
              </div>
              <div class="panel-body">
              <a href="<?php echo base_url().'index.php/raport/cetak' ?>" class="btn btn-primary" target="_blank"><i class="fa fa-print"></i> Cetak</a>
			  <div class="table-responsive">
              <table class="table table-hover table-striped tablesorter">
                <thead>
                  <tr>
                    <th class="header">NO <i class="fa fa-sort"></i></th>
					<th class="header">MATA PELAJARAN <i class="fa fa-sort"></i></th>
					<th class="header">NILAI <i class="fa fa-sort"></i></th>
					<th class="header">HURUF <i class="fa fa-sort"></i></th>
                  </tr>
                </thead>
                <tbody>   
<?php 
$no=0;
$jumlah=0;
$x=0;
foreach($konten->result_array() as $row) {
$no++;
	?>				
                <tr>
					<td><?php echo $no; ?></td>
					<td><?php echo $row['mapel']; ?></td>
					<td><?php echo $row['nilai']; ?></td>	
					<td><?php if($row['nilai']>=75) { echo "B";} else { echo "C";} ?></td>
                </tr>
<?php
$x=$x+1;
$jumlah=$jumlah+$row['nilai'];
 ?>
<?php } ?>
				<tr>
					<td></td>
					<td>Jumlah</td>
					<td><strong><?php echo $jumlah; ?></strong></td>
					<td></td>
                </tr>
				<tr>
					<td></td>
					<td>Rerata</td>
					<td><strong><?php echo round($jumlah/$x,2); ?></strong></td>
					<td></td>					
                </tr>
				</tbody>
              </table>