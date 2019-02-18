 <!-- Data Tables -->
<link href="<?php echo base_url()?>template/AdminLTE/css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
<!-- Theme style -->
<link href="<?php echo base_url()?>template/AdminLTE/css/AdminLTE.css" rel="stylesheet" type="text/css" />
 <!-- general form elements -->
 <div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">Quick Example</h3>
    </div><!-- /.box-header -->
    <!-- form start -->

    <?php
    echo form_open('admin/kategori/post');
    ?>
    <form role="form">
        <div class="box-body">
            <div class="form-group">
                <label>Nama Kategori</label>
                <input type="text" class="form-control" placeholder="Nama Kategori" name="nama">
            </div>
            <div class="form-group">
                <label>Link</label>
                <input type="text" class="form-control" placeholder="Link " name="link">
            </div>

            <div class="form-group">
                <label>Parent</label>
                <select name="parent" class="form-control">
                <option value="0">Parent Menu</option>
                    <?php
                    foreach($parent as $p){
                        echo "<option value='$p->kategori_id'>$p->nama_kategori</option>";  
                    }
                    ?>

                </select>
            </div>
        </div><!-- /.box-body -->

        <div class="box-footer">
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            <?php
            echo anchor('admin/kategori','Kembali',array('class'=>'btn btn-primary'));
            ?>
        </div>
</form>
</div><!-- /.box -->