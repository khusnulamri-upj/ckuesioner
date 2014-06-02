<h1 style="font-size:165%;">Master Kuesioner</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Nama</th>
        <th>Singkatan</th>
		<th>Konfigurasi</th>
		<th>Header</th>
    </tr>

    <?php foreach ($kuesioners as $kuesioner): ?>
    <tr>
        <td><?php echo $kuesioner['Kuesioner']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($kuesioner['Kuesioner']['nama'],
array('controller' => 'kuesioners', 'action' => 'view', $kuesioner['Kuesioner']['id'])); ?>
        </td>
        <td><?php echo $kuesioner['Kuesioner']['singkatan']; ?></td>
		<td><?php echo $kuesioner['Kuesioner']['konfigurasi']; ?></td>
		<td><?php echo $this->Text->truncate(h($kuesioner['Kuesioner']['header']),100,array('ellipsis' => '...')); ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($kuesioner); ?>
</table>