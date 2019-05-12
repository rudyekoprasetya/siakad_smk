			<div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> <?php echo $judul; ?></h3>
              </div>
              <div class="panel-body">
			  <a href="<?php echo base_url()."index.php/mapel/tambah"; ?>"><button type="button" class="btn btn-success">Tambah</button></a>
			  <div class="table-responsive">
              <table class="table table-hover table-striped tablesorter">
                <thead>
                  <tr>
                    <th class="header">NO <i class="fa fa-sort"></i></th>
                    <th class="header">KODE  <i class="fa fa-sort"></i></th>
                    <th class="header">MATA PELAJARAN <i class="fa fa-sort"></i></th>
					<th class="header">GURU <i class="fa fa-sort"></i></th>
					<th class="header">AKTIF <i class="fa fa-sort"></i></th>
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
                    <td><?php echo $row['id_mapel']; ?></td>
					<td><?php echo $row['nama_mapel']; ?></td>
					<td><?php echo $row['guru']; ?></td>
					<td><?php echo $row['aktif']; ?></td>
					<td><?php echo anchor('mapel/edit/'.$row['id_mapel'],'Edit'); ?> | <?php echo anchor('mapel/delete/'.$row['id_mapel'],'Hapus'); ?></td>					
                </tr>
<?php } ?>
				</tbody>
              </table>
            </div>
			<ul class="pagination">
               <?php echo $paging; ?>
              </ul>
              </div>
