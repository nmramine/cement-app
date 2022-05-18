<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>List des Clients <a class="btn btn-success" href="index.php?page=5">+</a></h1>
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
                      <th>Matricule</th>
                      <th>Nom Complet</th>
                      <th>Telephone</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
<?php
if (isset($res)){
        foreach ($res as $user)  {
	?>
                    <tr>
                      <td><?php echo $user['mat']?></td>
                      <td><?php echo $user['nom']?></td>
                      <td><?php echo $user['telephone']?></td>
					  <td><a class="btn btn-danger" href="index.php?page=6&id=<?php echo $user['id_user']?>">Supprimé</a> <a class="btn btn-primary" href="index.php?page=7&id=<?php echo $user['id_user']?>">Modifier</a></td>
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