<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://www.pngitem.com/pimgs/m/146-1468479_my-profile-icon-blank-profile-picture-circle-hd.png" width="60px" alt="">
        <div>
          <p class="app-sidebar__user-name">John Doe</p>
          <p class="app-sidebar__user-designation">Frontend Developer</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item" href="<?= base_url('admin/utama'); ?>"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Kelola</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="<?= base_url('admin/petugas'); ?>"><i class="icon fa fa-circle-o"></i> Petugas</a></li>
            <li><a class="treeview-item" href="<?= base_url('admin/kandidat'); ?>" rel="noopener"><i class="icon fa fa-circle-o"></i> Kandidat</a></li>
            <li><a class="treeview-item" href="<?= base_url('admin/pemilih'); ?>"><i class="icon fa fa-circle-o"></i> Pemilih</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-file"></i><span class="app-menu__label">Report</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="<?= base_url('admin/petugas/report'); ?>"><i class="icon fa fa-circle-o"></i> Petugas</a></li>
            <li><a class="treeview-item" href="<?= base_url('admin/kandidat/report'); ?>" rel="noopener"><i class="icon fa fa-circle-o"></i> Kandidat</a></li>
            <li><a class="treeview-item" href="<?= base_url('admin/kandidat/suara'); ?>"><i class="icon fa fa-circle-o"></i> Hasil Suara</a></li>
          </ul>
        </li>
      </ul>
      
      
    </aside>