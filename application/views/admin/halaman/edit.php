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
                                echo form_open('admin/halaman/edit');
                                ?>
                                <input type="hidden" name="id" value="<?php echo $row['pages_id'];?>">
                                <form role="form">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label>Judul</label>
                                            <input type="text" class="form-control"  value="<?php echo $row['judul'];?>"placeholder="Judul" name="judul">
                                        </div>
                                        <div class="form-group">
                                            <label>Konten</label>
                                            <textarea id="editor1" name="content"><?php echo $row['content'];?></textarea>

                                        </div>

                                    </div><!-- /.box-body -->

                                    <div class="box-footer">
                                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                        <?php
                                        echo anchor('admin/halaman','Kembali',array('class'=>'btn btn-primary'));
                                        ?>
                                    </div>
                            </form>
 </div><!-- /.box -->
 <script src="<?php echo base_url()?>/template/AdminLTE/js/ckeditor.js"></script>
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>