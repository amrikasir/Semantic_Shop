<div class="grid_12 detailPemesanan">
	<p>
		<?php echo $kategori['deskripsi']; ?>
	</p>
</div>

<div class="ui three columns grid">
<?php $base_path = 'images/produk/'; ?>
<?php if($rows !== NULL): ?>
	<?php $i = 1; ?>
	<?php foreach($rows as $row): ?>
			<?php
				//cek file foto
                $possible_extensions = array("jpg", "jpeg", "png");
                foreach ($possible_extensions as $value) {
                    if (is_file($base_path . $row['id'] . '.' . $value)) {
                        $path_file = base_url() . $base_path . $row['id'] . '.' . $value . '?time=' . time();
                        break;
                    } else {
                        $path_file = base_url() . $base_path . 'no_foto.jpg';
                    }
                }
                
                //cek sold out
				if($row['tersedia'] === '0')
				{
					$soldout = ' disabled';
				}
				else
				{
					$soldout = '';
				}
			?>
			<div class="column">
				<a class="ui medium image<?php echo $soldout; ?>" href="<?php echo base_url('index.php/produk/lihat/' . $row['id']); ?>">
                    <div class="ui black ribbon label">
                        <i class="tags icon"></i> Rp. <?php echo number_format($row['harga'], 0, ',', '.'); ?>
                    </div>
                    <img src="<?php echo $path_file; ?>" >
                </a>
			</div>
	<?php endforeach; ?>
<?php endif; ?>
</div>

<div class="grid_12 list_button">
	<div>
	<?php echo $pagelink; ?>
	</div>
</div>