<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Programme d'aujourd'hui</h1>
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
                      <th>Nom Client</th>
                      <th>Matricule</th>
                      <th>Type</th>
					  <th>Quantité</th>
					</tr>
                  </thead>
                  <tbody>
<?php
if (isset($res)){
        foreach ($res as $today_prog)  {
	?>
                    <tr>
                      <td><?php echo $today_prog['nom']?></td>
                      <td><?php echo $today_prog['mat']?></td>
                      <td><?php echo $today_prog['type']?></td>
					  <td><?php echo $today_prog['qty']?></td>
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