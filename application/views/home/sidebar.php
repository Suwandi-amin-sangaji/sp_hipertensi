<aside class="main-sidebar horizontal dark-bg">
    <section class="sidebar">
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="treeview"><a href="<?= base_url() ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
            </li>
            <?php
            if ($this->session->userdata('status') == 'Login') {
            ?>
            <li class="treeview"> <a href="#"><i class="fa fa-desktop"></i> <span>Master Data</span></a>
                <ul class="treeview-menu">
                    <li><a href="<?= base_url('Gejala') ?>"><i class="fa fa-angle-right"></i> Gejala</a></li>
                    <li><a href="<?= base_url('Penyakit') ?>"><i class="fa fa-angle-right"></i> Penyakit</a></li>
                    <li><a href="<?= base_url('Pasien') ?>"><i class="fa fa-angle-right"></i> Pasien</a></li>
                </ul>
            </li>
            <?php } ?>
            <li> <a href="<?= base_url('Diagnosa') ?>"> <i class="fa fa-th"></i> <span>Diagnosa</span></a> </li>
        </ul>
        <!-- sidebar-menu -->
    </section>
</aside>