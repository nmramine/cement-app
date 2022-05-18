<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Mes Commandes</h1>
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
                      <th>Date</th>
                      <th>Type</th>
                      <th>Quantité</th>
                      <th>Status</th>
					  <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
<?php
$etat = array("En Cours de Traitement","Accepté","Refusé");
if (isset($res)){
        foreach ($res as $cmnd)  {
	?>
                    <tr>
                      <td><?php echo $cmnd['date_cmnd']?></td>
                      <td><?php echo $cmnd['type']?></td>
                      <td><?php echo $cmnd['qty']?></td>
                      <td><?php echo $etat[$cmnd['stat']]?></td>
<?php if ($cmnd['stat']==2){?>
					<td>Contacter le Departement Commercial</td>
<?php }else{if($cmnd['stat']==0){?>
					  <td><a class="btn btn-primary" href="index.php?page=4&id=<?php echo $cmnd['id_cmnd']?>">Annuler</a></td>
<?php }else{?>
<td>Verifier Votre Programme</td>
<?php }}?>
                    </tr>
<?php
        }}
	?>
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