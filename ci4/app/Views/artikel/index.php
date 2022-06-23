<?= $this->include('template/header'); ?>

<?php if($artikel): foreach($artikel as $row): ?>
    <div id="container">
        <article class="entry">
            <h2><a href="<?= base_url('/artikel/' . $row['slug']);?>"><?=$row['judul']; ?></a></h2>
            <img src="<?= base_url('/gambar/' . $row['gambar']);?>" alt="<?=$row['judul']; ?>">
            <p><?= substr($row['isi'], 0, 200); ?></p>
        </article>
        <hr class="divider"><?= $this->include('template/widget');?> 
        <?php endforeach; 
    else: ?>
        <article class="entry">
            <h2>Belum ada data.</h2>
        </article>
    </div>
<?php endif; ?>
<?= $this->include('template/footer'); ?>
