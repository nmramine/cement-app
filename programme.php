<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Programme</h1>
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
                      <th>Date Planifier</th>
                      <th>Type</th>
                      <th>Quantité</th>
					</tr>
                  </thead>
                  <tbody>
<?php
if (isset($res)){
        foreach ($res as $prog)  {
	?>
                    <tr>
                      <td><?php echo $prog['date_prog']?></td>
                      <td><?php echo $prog['type']?></td>
                      <td><?php echo $prog['qty']?></td>
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