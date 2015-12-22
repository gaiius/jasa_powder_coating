<?php

include "../config/koneksi.php";


if (isset($_POST)) {
    $judul = $_POST['judul'];
    $keterangan = $_POST['keterangan'];

    $query = mysql_query("insert into sejarah (judul,keterangan) values ('$judul','$keterangan')")
            or die(mysql_error());
    if ($query) {
        ?>
        <script>document.location = 'admin.php?page=sejarah';</script>
        <?php

    } else {
        echo"gagal";
    }
}
?>