<?php if((isset($aksi)) && ($aksi=="tambah")) { ?>
			<div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-edit"></i> <?php echo $judul; ?></h3>
              </div>
              <div class="panel-body">
			  <?php echo form_open('siswa/add'); ?>
                <form role="form">

              <div class="form-group">
                <label>NIS</label>
                <input class="form-control" name="nis">
                <p class="help-block">Isikan dengan Angka.</p>
              </div>
			  
			  <div class="form-group">
                <label>Nama Lengkap</label>
                <input class="form-control" name="nama">
              </div>
			  
			  <div class="form-group">
                <label>Password</label>
                <input class="form-control" type="password" name="password">
              </div>
           
              <div class="form-group">
                <label>Alamat</label>
                <textarea class="form-control" rows="3" name="alamat"></textarea>
              </div>

              <div class="form-group">
                <label>Kota/Kab</label>
                <input class="form-control" name="kota_kab">
              </div>

              <div class="form-group">
                <label>Jenis Kelamin</label>  
				<div class="radio">
                  <label>
                    <input type="radio" name="gender" id="gender" value="L"> Laki-laki 
                  </label>
                </div>
				<div class="radio">
                  <label>
                    <input type="radio" name="gender" id="gender" value="P"> Perempuan
                  </label>
                </div>           
                </label>              
              </div>            

              <div class="form-group">
                <label>Kelas</label>
                <select class="form-control" name="kelas">
	<?php foreach($kelas->result_array() as $row ) { ?>
                  <option value="<?php echo $row['kode_kelas']; ?>"><?php echo $row['nama_kelas']; ?></option>   
        <?php } ?>               
                </select>
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
			  <?php echo form_open('siswa/edit_simpan'); ?>
                <form role="form">
			<?php foreach($data->result_array() as $row) { ?>
              <div class="form-group">
                <label>NIS</label>
                <input class="form-control" name="nis" value="<?php echo $row['nis']; ?>" readonly="readonly">
                <p class="help-block">Isikan dengan Angka.</p>
              </div>
			  
			  <div class="form-group">
                <label>Nama Lengkap</label>
                <input class="form-control" name="nama" value="<?php echo $row['nama']; ?>">
              </div>
			  
			  <div class="form-group">
                <label>Password</label>
                <input class="form-control" type="password" name="password" value="<?php echo $row['password']; ?>">
              </div>
           
              <div class="form-group">
                <label>Alamat</label>
                <textarea class="form-control" rows="3" name="alamat"><?php echo $row['alamat']; ?></textarea>
              </div>

              <div class="form-group">
                <label>Kota/Kab</label>
                <input class="form-control" name="kota_kab" value="<?php echo $row['kota_kab']; ?>">
              </div>

              <div class="form-group">
                <label>Jenis Kelamin</label>  
				<div class="radio">
                  <label>
                    <input type="radio" name="gender" id="gender" value="L" <?php if (isset($row['gender'])) {if (!(strcmp($row['gender'], "L"))) {echo "CHECKED";}}?>> Laki-laki 
                  </label>
                </div>
				<div class="radio">
                  <label>
                    <input type="radio" name="gender" id="gender" value="P" <?php if (isset($row['gender'])) {if (!(strcmp($row['gender'], "P"))) {echo "CHECKED";}}?>> Perempuan
                  </label>
                </div>           
                </label>              
              </div>            

              <div class="form-group">
                <label>Kelas</label>
      <select class="form-control" name="kelas">
				<?php foreach($kelas->result_array() as $row) { ?>
        <option value="<?php echo $row['kode_kelas']; ?>"><?php echo $row['nama_kelas']; ?></option>
				<?php } ?>
                  
                </select>
              </div>

              <button type="submit" class="btn btn-primary">Simpan</button>
              <button type="reset" class="btn btn-warning">Batal</button>  
			<?php } ?>
            </form>
			<?php echo form_close(); ?>
              </div>  
<?php } ?>
