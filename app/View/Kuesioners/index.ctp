<div style="background-color:#DDD;padding:10px 10px 10px 10px;margin-bottom:20px;">
<span><?php echo $this->Html->link('++ Buat Kuesioner',array('controller' => 'kuesioners', 'action' => 'add',),array('style' => 'text-decoration:none;color:#333;display:block;')); ?></span>
</div>

<h1 style="font-size:165%;">Master Kuesioner</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Aksi</th>
        <th>Nama</th>
        <th>Singkatan</th>
	<th>Konfigurasi</th>
	<th>Header</th>
    </tr>
    
    <?php foreach ($kuesioners as $kuesioner): ?>
    <tr>
        <td><?php echo $kuesioner['Kuesioner']['id']; ?></td>
        <td>
            <?php
                echo $this->Html->link(
                    'Ubah',
                    array('action' => 'edit', $kuesioner['Kuesioner']['id']),
                    array('style' => 'text-decoration:none;')
                );
            ?>
            |
            <?php
                echo $this->Form->postLink(
                    'Hapus',
                    array('action' => 'delete', $kuesioner['Kuesioner']['id']),
                    array('confirm' => 'Anda yakin ingin menghapus kuesioner '.$kuesioner['Kuesioner']['id'].'?', 'style' => 'text-decoration:none;')
                );
            ?>
        </td>
        <td>
            <?php echo $this->Html->link($kuesioner['Kuesioner']['nama'],
                    array('controller' => 'kuesioners', 'action' => 'view', $kuesioner['Kuesioner']['id']),
                    array('style' => 'text-decoration:none;')); ?>
        </td>
        <td><?php echo $kuesioner['Kuesioner']['singkatan']; ?></td>
	<td><?php echo $kuesioner['Kuesioner']['konfigurasi']; ?></td>
	<td><?php echo $this->Text->truncate(h($kuesioner['Kuesioner']['header']),100,array('ellipsis' => '...')); ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($kuesioner); ?>
</table>