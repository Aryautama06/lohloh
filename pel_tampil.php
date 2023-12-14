<?php

$pel = new App\Pelanggan;
$rows = $pel->tampil();

?>

<h2>Pelanggan</h2>

<a href="index.php?hal=pel_input" class="btn">Add Pelanggan</a>

<table>
    <tr>
        <th>NO</th>
        <th>NAMA</th>
        <th>ALAMAT</th>
        <th>HP</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['pel_id']; ?></td>
        <td><?php echo $row['pel_nama']; ?></td>
        <td><?php echo $row['pel_alamat']; ?></td>
        <td><?php echo $row['pel_hp']; ?></td>
        <td><a href="index.php?hal=pel_edit&id=<?php echo $row['pel_id']; ?>" class="btn">Edit</a></td>
        <td><a href="index.php?hal=pel_delete&id=<?php echo $row['pel_id']; ?>" class="btn" onclick="return confirm('Apakah anda yakin?')">Delete</a></td>
    </tr>
    <?php } ?>
</table>
