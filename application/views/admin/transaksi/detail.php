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
  <div class="box box-primary">
    <div class="box-header">
      <h3 class="box-title">Informasi Transaksi</h3>
      <?php
      echo form_open('admin/transaksi/detail');
      ?>
      <input type="hidden" name="id" value="<?php echo  $pesanan['transaksi_id'];?>">
    </div><!-- /.box-header -->
    <table class="table table-bordered">
            <tr><td width="200">Tanggal Order</td><td><?php echo $pesanan['tanggal'] ?></td></tr>
            <tr><td>Status Order</td><td>
                    <?php
                    $status=array(1=>'Proses',2=>'Sudah Dikirim');
                    echo form_dropdown('status',$status,$pesanan['status'],"class='form-control'");
                    ?>
                </td></tr>
            <tr><td>No Resi</td><td><input type="text" name="resi" value="<?php echo $pesanan['no_resi'] ?>" class="form-control"></td></tr>
            <tr><td colspan="2"><button type="submit" name="submit" class="btn btn-danger btn-sm">Simpan Perubahan</button></td></tr>
        </table>
        </form>

    <div class="box-header">

      <h3 class="box-title">Riwayat Transaksi</h3>
      <table class="table table-bordered">
            <tr><th width="10">No</th><th>Nama Product</th><th>Jumlah</th><th>Harga</th><th>Total</th></tr>
            <?php
            $no = 1;
            $total = 0;
            foreach ($order as $o) {
                echo "<tr>
                <td>$no</td>
                <td>$o->nama_product</td>
                <td>$o->qty</td>
                <td>$o->harga</td>
                <td>" . $o->harga * $o->qty . "</td>
                <tr>";
                $total = $total + ($o->harga * $o->qty);
                $no++;
            }
            ?>
            <tr><td colspan="3"></td><td>Total</td><td><?php echo $total; ?></td></tr>
        </table>
 </div><!-- /.box -->