<div class="header">Member</div>
<div class="menu">
    <?php if ($level >= '255') : ?>
        <a class="item" href="<?php echo base_url('index.php/administrator/dashboard'); ?>">Admin</a>
    <?php else: ?>
        <a class="item" href="<?php echo base_url('index.php/keranjang'); ?>">Keranjang</a>
        <a class="item" href="<?php echo base_url('index.php/pemesanan'); ?>">Pemesanan</a>
    <?php endif; ?>
    <a class="item" href="<?php echo base_url('index.php/member/pengaturan'); ?>">Pengaturan</a>
    <a class="item" href="<?php echo base_url('index.php/member/logout'); ?>">Logout</a>
</div>
