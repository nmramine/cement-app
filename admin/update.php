<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Modifié</h1>
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
              <form action="function/update_user.php" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label>Nom Complete</label>
                    <input type="text" name="nom" class="form-control" value="<?php echo $res['nom']?>" required>
                  </div>
                  <div class="form-group">
                    <label>Matricule</label>
                    <input type="text" name="mat" class="form-control" value="<?php echo $res['mat']?>" required>
                  </div>
                  <div class="form-group">
                    <label>Mot de pass</label>
                    <input type="text" name="password" class="form-control" value="<?php echo $res['password']?>" required>
                  </div>
                  <div class="form-group">
                    <label>Telephone</label>
                    <input type="text" name="telephone" class="form-control" value="<?php echo $res['telephone']?>" required>
					<input type="hidden" name="id_user" value="<?php echo $res['id_user'];?>" class="form-control">
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