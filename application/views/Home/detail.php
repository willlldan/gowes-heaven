<div class="card" style="width: 18rem;">
	<img src="<?=base_url('assets/img/product/') . $product_index['gambar'];?>" class="card-img-top">
	<div class="card-body">
		<h5 class="card-title"><?=$product_index['nama']?></h5>
		<p class="card-text"><?=$product_index['kategori']?></p>
		<p class="card-text"><?=$product_index['deskripsi']?></p>
		<a href="<?=base_url('home/')?>" class="btn btn-primary">Back</a>
	</div>
</div>