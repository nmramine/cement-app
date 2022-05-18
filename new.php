<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Ajouté</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
<!-- general form elements -->
            <div class="card card-primary">

              <!-- /.card-header -->
              <!-- form start -->
              <form action="function/add.php" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label>Type</label>
                    <select name="type" class="form-control">
                          <option value="CPJ SAC">CPJ SAC</option>
                          <option value="CPJ VRAC">CPJ VRAC</option>
                          <option value="CRS SAC">CRS SAC</option>
                          <option value="CRS VRAC">CRS VRAC</option>
                        </select>
                  </div>
                  <div class="form-group">
                    <label>Quantité</label>
                    <input type="text" name="qty" class="form-control" required>
					<input type="hidden" name="id" value="<?php echo $profile['id_user'];?>" class="form-control">
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button name="submit" type="submit" class="btn btn-primary">Envoyer</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>