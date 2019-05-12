			<div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> <?php echo $judul; ?></h3>
              </div>
              <div class="panel-body">
			  <a href="<?php echo base_url()."index.php/kelas/tambah"; ?>"><button type="button" class="btn btn-success">Tambah</button></a> | 
        <a href="<?php echo site_url('kelas/tambah'); ?>"><button type="button" class="btn btn-primary">Tambah</button></a>
			  <div class="table-responsive">
              <table class="table table-hover table-striped tablesorter">
                <thead>
                  <tr>
                    <th class="header">NO <i class="fa fa-sort"></i></th>
                    <th class="header">KODE KELAS <i class="fa fa-sort"></i></th>
                    <th class="header">NAMA KELAS<i class="fa fa-sort"></i></th>
					<th class="header">AKTIF<i class="fa fa-sort"></i></th>
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
                    <td><?php echo $row['kode_kelas']; ?></td>
					<td><?php echo $row['nama_kelas']; ?></td>
					<td><?php echo $row['aktif']; ?></td>
					<td><?php echo anchor('kelas/edit/'.$row['kode_kelas'],'Edit'); ?> | <?php echo anchor('kelas/delete/'.$row['kode_kelas'],'Hapus'); ?></td>					
                </tr>
<?php } ?>
				</tbody>
              </table>
            </div>
			<ul class="pagination">
               <?php echo $paging; ?>
              </ul>
              </div>
