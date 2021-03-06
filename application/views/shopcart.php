<div class="col-sm-9 padding-right">
<section id="cart_items">
			<div class="table-responsive cart_info">
				<?php
				echo form_open('cart/update_stock');
				?>
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						<?php
						$total = 0;
						if($item->num_rows()==0){
							echo "<tr><td>KERANJANG BELANJA ANDA MASIH KOSONG</td></tr>";
						}else{
						foreach($item->result() as $i){
						?>

						<tr>
							<td class="cart_product" width="200">
								<a href=""><img src="<?php echo base_url()?>gambar_product/<?php echo $i->gambar?>" alt="" width="130" height="130"></a>
							</td>
							<td class="cart_description">
								<h4><a href=""><?php echo $i->nama_product;?></a></h4>
								<p>Web ID: 1089772</p>
							</td>
							<td class="cart_price">
								<p>Rp.
									<?php $subtotal=$i->harga * $i->qty;
									echo $subtotal;
									$total= $total+$subtotal; 
									?>
								</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input type="hidden" name="id<?php echo $i->detail_id?>" value="<?php echo $i->detail_id?>">
									<input class="cart_quantity_input" type="text" name="quantity<?php echo $i->detail_id?>" value="<?php echo $i->qty?>" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price"><?php echo $i->harga*$i->qty?></p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="<?php echo base_url().'cart/hapus_item/'.$i->detail_id?>"><i class="fa fa-times"></i></a>
							</td>
						</tr>
							<?php
						}}
						?>

					</tbody>
				</table>
			</div>
			<div class="col-sm-6">
					<div class="total_area">
            <ul>
                <li>Total <span>Rp <?php echo $total;?></span></li>
            </ul>
				<?php
				echo anchor('cart/checkout','Check Out',array('class'=>'btn btn-default check_out'));?>
				<button type="submit" class="btn btn-default check_out">Update</button>
        </div>
	</div>
		</div>
					</form>
	</section> <!--/#cart_items-->

	<!-- <section id="do_action">
		<div class="container">
			<div class="heading">
				<h3>What would you like to do next?</h3>
				<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="chose_area">
						<ul class="user_option">
							<li>
								<input type="checkbox">
								<label>Use Coupon Code</label>
							</li>
							<li>
								<input type="checkbox">
								<label>Use Gift Voucher</label>
							</li>
							<li>
								<input type="checkbox">
								<label>Estimate Shipping & Taxes</label>
							</li>
						</ul>
						<ul class="user_info">
							<li class="single_field">
								<label>Country:</label>
								<select>
									<option>United States</option>
									<option>Bangladesh</option>
									<option>UK</option>
									<option>India</option>
									<option>Pakistan</option>
									<option>Ucrane</option>
									<option>Canada</option>
									<option>Dubai</option>
								</select>
								
							</li>
							<li class="single_field">
								<label>Region / State:</label>
								<select>
									<option>Select</option>
									<option>Dhaka</option>
									<option>London</option>
									<option>Dillih</option>
									<option>Lahore</option>
									<option>Alaska</option>
									<option>Canada</option>
									<option>Dubai</option>
								</select>
							
							</li>
							<li class="single_field zip-field">
								<label>Zip Code:</label>
								<input type="text">
							</li>
						</ul>
						<a class="btn btn-default update" href="">Get Quotes</a>
						<a class="btn btn-default check_out" href="">Continue</a>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li>Cart Sub Total <span>$59</span></li>
							<li>Eco Tax <span>$2</span></li>
							<li>Shipping Cost <span>Free</span></li>
							<li>Total <span>$61</span></li>
						</ul>
							<a class="btn btn-default update" href="">Update</a>
							<a class="btn btn-default check_out" href="">Check Out</a>
					</div>
				</div>
			</div>
		</div>
	</section>/#do_action -->