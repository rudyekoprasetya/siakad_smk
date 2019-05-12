<ul class="nav navbar-nav side-nav">
            <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
			<li><a href="<?php echo base_url()."index.php/siswa"; ?>"><i class="fa fa-table"></i> Siswa</a></li>
            <li><a href="<?php echo base_url()."index.php/kelas"; ?>"><i class="fa fa-home"></i> Kelas</a></li>
			<li><a href="<?php echo base_url()."index.php/mapel"; ?>"><i class="fa fa-desktop"></i> Mata Pelajaran</a></li>
            <li><a href="<?php echo base_url()."index.php/nilai"; ?>"><i class="fa fa-font"></i> Nilai</a></li>
            <li><a href="<?php echo base_url()."index.php/foto"; ?>"><i class="fa fa-edit"></i> Foto</a></li>
             <li><a href="<?php echo base_url()."index.php/grafik"; ?>"><i class="fa fa-bar-chart-o"></i> Diagram</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> User Menu <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><?php echo anchor('admin','Ganti Password');?></li>
                <li><?php echo anchor('login/logout','Logout'); ?></li>
              </ul>
</li>