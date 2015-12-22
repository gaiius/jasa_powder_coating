<form action="simpan_sales.php" method="post">
<table width="393" height="359" border="0" align="center">
  <tr>
    <td colspan="3">
    	<center>
        		<h3>
        	Input Sales
            	</h3>
        		<p>&nbsp;</p>
        </center>
    </td>
  </tr>
  <tr>
    <td width="159">Nama Sales</td>
    <td width="33">:</td>
    <td width="179">
    	<input type="text" name="nama_sales" />
        <h5><div id="disp"></div></h5>
    </td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td>:</td>
    <td>
    	<textarea name="alamat" required ></textarea>
    </td>
  </tr>
  <tr>
    <td>No. Tlp</td>
    <td>:</td>
    <td>
    	<input type="text" name="no_tlp"/>
    </td>
  </tr>
  <tr>
    <td>Email</td>
    <td>:</td>
    <td>
    	<input type="text" name="email"/>
    </td>
  </tr>
  <tr>
    <td colspan="3">
    	<input type="submit" value="Simpan" />
    </td>
  </tr>
</table>
</form>