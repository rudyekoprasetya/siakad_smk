<?php if((isset($aksi)) && ($aksi=="tambah")) { ?>
			<div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-edit"></i> <?php echo $judul; ?></h3>
              </div>
              <div class="panel-body">
			  <?php echo form_open('nilai/add'); ?>
                <form role="form">

              <div class="form-group">
                <label>Nama Siswa</label>
                <select class="form-control" name="nis">
				<?php foreach($siswa->result_array() as $row) { ?>
                  <option value="<?php echo $row['nis']; ?>"><?php echo $row['nama']; ?></option>
                <?php } ?>
                </select>
              </div>
			  
			  <div class="form-group">
                <label>Mata Pelajaran</label>
                <select class="form-control" name="mapel">
				<?php foreach($mapel->result_array() as $row) { ?>
                  <option value="<?php echo $row['id_mapel']; ?>"><?php echo $row['nama_mapel']; ?></option>
                <?php } ?>
                </select>
              </div>
			  
			  <div class="form-group">
                <label>Nilai</label>
                <input class="form-control" name="nilai" placeholder="Isi dengan Angka">
              </div>				  
              
              <button type="submit" class="btn btn-primary">Simpan</button>
              <button type="reset" class="btn btn-warning">Batal</button>  

            </form>
			<?php echo form_close(); ?>
              </div>        
<?php } else {?>
			<div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-edit"></i> <?php echo $judul; ?></h3>
              </div>
              <div class="panel-body">
			  <?php echo form_open('nilai/edit_simpan'); ?>
                <form role="form">
<?php foreach($data->result_array() as $row) { ?>
			<input type="hidden" name="id_nilai" value="<?php echo $row['id_nilai']; ?>">
              <div class="form-group">
                <label>Nama Siswa</label>
                <select class="form-control" name="nis">
				<?php foreach($siswa->result_array() as $row) { ?>
                  <option value="<?php echo $row['nis']; ?>"><?php echo $row['nama']; ?></option>
                <?php } ?>
                </select>
              </div>
			  
			  <div class="form-group">
                <label>Mata Pelajaran</label>
                <select class="form-control" name="mapel">
				<?php foreach($mapel->result_array() as $row) { ?>
                  <option value="<?php echo $row['id_mapel']; ?>"><?php echo $row['nama_mapel']; ?></option>
                <?php } ?>
                </select>
              </div>
			  
			  <div class="form-group">
                <label>Nilai</label>
                <input class="form-control" name="nilai">
              </div>				  
              
              <button type="submit" class="btn btn-primary">Simpan</button>
              <button type="reset" class="btn btn-warning">Batal</button>  
<?php } ?> 
            </form>
			<?php echo form_close(); ?>
              </div>       
<?php } ?> 