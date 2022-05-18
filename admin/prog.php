<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Programation de Commande</h1>
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
              <form action="function/add_prog_cmnd.php" method="post">
                <div class="card-body">
				<div class="row">
                    <div class="col-sm-6">
                  <div class="form-group">
                    <label>Quantité</label>
                    <input type="text" name="qty" class="form-control" required>
                  </div>
					</div>
				<div class="col-sm-6">
                  <div class="form-group">
                    <label>Date</label>
                    <input type="text" name="date" class="form-control" placeholder="Année-mois-jour" required>
                  </div>
				  </div>
				  </div>
				  <div class="row">
                    <div class="col-sm-6">
                  <div class="form-group">
                    <label>Quantité</label>
                    <input type="text" name="qty1" class="form-control">
                  </div>
					</div>
				<div class="col-sm-6">
                  <div class="form-group">
                    <label>Date</label>
                    <input type="text" name="date1" class="form-control">
                  </div>
				  </div>
				  </div>
				  <div class="row">
                    <div class="col-sm-6">
                  <div class="form-group">
                    <label>Quantité</label>
                    <input type="text" name="qty2" class="form-control">
                  </div>
					</div>
				<div class="col-sm-6">
                  <div class="form-group">
                    <label>Date</label>
                    <input type="text" name="date2" class="form-control">
                  </div>
				  </div>
				  </div>
				  <div class="row">
                    <div class="col-sm-6">
                  <div class="form-group">
                    <label>Quantité</label>
                    <input type="text" name="qty3" class="form-control">
                  </div>
					</div>
				<div class="col-sm-6">
                  <div class="form-group">
                    <label>Date</label>
                    <input type="text" name="date3" class="form-control">
					<input type="hidden" name="id_cmnd" value="<?php echo $_GET['id']?>" class="form-control">
                  </div>
				  </div>
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