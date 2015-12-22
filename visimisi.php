<div id="subheader">
    <div class="row">
        <div class="twelve columns">
            <p class="text-center">
                Vision & Mision
            </p>
        </div>
    </div>
</div>
<br/><br/><br/>

<div class="row">
    <div class="twelve columns">
        <p class="text-center">
            <?php
            include "config/koneksi.php";
            $query = mysql_query("select * from visi_misi");
            while ($data = mysql_fetch_array($query)) {
                ?>

            <table width="1091" height="350" align="center">
                <tr>
                    <td width="645">
                        &nbsp;

                        <table align="left">
                            <tr>
                                <td width="250">
                                    <img src="/admin/<?php echo $data['nama_file'] ?>" width="300" height="300" align="left" />
                                </td>
                                <td width="32">&nbsp;</td>
                            </tr>
                        </table>
                        <?php echo $data['keterangan'] ?>
                    <?php } ?>
                </td>
            </tr>
        </table>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
    </div></div>
</p>
</div>
</div>


<script src="javascripts/foundation.min.js"></script>