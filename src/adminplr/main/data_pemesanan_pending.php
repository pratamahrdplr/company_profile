   <div class="row">
		  		<div class="col-md-12 panel-warning">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title ">Data Order Baru</div>
						
		  			</div>
		  			<div class="content-box-large box-with-header">
<a href="?page=data_pemesanan_pending" class="btn btn-warning">Order Baru</a>
<a href="?page=data_pemesanan_setuju" class="btn btn-success">Order di Setujui </a>
<a href="?page=data_pemesanan_gagal" class="btn btn-success">Order di tolak </a>
<a href="?page=data_pemesanan" class="btn btn-success">Data Order Semua</a>

					</div>
		  		</div>
		  	</div>
<div class="content-box-large">
 <?php
$mkrt = $_POST["id_user"];
$tanggal_input_awal = $_POST["tanggal_input_awal"];
$tanggal_input_sampai = $_POST["tanggal_input_sampai"];
    ?>
<form class="form" action="?page=data_pemesanan_pending" enctype="multipart/form-data" method="post">

Pilih Nama Marketing
<select name="id_user" required="required" class="select2_single">
<?php
$ca_user = mysql_query("select * from tb_user where kota = '" . $admin_area . "' AND level_user IN ('marketing', 'broker')")or die(mysql_error());
                while($cari_user = mysql_fetch_array($ca_user)){
				
				
				?>
                <option value="<?php echo $cari_user['id_user']; ?>"><?php echo $cari_user['nama_user']; ?></option>
                <?php
				}
				?>
                
                </select>
                
<input name="filter_tanggal" type="submit" value="Filter"  class="btn btn-success"/>
</form>
    <form class="form" method="post" action="insert_set_pindah.php">
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
    <tr>
    <th>Kode</th>
    <th>Nama Perusahaan</th>

    <th>Kota</th>
      <th>Status</th>
    <th>Sales</th>
    <th>Report</th>
                <th></th>
    </tr>
    </thead>
    <tbody>
    <!-----------------------------------Content------------------------------------>
    <?php
		
    

$kontak_query = mysql_query("select * from tb_kontak_all WHERE id_user = '$mkrt'")or die(mysql_error());


while($row = mysql_fetch_array($kontak_query)){
$user_query = mysql_query("select * from tb_user where id_user = '$row[id_user]' ")or die(mysql_error());
                $row_user = mysql_fetch_array($user_query);
    ?>
    <tr>
    <td><?php echo $row['kode_kontak']; ?></td>
    <td><?php echo $row['nama_kontak']; ?> <br /><?php echo $row['alamat_kontak']; ?></td>
    
    <td><?php echo $row['kota_kontak']; ?></td>
    
    <td><?php 
    if($row['status_kontak']=='telah dihubungi')
    {
    echo '<div class="label label-success"><i class="icon-check"></i><strong>'.$row['status_kontak'].'</strong></div>';
    }
    else if($row['status_kontak']=='belum dihubungi')
    {
    echo '<div class="label label-danger"><i class="icon-ok"></i><strong>'.$row['status_kontak'].'</strong></div>';
    }
    else
    {
    echo '<div class="success"><i class="icon-remove-sign"></i><strong>'.$row['status_kontak'].'</strong></div>';
    };
    
    ?>
    </td>
    <td><?php echo $row_user['nama_user']; ?></td>
    <td><?php echo $row['report_kontak']; ?></td>  
    
    <td class="a-center ">
     <a href="?page=turun_po&id_kontak=<?php echo $row['id_kontak']; ?>" class="btn btn-success">Order</a>
    </td>		
    </tr>
    
    <?php 
    
    }?>  
    </tbody>
    </table>

    </div>
</form>
<form class="form" action="?page=data_pemesanan_pending" enctype="multipart/form-data" method="post">                                          

<div class="modal fade" id="filter" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-lg">
<div class="modal-content">

<div class="modal-header">
<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
</button>
<h4 class="modal-title" id="myModalLabel">Filter Tanggal</h4>
</div>
<div class="modal-body">
<div class="form-group">
<label for="dtp_input1" class="control-label">Tanggal Awal :</label>
<div class="input-group date form_date1 col-md-5" data-date="" data-date-format="dd/mm/yyyy" data-link-field="dtp_input1" data-link-format="yyyy-mm-dd">
<input class="form-control" size="16" type="text" value="" name="tanggal_input_awal" readonly>
<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
</div>
</div>


<div class="form-group">
<label for="dtp_input2" class="control-label">Tanggal Akhir :</label>
<div class="input-group date form_date2 col-md-5" data-date="" data-date-format="dd/mm/yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
<input class="form-control" size="16" type="text" value="" name="tanggal_input_sampai" readonly>
<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
</div>
</div>



</div>e
<div class="modal-footer">
<input name="submit" value="Filter" class="btn btn-success"type="submit" />

<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>

</div>

</div>
</div>
    </form>