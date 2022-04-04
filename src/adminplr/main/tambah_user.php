<div class="row">
  <div class="col-md-12 panel-warning">
    <div class="content-box-header panel-heading">
      <div class="panel-title ">Tambah User</div>
    </div>
    <div class="content-box-large box-with-header">
      <a href="?page=data_user" class="btn btn-success">Data User</a>
    </div>

  </div>

</div>


<div class="content-box-large">
  <br />
  <?php
  // iki tambahan'e bro!
  $id_admin = $_SESSION['admin'];
  switch ($id_admin) {
    case '2':
      $queryx = 'SURABAYA';

      break;
    case '3':
      $queryx = 'PROBOLINGGO';

      break;
    case '4':
      $queryx = 'SEMARANG';

      break;
    case '5':
      $queryx = 'JUWANA';

      break;
    case '6':
      $queryx = 'CIREBON';

      break;
    default:
      $queryx = 'PLR';

      break;
  }
  // iki akhire

  ?>
    <form class="form-horizontal input_mask" action="insert_user.php" method="post" enctype="multipart/form-data">

      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Username
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" required="required" class="form-control col-md-7 col-xs-12" name="username" id="1" placeholder="username" />
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Password
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="password" required="required" class="form-control col-md-7 col-xs-12" name="pass" id="2" placeholder="password" />
        </div>
      </div>




      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" required="required" class="form-control col-md-7 col-xs-12" name="nama" id="4" placeholder="Nama" />
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Market Area
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" class="form-control" name="kota_user" value=<?php echo $queryx ?> readonly="readonly" />
        </div>
      </div>



      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Phone
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" required="required" class="form-control col-md-7 col-xs-12" name="hp" id="6" placeholder="Phone" data-inputmask="'mask': '(9999)99-999-999'" />
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Aktif
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="checkbox" required="required" name="aktif" id="7" placeholder="Aktif" readonly="readonly" onclick="return false;" />
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Level
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">

          <label>
            <input type="radio" name="level" class="flat" value="broker" id="status_pel_1" checked="" />
            Broker</label>
          <label>
            <input type="radio" name="level" class="flat" value="marketing" id="status_pel_2" checked="checked" />
            Marketing</label>


        </div>
      </div>


      <div class="ln_solid"></div>
      <div class="form-group">
        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
          <button type="reset" class="btn btn-primary">Cancel</button>
          <button type="submit" class="btn btn-success">Submit</button>
        </div>
      </div>

    </form>
</div>
</div>
</div>