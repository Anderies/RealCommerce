<div class="col-sm-9">
    <div class="shopper-info">
        <p>Shopper Information</p>
        <?php echo form_open('cart/checkout_guest');?>
            <input type="text" name="nama_lengkap" placeholder="Nama Lengkap" required >
            <input type="email" name="email" placeholder="Email" required>
            <input type="No HP" name="no_hp" placeholder="Nomor HP" required>
            <textarea name="alamat" placeholder="Alamat" value=""></textarea>
        
        <button type="submit" name="submit" class="btn btn-primary" href="">Selesai</button>
        </form>
    </div>
</div>