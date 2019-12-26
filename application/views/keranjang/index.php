<div class="bg-light y-3 my-3">
  <div class="container">
    <div class="row">
      <div class="col-md-12 mb-0"><hr><hr><hr><hr><a href="<?= base_url();?>/Home" class="text-success">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Keranjang</strong></div>
    </div>
  </div>
</div>
</div>

<!-- Detail Keranjang  -->
<div class="container">
  <div class="row justify-content-between" style="margin-bottom: 100px;">
    <div class="col-12">
     <h2>Daftar Belanja</h2>
     <!-- Buat form dan mengirim semua value ke function "keranjang/ubah_cart". -->
     <form action="<?php echo base_url()?>keranjang/ubah_cart" method="post" name="frmShopping" id="frmShopping" class="form-horizontal" enctype="multipart/form-data">
      <?php
      if ($cart  = $this->cart->contents())
      {
       ?>

       <table class="table">
        <tr id= "main_heading">
          <td width="2%">No</td>
          <td width="10%">Gambar</td>
          <td width="33%">Nama Barang</td>
          <td width="17%">Harga</td>
        </tr>
        <?php
        $grand_total = 0;
        $i = 1;
        foreach ($cart as $item):
          $grand_total = $grand_total + $item['subtotal'];
          ?>
          <input type="hidden" name="cart[<?php echo $item['id'];?>][id]" value="<?php echo $item['id'];?>" />
          <input type="hidden" name="cart[<?php echo $item['id'];?>][rowid]" value="<?php echo $item['rowid'];?>" />
          <input type="hidden" name="cart[<?php echo $item['id'];?>][nama]" value="<?php echo $item['nama'];?>" />
          <input type="hidden" name="cart[<?php echo $item['id'];?>][harga]" value="<?php echo $item['harga'];?>" />
          <input type="hidden" name="cart[<?php echo $item['id'];?>][gambar]" value="<?php echo $item['gambar'];?>" />
          <tr>
            <td><?php echo $i++; ?></td>
            <td><img class="img-fluid" src="<?= base_url() . 'assets/img/model/' . $item['gambar']; ?>"/></td>
            <td><?php echo $item['name']; ?></td>
            <td><?php echo number_format($item['harga'], 0,",","."); ?></td>
            <td>
              <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modalHapus">
                <i class="fas fa-minus-circle"></i></button></td>
              <?php endforeach; ?>
            </tr>
            <tr>
              <td colspan="3"><b>Order Total: Rp <?php echo number_format($grand_total, 0,",","."); ?></b></td>
              <td colspan="4" align="right">
      <!-- <form method="post" action="<?php echo base_url()?>keranjang/hapus/all">
      
      </form> -->
      <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#myModal">Kosongkan Cart</button>
      <button class='btn btn-sm btn-success'  type="submit">Update Cart</button>
      <a href="<?php echo base_url()?>keranjang/check_out"  class ='btn btn-sm btn-primary'>Check Out</a>
    </tr>

  </table>
  <?php
}
else
{
 echo "<h3>Keranjang Belanja masih kosong</h3>";	
}	
?>
</form>
</div>
</div>
<!-- end detail keranjang -->

</div>

<<!-- Modal Penilai -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog modal-md">
    <!-- Modal content-->
    <div class="modal-content">
     <form method="post" action="<?php echo base_url()?>keranjang/hapus_all">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hapus semua isi keranjang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Apa anda yakin ingin menghapus semua isi keranjang ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Tidak</button>
        <button type="submit" class="btn btn-sm btn-default">Ya</button>
      </div>
      
    </form>
  </div>
  
</div>
</div>
<!--End Modal-->

<<!-- Modal Penilai -->
<div class="modal fade" id="modalHapus" role="dialog">
  <div class="modal-dialog modal-md">
    <!-- Modal content-->
    <div class="modal-content">
     <form method="post" action="<?php echo base_url()?>keranjang/hapus/<?php echo $item['rowid'];?>">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hapus Produk ini dari keranjang ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Apa anda yakin ingin menghapus produk ini dari keranjang ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Tidak</button>
        <button type="submit" class="btn btn-sm btn-default">Ya</button>
      </div>
      
    </form>
  </div>
  
</div>
</div>
  <!--End Modal-->