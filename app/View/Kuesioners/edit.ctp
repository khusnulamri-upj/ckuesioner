<div style="background-color:#DDD;padding:10px 10px 10px 10px;margin-bottom:20px;">
    <span><?php echo $this->Html->link('<< Kembali',array('controller' => 'kuesioners', 'action' => 'index',),array('style' => 'text-decoration:none;color:#333;display:block;')); ?></span>
</div>

<h1 style="font-size:165%;">Ubah Kuesioner</h1>
<?php
echo $this->Form->create('Kuesioner');
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->input('nama', array('maxlength' => '50'));
echo $this->Form->input('singkatan', array('maxlength' => '5', 'style' => 'width:100px;'));
echo $this->Form->input('konfigurasi', array('rows' => '3'));
echo $this->Form->input('header', array('rows' => '7'));
echo $this->Form->end('Simpan');

/*  AMRNOTE
 *  1. singkatan apakah berupa combo box atau bukan (karena untuk flag)
 */
?>

