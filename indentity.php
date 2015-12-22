<div id="subheader">
    <div class="row">
        <div class="twelve columns">
            <p class="text-center">
                Corporate Indentity
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
            $query = mysql_query("select * from corporate");
            while ($data = mysql_fetch_array($query)) {
                ?>

            <table width="1091" height="700" align="center">
                <tr>
                    <td width="645" height="666">
                        &nbsp;

                        <table width="372" height="410" align="left">
                            <tr>
                                <td width="250" height="404">
                                    <img src="/admin/<?php echo $data['nama_file'] ?>" width="350" height="322" align="left" />
                                </td>
                                <td width="32">&nbsp;</td>
                            </tr>
                        </table>&nbsp;
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