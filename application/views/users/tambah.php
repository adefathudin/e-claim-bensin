
<!--/.span3-->
<div class="span9">
    <div class="content">
        <div class="module">
            <div class="module-head">
                <h3>Form Input Klaim Bensin</h3>
            </div>
            <div class="module-body">
                <form class="form-horizontal row-fluid" method="POST" action="<?=base_url() ?>auth/tambah_user">

                    <div class="control-group">
                        <label class="control-label" for="basicinput">NIK</label>
                        <div class="controls">
                            <input data-title="A tooltip for the input" type="number" name="nik" data-original-title="" class="span8 tip">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Nama </label>
                        <div class="controls">
                            <input data-title="A tooltip for the input" type="text" name="nama" data-original-title="" class="span8 tip">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">No. Plat</label>
                        <div class="controls">
                            <input data-title="A tooltip for the input" type="text" name="plat" data-original-title="" class="span8 tip">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Divisi</label>
                        <div class="controls">
                            <select name="divisi" class="span8 tip">
                                <?php foreach ($list_divisi as $divisi){
                                    echo "<option value='$divisi->des'>$divisi->des</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Jabatan</label>
                        <div class="controls">
                            <select name="jabatan" class="span8 tip">
                                <?php foreach ($list_jabatan as $jabatan){
                                    echo "<option value='$jabatan->des'>$jabatan->des</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Password</label>
                        <div class="controls">
                            <input data-title="A tooltip for the input" type="password" name="password" data-original-title="" class="span8 tip">
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="controls">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-user-plus"></i> Tambah</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!--/.module-->
    </div>
    <!--/.content-->
</div>
<!--/.span9-->
