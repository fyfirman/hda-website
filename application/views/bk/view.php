<!-- Ini untuk layout BK -->
<br>
<br>
<br>
<br>
<h1><?= $title ?></h1>

<div class="container">
    <!-- Isi webpage tergantung site_url() di file /views/bk/index.php -->
    <!-- line 12, line 15, line 18-->
    <?php foreach ($bk->result() as $item) : ?>
        <?php echo $item->npm ?> 
        <?php echo $item->nama ?>    
        <br>
    <?php endforeach ?>
</div>