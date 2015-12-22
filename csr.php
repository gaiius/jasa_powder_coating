<style>
    #berita {
        font-size:15px;
    }
    table {
        margin-left:20px;
    }
    table img {
        padding:10px; border-radius:20px;
        -moz-box-shadow: -5px -5px 5px 0px #888;
        -webkit-box-shadow: -5px -5px 5px 0px #888;
        box-shadow: -5px -5px 10px 0px #888;
    }
    table #qq {
        padding:25px;   background-color:#FFF;   border-radius:20px;
        -moz-box-shadow: -5px -5px 5px 0px #888;
        -webkit-box-shadow: -5px -5px 5px 0px #888;
        box-shadow: -5px -5px 0px 2px #888;
    }
</style>


<link href="assets/css/dataTables.css" rel="stylesheet">
<script src="media/js/jquery.js" type="text/javascript" language="javascript"></script>
<script type="text/javascript" language="javascript" src="media/js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf-8">
    $(document).ready(function () {
        $('#dt-example').dataTable({
            "sPaginationType": "full_numbers",
            "sDom": 'T<"clear">lfrtip',
            "oTableTools": {
                "sSwfPath": "/release-datatables/extras/TableTools/media/swf/copy_csv_xls_pdf.swf"
            }
        });
    });
</script>

<div id="subheader">
    <div class="row">
        <div class="twelve columns">
            <p class="text-center">
                Update CSR
            </p>
        </div>
    </div>
</div>
<div class="row">
    <div class="twelve columns">
        <p class="text-center">
            <br/>
        <h4>
            News
         </h4>
            
            <select name="tahun" method="post" id="tahun" onchange="window.open(this.options[this.selectedIndex].value, '_self')">
                    <option>Select Years</option>
                    <option value="index.php?page=csr&id=1">ALL</option>
                    <?php
                    include "config/koneksi.php";
                    $tahun = mysql_query("select * from csr order by tahun");
                    while ($h = mysql_fetch_array($tahun)) {
                        ?>
                        <option value="?page=csr&id=<?php echo $h['tahun']; ?>" ><?php echo $h['tahun']; ?></option>
                    <?php } ?>

                </select>
        
        <hr/>
        <br/>

        </div>
        <h2>
            
 


            </h2>
            <br/>

            <?php
            if (isset($_GET['id'])) {
                $id = $_GET['id'];

                if ($id == 1) {
                    ?>


                    <table id="dt-example" cellpadding="0" cellspacing="0" border="0" class="table-dt table-striped-dt table-bordered-dt dataTable">
                        <thead>
                            <tr>
                                <th width="4%">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td align="center">


                                    <?php
                                    include "config/koneksi.php";
                                    $query = mysql_query("select * from csr");
                                    while ($data = mysql_fetch_array($query)) {
                                        ?>


                                        <table width="798" height="100" border="0" align="left">
                                            <tr>
                                                <td width="200" height="38">&nbsp;<center><?php echo $data['judul_gambar']; ?></center></td>
                                    <td width="45" rowspan="3">&nbsp;</td>
                                    <td width="952">&nbsp;<b><?php echo $data['judul']; ?></b></td>
                                </tr>
                                <tr>
                                    <td rowspan="2">
                                        <img src="/admin/<?php echo $data['nama_file'] ?>" width="129" height="132" align="right" />
                                    </td>
                                    <td>
                                        <font size="2">Update : <?php echo $data['tanggal_berita']; ?></font>
                                        <hr/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    &nbsp;<div id="berita">
                                    <?php
									$id_berita=$data['id_berita'];
									$keterangan=$data['keterangan'];
									echo strlen($keterangan) >= 250 ? 
									substr($keterangan, 0, 225) . ' ... <br/><br/><a href="?page=detailcsr&id='.$id_berita.'">
									<input type="button" class="accordion" value="[Read more]" /></a>' : 
									$keterangan;
									?>
        	
                                     </div>
                                    </td>
                                </tr>
                        </table>

                        <p>
                        <?php } ?>
                    </p>


                    <?php
                }
            }
            if (isset($_GET['id'])) {

                $id = (int) $_GET['id'];
                $querys = mysql_query("select * from csr where tahun='" . mysql_real_escape_string($id) . "'");
                $datas = mysql_num_rows($querys);

                if ($datas == 1) {

                }
                ?>

<table id="dt-example" cellpadding="0" cellspacing="0" border="0" class="table-dt table-striped-dt table-bordered-dt dataTable">
                        <thead>
                            <tr>
                                <th width="4%">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td align="center">


                <?php
                include "config/koneksi.php";

                $query = mysql_query("select * from csr where tahun='" . mysql_real_escape_string($id) . "'");
                while ($data = mysql_fetch_array($query)) {
                    ?>

                    <table width="798" height="100" border="0" align="left">
                        <tr>
                            <td width="200" height="38">&nbsp;<center><?php echo $data['judul_gambar']; ?></center></td>
                        <td width="45" rowspan="3">&nbsp;</td>
                        <td width="952">&nbsp;<b><?php echo $data['judul']; ?></b></td>
                        </tr>
                        <tr>
                            <td rowspan="2">
                                <img src="/admin/<?php echo $data['nama_file'] ?>" width="129" height="132" align="right" />
                            </td>
                            <td>
                                <font size="2">Update : <?php echo $data['tanggal_berita']; ?></font>
                                <hr/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                &nbsp;<div id="berita">
                                    <?php
                                    $id_berita = $data['id_berita'];
                                    $keterangan = $data['keterangan'];
                                    echo strlen($keterangan) >= 150 ?
                                    substr($keterangan, 0, 140) . ' ... <br/><br/><a href="?page=detailcsr&id=' . $id_berita . '">
									<input type="button" class="btn btn-navbar" value="[Read more]" /></a>' :
                                            $keterangan;
                                    ?>
                                </div>
                            </td>
                        </tr>
                    </table>
                    <p>
                    <?php } ?>
                </p>


       
        
            <p>&nbsp;</p>
            <p>&nbsp; </p>
        </div></div></div>
         <?php } ?>

</tr>
</tbody>
</table>

</p>
</div>
</div>

</tr>
</tbody>
</table>

</p>
</div>
</div>

<script src="javascripts/foundation.min.js"></script>