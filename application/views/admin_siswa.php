			<div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> <?php echo $judul; ?></h3>
              </div>
              <div class="panel-body">
			  <a href="<?php echo base_url()."index.php/siswa/tambah"; ?>"><button type="button" class="btn btn-success">Tambah</button></a>
			  <div class="table-responsive">
              <table class="table table-hover table-striped tablesorter">
                <thead>
                  <tr>
                    <th class="header">NO <i class="fa fa-sort"></i></th>
                    <th class="header">NIS <i class="fa fa-sort"></i></th>
                    <th class="header">NAMA <i class="fa fa-sort"></i></th>				
                    <th class="header">ALAMAT <i class="fa fa-sort"></i></th>					
                    <th class="header">KOTA/KAB <i class="fa fa-sort"></i></th>
                    <th class="header">GENDER <i class="fa fa-sort"></i></th>
                    <th class="header">KELAS <i class="fa fa-sort"></i></th>
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
					<td><?php echo $row['alamat']; ?></td>
					<td><?php echo $row['kota_kab']; ?></td>
					<td><?php echo $row['gender']; ?></td>
					<td><?php echo $row['kelas']; ?></td>	
					<td><?php echo anchor('siswa/edit/'.$row['nis'],'Edit'); ?> | <?php echo anchor('siswa/delete/'.$row['nis'],'Hapus'); ?></td>					
                </tr>
<?php } ?>
				</tbody>
              </table>
            </div>
			<ul class="pagination">
               <?php echo $paging; ?>
              </ul>
              </div>
