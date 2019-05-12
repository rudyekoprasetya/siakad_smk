<?php if((isset($aksi)) && ($aksi=="tambah")) { ?>
			<div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-edit"></i> <?php echo $judul; ?></h3>
              </div>
              <div class="panel-body">
			  <?php echo form_open('mapel/add'); ?>
                <form role="form">

              <div class="form-group">
                <label>Kode</label>
                <input class="form-control" name="id_mapel">
              </div>
			  
			  <div class="form-group">
                <label>Mata Pelajaran</label>
                <input class="form-control" name="nama_mapel">
              </div>

			  <div class="form-group">
                <label>Guru Pengampu</label>
                <input class="form-control" name="guru">
              </div>			  
			  
              <div class="form-group">
                <label>Status</label>  
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
			  <?php echo form_open('mapel/edit_simpan'); ?>
                <form role="form">
<?php foreach($data->result_array() as $row) { ?>
              <div class="form-group">
                <label>Kode</label>
                <input class="form-control" name="id_mapel" value="<?php echo $row['id_mapel']; ?>" readonly="readonly">
              </div>
			  
			  <div class="form-group">
                <label>Mata Pelajaran</label>
                <input class="form-control" name="nama_mapel" value="<?php echo $row['nama_mapel']; ?>">
              </div>

			  <div class="form-group">
                <label>Guru Pengampu</label>
                <input class="form-control" name="guru" value="<?php echo $row['guru']; ?>">
              </div>			  
			  
              <div class="form-group">
                <label>Status</label>  
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
              </div>  
              <button type="submit" class="btn btn-primary">Simpan</button>
              <button type="reset" class="btn btn-warning">Batal</button>  
<?php } ?>
            </form>
<?php } ?>