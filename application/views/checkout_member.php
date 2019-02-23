<div class="col-sm-9">
    <div class="shopper-info">
        <p>Shopper Information</p>
        <?php echo form_open('cart/checkout');?>
            <input type="text" name="nama_lengkap" placeholder="Nama Lengkap" value="<?php echo $member['nama_lengkap']?>">
            <input type="email" name="email" placeholder="Email" value="<?php echo $member['email']?>">
            <input type="No HP" name="no_hp" placeholder="Nomor HP" value="<?php echo $member['no_hp']?>">
            <textarea name="alamat" placeholder="Alamat" value=""><?php echo $member['alamat']?></textarea>
        
        <button type="submit" name="submit" class="btn btn-primary" href="">Selesai</button>
        </form>
    </div>
</div>