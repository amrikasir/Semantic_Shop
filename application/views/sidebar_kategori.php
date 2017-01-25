<div class="header">Kategori</div>
<div class="menu">
    <?php if($rows !== NULL): ?>
		<?php foreach($rows as $row): ?>
			<a class="item" href="<?php echo base_url('index.php/kategori/lihat/' . $row['id']); ?>">
                <?php echo ucwords($row['nama']); ?>
            </a>
		<?php endforeach; ?>
	<?php endif; ?>
</div>