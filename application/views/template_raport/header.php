<div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Raport Siswa</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><?php echo anchor('raport','Home'); ?></li>
            <li><?php echo anchor('raport/laporan','Hasil Belajar'); ?></li>
            <li><?php echo anchor('raport/grafik','Grafik Belajar'); ?></li>
            <li><?php echo anchor('login/logout','Logout'); ?></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>