<?php 

  $no=1;
  include"../config/koneksi.php";
  $id=$_GET['id'];
  $query=mysql_query("select * from sales where id_sales='$id'");
  while($data=mysql_fetch_array($query)){  
  ?>
<script src="../ckeditor.js"></script>
<form action="simpaneditsales.php" method="post">
<table width="393" height="137" border="0" align="center">
  <tr>
    <td height="60" colspan="3">
        		<h3>
        	Edit Sales
            	</h3>
    </td>
  </tr>
  <input type="hidden" name="id_sales" value="<?php echo $data['id_sales'] ?>" required />
  <tr>
    <td width="159">Username</td>
    <td width="33">:</td>
    <td width="179">
    	 
    	<input type="text" name="username" value="<?php echo $data['username'] ?>" required /> 
    </td>
  </tr>
  
  <tr>
    <td width="159">Password</td>
    <td width="33">:</td>
    <td width="179">
    	<input type="text" name="password" value="<?php echo $data['password'] ?>" required /> 
    </td>
  </tr>
  
  <tr>
    <td width="159">Nama Sales</td>
    <td width="33">:</td>
    <td width="179">
    	<input type="text" name="nama_sales" value="<?php echo $data['nama_sales'] ?>" required /> 
    </td>
  </tr>
  <tr>
    <td width="159">Alamat</td>
    <td width="33">:</td>
    <td width="179">
    	<textarea name="alamat"><?php echo $data['alamat'] ?></textarea> 
    </td>
  </tr>
  <tr>
    <td width="159">No Tlp</td>
    <td width="33">:</td>
    <td width="179">
    	<input type="text" name="no_tlp" value="<?php echo $data['no_tlp'] ?>" required /> 
    </td>
  <tr>
    <td width="159">Email</td>
    <td width="33">:</td>
    <td width="179">
    	<input type="text" name="email" value="<?php echo $data['email'] ?>" required /> 
    </td>
  </tr>
  <tr>
    <td width="159">Level</td>
    <td width="33">:</td>
    <td width="179">
    	<select name="level" class="form-control combo-detail input-sm" >
                <option value="<?php echo $data['level'] ?>" selected ><?php echo $data['level'] ?></option>
                <option value="Staff">Staff </option>
                <option value="Supervisor">Supervisor </option>
                <option value="Manager">Manager </option>
         </select>
    </td>
  </tr>
  <tr> 
  		<td></td>
        <td></td>
        <td><input type="submit" value="Simpan" /></td>
   </tr>
  </table>
  
  </p>
</form>
<?php $no++;}?>