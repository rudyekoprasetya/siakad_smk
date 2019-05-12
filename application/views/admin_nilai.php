			<div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> <?php echo $judul; ?></h3>
              </div>
              <div class="panel-body">
			  <a href="<?php echo base_url()."index.php/nilai/tambah"; ?>"><button type="button" class="btn btn-success">Tambah</button></a> <a href="<?php echo base_url()."index.php/nilai/cetak_raport"; ?>"><button type="button" class="btn btn-warning">Cetak Raport</button></a>
                      <table class="table table-hover table-striped tablesorter">
                <thead>
                  <tr>
                    <th class="header">NO <i class="fa fa-sort"></i></th>
					<th class="header">NIS <i class="fa fa-sort"></i></th>
                    <th class="header">NAMA  <i class="fa fa-sort"></i></th>
					<th class="header">MATA PELAJARAN <i class="fa fa-sort"></i></th>
					<th class="header">NILAI <i class="fa fa-sort"></i></th>					
                    <th class="header">WAKTU PENGUMPULAN<i class="fa fa-sort"></i></th>
					<th class="header">AKSI <i class="fa fa-sort"></i></th>
                  </tr>
                </thead>
                <tbody>   
<?php 
$no=0;
foreach($konten->result_array() as $row) {
$no++;
	?>				
                <tr>
					<td><?php echo $no; ?></td>
                    <td><?php echo $row['nis']; ?></td>
					<td><?php echo $row['nama']; ?></td>
					<td><?php echo $row['mapel']; ?></td>
					<td><?php echo $row['nilai']; ?></td>					
					<td><?php echo $row['tanggal']; ?></td>
					<td><?php echo anchor('nilai/edit/'.$row['id_nilai'],'Edit'); ?> | <?php echo anchor('nilai/delete/'.$row['id_nilai'],'Hapus'); ?></td>					
                </tr>
<?php } ?>
				</tbody>
              </table>
            </div>
			<ul class="pagination">
               <?php echo $paging; ?>
              </ul>
              </div>
