<h1>Buat Kuesioner</h1>
<?php
echo $this->Form->create('Kuesioner');
echo $this->Form->input('nama', array('maxlength' => '50'));
echo $this->Form->input('singkatan', array('maxlength' => '5', 'style' => 'width:100px;'));
echo $this->Form->input('konfigurasi', array('rows' => '3'));
echo $this->Form->input('header', array('rows' => '7'));
echo $this->Form->end('Simpan');
?>