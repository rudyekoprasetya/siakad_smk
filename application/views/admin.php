<div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-edit"></i> <?php echo $judul; ?></h3>
              </div>
              <div class="panel-body">
			  <?php echo form_open('admin/edit_simpan'); ?>
                <form role="form">
<?php foreach($konten->result_array() as $row) {?>
              <div class="form-group">
                <label>Username</label>
                <input class="form-control" name="username" value="<?php echo $row['username']; ?>" readonly="readonly">
              </div>
			  
			  <div class="form-group">
                <label>Password</label>
                <input class="form-control" name="password" type="password">
              </div>	
				<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
              <button type="submit" class="btn btn-primary">Simpan</button>
              <button type="reset" class="btn btn-warning">Batal</button>  
<?php } ?>
            </form>
			<?php echo form_close(); ?>
              </div>   