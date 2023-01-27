<?php

require_once "app/Mhsw.php";

$mhsw = new Mhsw();
$rows = $mhsw->tampil();

?>

    <table border = "1" cellpadding="10" width= "100%">
        <tr bgcolor = "salmon">
            <td>NO</td>
            <td>NIM</td>
            <td>NAMA</td>
            <td>ALAMAT</td>
        </tr>

        <?php foreach ($rows as $row) { ?>

            <tr>
                <td><?php echo $row['mhsw_id']; ?></td>
                <td><?php echo $row['mhsw_nim']; ?></td>
                <td><?php echo $row['mhsw_nama']; ?></td>
                <td><?php echo $row['mhsw_alamat']; ?></td>
            </tr>

        <?php } ?>
    </table>