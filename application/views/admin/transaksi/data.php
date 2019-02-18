<!-- Data Tables -->
<link href="<?php echo base_url()?>template/AdminLTE/css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
<!-- Theme style -->
<link href="<?php echo base_url()?>template/AdminLTE/css/AdminLTE.css" rel="stylesheet" type="text/css" />
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Data Transaksi</h3>
    </div><!-- /.box-header -->                              
        <div class="box-body table-responsive">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                        <th>No</th>
                        <th>Nama Pemesan</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                        <th>No Resi</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no=1;
                    foreach ($record as $r){
                        $status=$r->status==1?'Proses':'Selesai';
                        echo "<tr>
                                <td width='10'>$no</td>
                                <td>$r->nama_lengkap</td>
                                <td>$r->tanggal</td>
                                <td>$status</td>
                                <td>$r->no_resi</td>
                                <td width='10'>".anchor("admin/transaksi/detail/".$r->transaksi_id,"<span class='glyphicon glyphicon-tags' aria-hidden='true'></span>",array('title'=>'edit data'))."</td>
                                <td width='10'>".anchor("admin/transaksi/delete/".$r->transaksi_id,"<span class='glyphicon glyphicon-trash' aria-hidden='true'></span>",array('title'=>'delete data'))."</td>
                            </tr>";
                        $no++;
                    }
                    ?>
            </table>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
                            
<script src="<?php echo base_url()?>/template/AdminLTE/js/jquery.min.js"></script>
<script src="<?php echo base_url()?>/template/AdminLTE/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>/template/AdminLTE/js/jquery-ui.min.js" type="text/javascript"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url()?>/template/AdminLTE/js/raphael-min.js"></script>    
<!-- DATA TABES SCRIPT -->
<script src="<?php echo base_url()?>template/AdminLTE/js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>template/AdminLTE/js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>template/AdminLTE/js/AdminLTE/app.js" type="text/javascript"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url()?>template/AdminLTE/js/AdminLTE/demo.js" type="text/javascript"></script>
<!-- page script -->
<script type="text/javascript">
    $(function() {
        $("#example1").dataTable();
        $('#example2').dataTable({
            "bPaginate": true,
            "bLengthChange": false,
            "bFilter": false,
            "bSort": true,
            "bInfo": true,
            "bAutoWidth": false
        });
    });
</script>