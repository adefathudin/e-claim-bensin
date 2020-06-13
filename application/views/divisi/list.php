
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
                    List Divisi dan Jabatan ( <a href='#' data-toggle='modal' data-target='#addDivisiModal'><i class="fa fa-plus"></i></a> )</h3>
            </div>
            <div class="module-body table">
                <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display"
                       width="100%">
                    <thead>
                        <tr>
                            <th>
                                ID
                            </th>
                            <th>
                                Kategori
                            </th>
                            <th>
                                Desc
                            </th>
                            <th>
                                Delete
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($lists as $list) {
                            echo
                            "<tr>
                                <td>" . $list->id . "</td>
                                <td>" . $list->kategori . "</td>
                                <td>" . $list->des . "</td>
                                <td><a href='".base_url()."divisi/delete?id=".$list->id."' class='btn btn-danger'><i class='fa fa-trash'></i></a></td>
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

<div class="modal fade" id="addDivisiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form class="form-group" method="POST" action="<?= base_url() ?>divisi/tambah">
                <input type="hidden" name="id_claim_parkir" id="id_claim_parkir">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Tambah Divisi dan Jabatan
                    </h5>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <select class="form-control" name="kategori" required>
                            <option value="Divisi">Divisi</option>
                            <option value="Jabatan">Jabatan</option>
                        </select>
                        <input type="text" class="form-control" placeholder="Input deskripsi" name="des" required>                        
                    </div>                    
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary">simpan</button>
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                </div>

            </form>
        </div>
    </div>
</div>

