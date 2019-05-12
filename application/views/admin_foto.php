			<div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> <?php echo $judul; ?></h3>
              </div>
              <div class="panel-body">
			  <a href="<?php echo base_url()."index.php/foto/tambah"; ?>"><button type="button" class="btn btn-success">Tambah</button></a>
			  <div class="table-responsive">
              <table class="table table-hover table-striped tablesorter">
                <thead>
                  <tr>
                    <th class="header">NO <i class="fa fa-sort"></i></th>
					<th class="header">NIS <i class="fa fa-sort"></i></th>
                    <th class="header">NAMA  <i class="fa fa-sort"></i></th>
					<th class="header">FOTO <i class="fa fa-sort"></i></th>
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
                    <td><?php echo $row['nis']; ?></td>
					<td><?php echo $row['nama']; ?></td>
					<td><img src="<?php echo base_url()."/foto/".$row['gambar']; ?>" height="100" width="80" align="absmiddle"></td>
					<td><?php echo $row['aktif']; ?></td>
					<td><?php echo anchor('foto/edit/'.$row['id'],'Edit'); ?> | <?php echo anchor('foto/delete/'.$row['id'],'Hapus'); ?></td>					
                </tr>
<?php } ?>
				</tbody>
              </table>
            </div>
			<ul class="pagination">
               <?php echo $paging; ?>
              </ul>
              </div>
