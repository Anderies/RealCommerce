 <!-- Data Tables -->
<link href="<?php echo base_url()?>template/AdminLTE/css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
<!-- Theme style -->
<link href="<?php echo base_url()?>template/AdminLTE/css/AdminLTE.css" rel="stylesheet" type="text/css" />
 <!-- general form elements -->
 <div class="box box-primary">
    <div class="box-header">
      <h3 class="box-title">Detail Member</h3>
    </div><!-- /.box-header -->
       <table class="table table-bordered">
        <tr><td width="200">Nama Lengkap</td><td><?php echo $row['nama_lengkap']?><tr></tr>
        <tr><td>No.HP / Telpon</td><td><?php echo $row['no_hp']?><tr></tr>
        <tr><td>Email</td><td><?php echo $row['email']?><tr></tr>
        <tr><td>Alamat</td><td><?php echo $row['alamat']?><tr></tr>
       </table>
    <div class="box-header">
      <h3 class="box-title">Riwayat Transaksi</h3>
       <table class="table table-bordered">
        <tr><th width="10">No</th><th>No Resi</th><th>Tanggal</th><th>Status</th></tr>
        <?php
        $no=1;
        
            foreach($order as $o){ 
                $status=$o->status==1?'PROSES':'SELESAI';
                echo "<tr><td>$no</td>
                      <td>$o->no_resi</td>
                      <td>$o->tanggal</td>
                      <td>$status</td>
                </tr>";
                $no++;
            }
        ?>
       </table>

 </div><!-- /.box -->