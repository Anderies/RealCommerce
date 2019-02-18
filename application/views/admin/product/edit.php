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
                                echo form_open_multipart('admin/product/edit');
                                ?>
                                <input type="hidden" name="id" value="<?php echo $row['product_id'];?>">
                                <form role="form">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label>Nama Product</label>
                                            <input type="text" value="<?php echo $row['nama_product'];?>" class="form-control" placeholder="Nama Product" name="nama_product">
                                        </div>
                                        <div class="form-group">
                                            <label>Harga</label>
                                            <input type="text" value="<?php echo $row['harga'];?>" class="form-control" placeholder="Harga " name="harga">
                                        </div>

                                        <div class="form-group">
                                            <label>Gambar</label>
                                            <input type="file" name="userfile">
                                        </div>

                                        <div class="form-group">
                                            <label>Kategori</label>
                                            <select name="kategori" class="form-control">
                                                <?php
                                                foreach($kategori as $k){
                                                    echo "<option value='$k->kategori_id'";
                                                    echo $k->kategori_id==$row['kategori_id']?'selected':'';
                                                    echo ">$k->nama_kategori</option>";  
                                                }
                                                ?>

                                            </select>
                                        </div>
                                    </div><!-- /.box-body -->

                                    <div class="box-footer">
                                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                        <?php
                                        echo anchor('admin/product','Kembali',array('class'=>'btn btn-primary'));
                                        ?>
                                    </div>
                            </form>
 </div><!-- /.box -->