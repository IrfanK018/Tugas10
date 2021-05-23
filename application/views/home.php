<ul class="collection">
	<?php foreach ($home_post as $data) :?>
	<li class="collection-item avatar">
		<img src="<?=site_url("upload/post/".$data["filename"]) ?>" class="circle">
		<p class="title"><?= $data["namaProduk"];?></p>
		<small><?= $data["keterangan"];?></small>
		<small><?= $data["harga"];?></small>
		<small><?= $data["jumlah"];?></small>
		<a href="<?=site_url("welcome/index/".$data["id"])?>" class="secondary-content">
			<i class="material-icons">visibility</i>
		</a>
	</li>
<?php endforeach ?>
</ul>
<button class="btn grey darken-3">
        <a href="<?php echo site_url("welcome/deleteALL/"); ?>">DELETE ALL</a>

</button>