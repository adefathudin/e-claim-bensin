
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
                                        Laporan</h3>
                                </div>
                                <div class="module-body table">
                                    <table cellpadding="0" cellspacing="0" border="0" id="dataTable" class="datatable-1 table table-bordered table-striped display" width="100%">
                                        <thead>
                                            <tr>
                                                <th>
                                                    ID Claim
                                                </th>
                                                <th>
                                                    Tgl Pengisian
                                                </th>
                                                <th>
                                                    SPBU
                                                </th>
                                                <th>
                                                    KM Awal
                                                </th>
                                                <th>
                                                    KM Akhir
                                                </th>
                                                <th>
                                                    Liter
                                                </th>
                                                <th>
                                                    Rupiah
                                                </th>
                                                <th>
                                                    Status Claim
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            foreach ($data_claim as $claim){
                                                if ($claim->status_claim == 1){
                                                    $status = "<i class='fa fa-check'></i> Disetujui";
                                                } else if ($claim->status_claim == 2){
                                                    $status = "<i class='fa fa-user-check'></i> Terverifikasi";                                                    
                                                } else if ($claim->status_claim == 3){
                                                    $status = "<i class='fa fa-clock'></i> Verifikasi";                                                    
                                                } else if ($claim->status_claim == 4){
                                                    $status = "<i class='fa fa-ban'></i> Ditolak ". $claim->keterangan_reject;                                                    
                                                }
                                                echo 
                                                    "<tr>
                                                        <td><a href='#' data-toggle='modal' class='btnDetailClaim' data-id='".$claim->id_claim_bensin."' data-target='#detailClaimBensinModal'>".$claim->id_claim_bensin."</a></td>
                                                        <td>".$claim->tanggal_pengisian."</td>
                                                        <td>".$claim->kode_spbu."</td>
                                                        <td>".$claim->km_awal."</td>
                                                        <td>".$claim->km_akhir."</td>
                                                        <td>".$claim->liter."</td>
                                                        <td>".$claim->rupiah."</td>
                                                        <td>".$status."</td>
                                                     </tr>";
                                            } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!--/.module-->
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                
                    <div class="modal fade" id="detailClaimBensinModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <form class="form-group" method="POST" action="<?=base_url() ?>eclaim/approve_claim_bensin">
                                    <input type="hidden" name="id_claim_bensin" id="id_claim_bensin">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Detail Claim Bensin
                                        </h5>
                                    </div>
                                    <div class="modal-body">
                                        
                                        <table class="table table-striped tblDetailClaimBensin">
                                              
                                        </table>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                    
                    <script>
                    
                       $(document).on('click', '.btnDetailClaim', function(){

                       var id_claim_bensin = $(this).attr('data-id');
                       $.ajax({
                           type: 'GET',
                           url: '<?php echo base_url() ?>eclaim/detail_claim_bensin',
                           dataType: 'json',
                           data: {id_claim_bensin: id_claim_bensin}
                       }).then(function (data) {

                           if (data.status) {
                               var i = '';
                               var html = '';
                               var status = '';
                               for (i=0;i < data.item.length; i++){
                                   
                                $('#id_claim_bensin').val(data.item[i].id_claim_bensin);
                                
                                
                                if ('<?= $data_user->level ?>' == '<?= FINANCE ?>') {
                                
                                    if (data.item[i].status_claim == '2'){
                                        var frmApproveReject = '<td colspan="3"><textarea name="keterangan_reject" style="width: 100%;" placeholder="Masukan alasan reject klaim"></textarea></td></tr><tr><td colspan="3"><input type="submit" name="reject_claim_by_finance" value="Tolak" class="btn btn-danger"> - <input type="submit" name="approve_claim_by_finance" value="Approve" class="btn btn-primary"></td>';
                                    }
                                    
                                 } else if ('<?= $data_user->level ?>' == '<?= SUPERVISOR ?>') {
                                 
                                    if (data.item[i].status_claim == '3'){
                                        var frmApproveReject = '<td colspan="3"><textarea name="keterangan_reject" style="width: 100%;" placeholder="Masukan alasan reject klaim"></textarea></td></tr><tr><td colspan="3"><input type="submit" name="reject_claim_by_supervisor" value="Reject" class="btn btn-danger"> - <input type="submit" name="approve_claim_by_supervisor" value="Verifikasi" class="btn btn-primary"></td>';
                                    }
                                 }  
                                 
                                 if (data.item[i].status_claim == '1') {
                                    status = "<i class='fa fa-check'></i> Disetujui";
                                 } else if (data.item[i].status_claim == '2'){
                                    status = "<i class='fa fa-user-check'></i> Terverifikasi";
                                 } else if (data.item[i].status_claim == '3') {
                                    status = "<i class='fa fa-clock'></i> Verifikasi";
                                 } else {
                                    status = "<i class='fa fa-ban'></i> Ditolak " + data.item[i].keterangan_reject
                                 }
                                 var a = 1 * data.item[i].liter;
                                 var b = 200 * a;
                                 var total = data.item[i].km_akhir - data.item[i].km_awal;
                                 var c = total - b;
                                 if (c < 0){
                                     var hasil = " Perbandingan bensin dengan estimasi jarak terdeteksi tidak wajar, selisih "+ c +" km dengan ketentuan (200 km/l)";
                                     var icon = "fa-exclamation-triangle";
                                 } else {
                                     var hasil = "Sudah sesuai dengan ketentuan (200 km/l)";
                                 }
                                                                    
                                html +=  
                                        '<tr><td>ID Claim</td><td>:</td><td>'+data.item[i].id_claim_bensin+'</td></tr>' +
                                        '<tr><td>NIK</td><td>:</td><td>'+data.item[i].claim_by+'</td></tr>' +
                                        '<tr><td>Nama</td><td>:</td><td>'+data.item[i].nama_lengkap+'</td></tr>' +
                                        '<tr><td>Divisi</td><td>:</td><td>'+data.item[i].divisi+'</td></tr>' +
                                        '<tr><td>Jabatan</td><td>:</td><td>'+data.item[i].jabatan+'</td></tr>' +
                                        '<tr><td>Plat Nomor</td><td>:</td><td>'+data.item[i].no_plat+'</td></tr>' +
                                        '<tr><td>Tgl. Pengisian</td><td>:</td><td>'+data.item[i].tanggal_pengisian+'</td></tr>' +
                                        '<tr><td>Kode SPBU</td><td>:</td><td>'+data.item[i].kode_spbu+'</td></tr>' +
                                        '<tr><td>KM Awal</td><td>:</td><td>'+data.item[i].km_awal+'</td></tr>' +
                                        '<tr><td>KM Akhir</td><td>:</td><td>'+data.item[i].km_akhir+'</td></tr>' +
                                        '<tr><td>Total KM</td><td>:</td><td>'+total+'</td></tr>' +
                                        '<tr><td>Liter</td><td>:</td><td>'+data.item[i].liter+'</td></tr>' +
                                        '<tr><td>Rupiah</td><td>:</td><td>Rp.'+data.item[i].rupiah+'</td></tr>' +
                                        '<tr><td>Status Claim</td><td>:</td><td>'+status+'</td></tr>' +
                                        '<tr><td>Perkiraan Claim (by system)</td><td>:</td><td><i class="fa '+ icon +'"></i>' + hasil +'</td></tr>' +
                                        '<tr><td colspan="3"><img class="img-responsive rounded mx-auto d-block" src="<?= base_url() ?>'+data.item[i].gambar_struk+'"></td></tr>' +
                                        '<tr>' + frmApproveReject + '</tr>';
                                    }
                               $('.tblDetailClaimBensin').html(html);
                           } else {
                           
                           }
                           })
                       });      
                    </script>