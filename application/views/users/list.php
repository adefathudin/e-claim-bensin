
<!--/.span3-->
<div class="span9">
    <div class="content">

        <!--/.module-->
        <div class="module hide">
            <div class="module-head">
                <h3>
                    Adjust Budget Range</h3>
            </div>
            <div class="module-body">
                <div class="form-inline clearfix">
                    <a href="#" class="btn pull-right">Update</a>
                    <label for="amount">
                        Price range:</label>
                    &nbsp;
                    <input type="text" id="amount" class="input-" />
                </div>
                <hr />
                <div class="slider-range">
                </div>
            </div>
        </div>
        <div class="module">
            <div class="module-head">
                <h3>
                    List Users</h3>
            </div>
            <div class="module-body table">
                <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display"
                       width="100%">
                    <thead>
                        <tr>
                            <th>
                                NIK
                            </th>
                            <th>
                                Nama Karyawan
                            </th>
                            <th>
                                No. Plat
                            </th>
                            <th>
                                Divisi
                            </th>
                            <th>
                                Jabatan
                            </th>
                            <th>
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($list_users as $user) {
                            if ($user->active == 1){
                                $status = "<a href='".base_url()."users/ban?nik=".$user->nik."' class='btn btn-danger'><i class='fa fa-ban'></i></a>";
                                $del1 = "";
                                $del2 = "";
                            } else {
                                $status = "<a href='".base_url()."users/active?nik=".$user->nik."' class='btn btn-primary'><i class='fa fa-unlock'></i></a>";
                                $del1 = "<del>";
                                $del2 = "</del>";
                            }
                            echo
                            "<tr>
                                <td>" . $del1 . $user->nik . $del2 . "</td>
                                <td>" . $del1 . $user->nama_lengkap . $del2 . "</td>
                                <td>" . $del1 . $user->no_plat . $del2 . "</td>
                                <td>" . $del1 . $user->divisi . $del2 . "</td>
                                <td>" . $del1 . $user->jabatan . $del2 . "</td>
                                <td>" . $del1 .$status."</td>
                             </tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>
    <!--/.module-->
</div>
<!--/.content-->
</div>
<!--/.span9-->
