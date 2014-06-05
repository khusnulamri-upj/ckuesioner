<div style="background-color:#DDD;padding:10px 10px 10px 10px;margin-bottom:20px;">
<span><?php echo $this->Html->link('<< Kembali',array('controller' => 'kuesioners', 'action' => 'index',),array('style' => 'text-decoration:none;color:#333;display:block;')); ?></span>
</div>
    
<h1 style="font-size:165%;"><?php echo h($kuesioner['Kuesioner']['nama']); ?></h1>

<?php
if ((isset($kuesioner['Kuesioner']['modified'])) && (strlen($kuesioner['Kuesioner']['modified']) > 0)) {
	$tmp_modified = $kuesioner['Kuesioner']['modified'];
} else {
	$tmp_modified = $kuesioner['Kuesioner']['created'];
}
?>

<p><small><span style="display:inline-block;width:100px;">Terakhir Diubah</span>: <?php echo $tmp_modified; ?></small></p>

<p><h1><span style="display:inline-block;width:100px;">Singkatan</span>:</h1><span style="display:block;"><?php echo h($kuesioner['Kuesioner']['singkatan']); ?></span></p>

<p><h1><span style="display:inline-block;width:100px;">Konfigurasi</span>:</h1><span style="display:block;"><?php echo h($kuesioner['Kuesioner']['konfigurasi']); ?></span></p>

<p><h1><span style="display:inline-block;width:100px;">Header</span>:</h1><span style="display:block;border:1px solid #DDD;"><?php echo $kuesioner['Kuesioner']['header']; ?></span></p>