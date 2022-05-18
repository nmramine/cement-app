<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Commandes en attente</h1>
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

              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Client</th>
                      <th>Type</th>
                      <th>Quantité</th>
					  <th>Date Commande</th>
					  <th>Action</th>
					</tr>
                  </thead>
                  <tbody>
<?php
if (isset($res)){
        foreach ($res as $cmnd)  {
	?>
                    <tr>
                      <td><?php echo $cmnd['nom']?></td>
                      <td><?php echo $cmnd['type']?></td>
                      <td><?php echo $cmnd['qty']?></td>
					  <td><?php echo $cmnd['date_cmnd']?></td>
					  <td><a class="btn btn-success" href="index.php?page=3&id=<?php echo $cmnd['id_cmnd']?>">Confirmé & Programmé</a>  <a class="btn btn-danger" href="index.php?page=4&id=<?php echo $cmnd['id_cmnd']?>">Refusé</a></td>
					</tr>
<?php }} ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>