  <div class="row">
		  		<div class="col-md-12 panel-warning">
		  			<div class="content-box-header panel-heading">
                        	<div class="panel-title ">Isi Data Pengiriman</div>

                      </div>
                   <div class="content-box-large">
   <?php

	$pen_query = mysql_query("select * from tb_po where id_po = '$_GET[id_kirim]'")or die(mysql_error());
		while($row_pen = mysql_fetch_array($pen_query)){

		
		$pelanggan_query = mysql_query("select * from tb_kontak_all where id_kontak = '$row_pen[id_kontak]'")or die(mysql_error());
		while($row_pel = mysql_fetch_array($pelanggan_query)){
		
	$oat = mysql_query("select id_oat, harga_oat from tb_oat where id_oat = '$row_pen[id_oat]'")or die(mysql_error());
	$row_oat = mysql_fetch_array($oat);
		?>
<form action="simpan_kirim.php" target="_blank" enctype="multipart/form-data" method="post"" >
  <input name="id_pen" type="hidden" value="<?php echo $row_pen['id_po']; ?>" />
  <input name="id_user" type="hidden" value="<?php echo $row_pel['id_user']; ?>" />
  <input name="id_pel" type="hidden" value="<?php echo $row_pel['id_kontak']; ?>" />
  <input name="oat" type="hidden" value="<?php echo $row_oat['harga_oat']; ?>" />
  <input name="status" type="hidden" value="pending" />
                    <!-- text input -->
                    
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%"  >
   <tr>
    <td>Nama Pelanggan</td>
    <td colspan="3"><input type="text" name="nama" class="form-control" value="<?php echo $row_pel['nama_kontak']; ?>"required /></td>
     </tr>
     
      <tr>
     <td>Alamat Kirim</td>
    <td colspan="3"><input type="text" name="alamat_kirim" class="form-control" value="<?php echo $row_pen['alamat_kirim']; ?>"required /> </td>
  </tr>
   <tr>
     <td>Volume</td>
    <td colspan="3"><input type="text" name="vol" class="form-control" value="<?php echo $row_pen['vol_po']; ?>" disabled/> </td>
  </tr>
   <tr>
<td  rowspan="2" >Segel Atas</td>
<td  ><input type="text" name="segel_atas1" class="form-control" placeholder="Segel Atas Pertama Wajib di isi" required/></td>
 <td ><input type="text" name="segel_atas2" class="form-control" placeholder="Segel Atas Kedua"/></td>
  </tr>
    <tr>
   
    <td ><input type="text" name="segel_atas3" class="form-control" placeholder="Segel Atas Ketiga"/></td>
    <td ><input type="text" name="segel_atas4" class="form-control" placeholder="Segel Atas Kempat"/></td>
  </tr>
  
   <tr>
<td>Segel Bawah</td>
<td colspan="1" ><input type="text" name="segel_bawah1" class="form-control" placeholder="Segel Bawah Pertama Wajib di isi" required/></td>
    <td colspan="2" ><input type="text" name="segel_bawah2" class="form-control" placeholder="Segel Bawah Kedua" /></td>
  </tr>
  
 
    <tr>
       <td>No Pol Mobil :</td>
    <td colspan="3"> 
    
 <select name="mobil" class="select2_single form-control" tabindex="-1">
    
    <?php
    $mobil = mysql_query("select * from tb_mobil")or die(mysql_error());
		while($row_mobil = mysql_fetch_array($mobil)){
    ?>
    <option value="<?php echo $row_mobil['id_mobil']; ?>" class=""><?php echo $row_mobil['nopol']; ?> / <?php echo $row_mobil['ukuran_mobil']; ?></option>
    <?php
    }	
	
	
	?>
    </select>
    
    
    </td>
  </tr>
    
    <tr>
    <td>Sopir</td>
    <td colspan="3">    
    <select name="sopir" class="select2_single form-control" tabindex="-1">
    
    <?php
    $sopir = mysql_query("select * from tb_supir")or die(mysql_error());
		while($row_sopir = mysql_fetch_array($sopir)){
    ?>
    <option value="<?php echo $row_sopir['id_supir']; ?>" class=""><?php echo $row_sopir['nama_supir']; ?></option>
    <?php
    }	
	
	
	?>
    </select>    </td>
    </tr>
    <tr>
    <td>Kernet </td>
     <td colspan="3">
       <select name="kernet" class="form-control">
           <option>-</option>
    <?php
    $kernet = mysql_query("select * from tb_kernet")or die(mysql_error());
		while($row_kernet = mysql_fetch_array($kernet)){
    ?>
    <option value="<?php echo $row_kernet['id_kernet']; ?>" class=""><?php echo $row_kernet['nama_kernet']; ?></option>
    <?php
    }	
	
	
	?>
    </select>     </td>
  </tr>
  
  <tr>
    <td>Keterangan</td>
    <td  colspan="2"><textarea name="kelengkapan" class="form-control"  cols="" rows=""><?php echo $row_pel['kelengkapan_po']; ?></textarea> </td>
    </tr>
    <tr>
    
      <td colspan="3" align="right">
                    <button type="submit" class="btn btn-success btn-lg fa fa-print">Cetak DO</button>                  

   </td>
  </tr>
</table>

            

                  </form>
                  
                   <?php
				   
				  }
				  }
				  ?>
				 </div>
                
          </div>
          </div>