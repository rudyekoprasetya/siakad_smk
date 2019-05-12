<div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> <?php echo $judul; ?></h3>
              </div>
              <br>

        <label>Masukan Nama Siswa</label>
        <?php echo form_open('nilai/raport') ?>
        <div class="form-group input-group">
                <input type="text" class="form-control" placeholder="masukan nama siswa">
                <span class="input-group-btn">
                  <button class="btn btn-info" type="button"><i class="fa fa-search"></i></button>
                </span>
              </div>
       <?php echo form_close();?> 
          
</div>