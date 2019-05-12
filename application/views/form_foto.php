<?php if((isset($aksi)) && ($aksi=="tambah")) { ?>
			<div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-edit"></i> <?php echo $judul; ?></h3>
              </div>
              <div class="panel-body">
			  <?php echo form_open_multipart('foto/upload'); ?>
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
                <label>Upload Foto</label>
                <input type="file" name="gambar">
              </div>	

			   <div class="form-group">
                <label>Aktif</label>  
				<div class="radio">
                  <label>
                    <input type="radio" name="aktif" id="aktif" value="yes"> Ya
                  </label>
                </div>
				<div class="radio">
                  <label>
                    <input type="radio" name="aktif" id="aktif" value="no"> Tidak
                  </label>
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
			  <?php echo form_open_multipart('foto/edit_simpan'); ?>
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
                <label>Upload Foto</label>
                <input type="file" name="gambar">
              </div>	

			  <div class="form-group">
                <label>Aktif</label>  
				<div class="radio">
                  <label>
                    <input type="radio" name="aktif" id="aktif" value="yes" <?php if (isset($row['aktif'])) {if (!(strcmp($row['aktif'], "yes"))) {echo "CHECKED";}}?>> Ya
                  </label>
                </div>
				<div class="radio">
                  <label>
                    <input type="radio" name="aktif" id="aktif" value="no" <?php if (isset($row['aktif'])) {if (!(strcmp($row['aktif'], "no"))) {echo "CHECKED";}}?>> Tidak
                  </label>
                </div>           
                </label>              
             			  
              
              <button type="submit" class="btn btn-primary">Simpan</button>
              <button type="reset" class="btn btn-warning">Batal</button>  

            </form>
			<?php echo form_close(); ?>
              </div>
<?php } ?>