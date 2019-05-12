<?php if((isset($aksi)) && ($aksi=="tambah")) { ?>
			<div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-edit"></i> <?php echo $judul; ?></h3>
              </div>
              <div class="panel-body">
			  <?php echo form_open('kelas/add'); ?>
                <form role="form">

              <div class="form-group">
                <label>Kode Kelas</label>
                <input class="form-control" name="kode_kelas">
              </div>
			  
			  <div class="form-group">
                <label>Nama Kelas</label>
                <input class="form-control" name="nama_kelas">
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
              <button type="submit" class="btn btn-success">Simpan</button>
              <button type="reset" class="btn btn-warning">Batal</button>

            </form>
			<?php echo form_close(); ?>
              </div>        
<?php } else {?>
<div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-edit"></i> <?php echo $judul; ?></h3>
              </div>
              <div class="panel-body">
			  <?php echo form_open('kelas/edit_simpan'); ?>
                <form role="form">
<?php foreach($konten->result_array() as $row) { ?>
              <div class="form-group">
                <label>Kode Kelas</label>
                <input class="form-control" name="kode_kelas" value="<?php echo $row['kode_kelas'];?>" readonly="readonly">
              </div>
			  
			  <div class="form-group">
                <label>Nama Kelas</label>
                <input class="form-control" name="nama_kelas" value="<?php echo $row['nama_kelas'];?>">
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
                </label>              
              </div>  
              <button type="submit" class="btn btn-primary">Simpan</button>
              <button type="reset" class="btn btn-warning">Batal</button>  
<?php } ?>
            </form>
			<?php echo form_close(); ?>
              </div>  
<?php } ?>
