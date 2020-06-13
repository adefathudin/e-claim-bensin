
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="<?= base_url()?>dashboard"><i class="menu-icon fa fa-home"></i>Dashboard
                                </a></li>
                                <?php 
                                if ($data_user->jabatan == CLERK){ ?>
                                <li>
                                    <a class="collapsed" data-toggle="collapse" href="#claim">
                                    <i class="menu-icon fa fa-coins"></i>
                                    <i class="icon-chevron-down pull-right"></i>
                                    <i class="icon-chevron-up pull-right"></i>
                                    Claim</a>
                                    <ul id="claim" class="collapse unstyled">
                                        <li><a href="<?= base_url()?>eclaim/bensin"><i class="icon-fire"></i> Bensin </a></li>
                                        <li><a href="<?= base_url()?>eclaim/parkir"><i class="fa fa-motorcycle"></i> Parkir </a></li>
                                    </ul>
                                </li>
                                <?php } ?>
                                <li>
                                    <a class="collapsed" data-toggle="collapse" href="#laporan">
                                    <i class="icon-chevron-down pull-right"></i>
                                    <i class="menu-icon fa fa-check"></i>
                                    Laporan</a>                                    
                                    <ul id="laporan" class="collapse unstyled">
                                        <li><a href="<?= base_url()?>laporan/bensin"><i class="icon-fire"></i> Bensin </a></li>
                                        <li><a href="<?= base_url()?>laporan/parkir"><i class="fa fa-motorcycle"></i> Parkir </a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="collapsed" data-toggle="collapse" href="#user">
                                    <i class="icon-chevron-down pull-right"></i>
                                    <i class="menu-icon fa fa-users"></i>
                                    Users</a>                                    
                                    <ul id="user" class="collapse unstyled">
                                        <li><a href="<?= base_url()?>users/list"><i class="fa fa-list"></i> List User </a></li>                                        
                                        <?php 
                                        if ($data_user->jabatan == SUPERVISOR || $data_user->jabatan == ADMIN){ ?>
                                        <li><a href="<?= base_url()?>users/tambah"><i class="fa fa-user-plus"></i> Tambah User </a></li>
                                        <?php } ?>
                                    </ul>
                                </li>                                        
                                <?php 
                                if ($data_user->jabatan == SUPERVISOR || $data_user->jabatan == ADMIN){ ?>
                                <li><a href="<?= base_url()?>divisi"><i class="menu-icon fa fa-cog"></i> Divisi dan Jabatan </a></li>
                                <?php } ?>
                            </ul>
                        </div>
                        <!--/.sidebar-->
                    </div>