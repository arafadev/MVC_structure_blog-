<?php

use MVC\models\category;

require_once 'header.php' ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Category Page</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Blank Page</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title"><a href="/admincategory/add" class="btn btn-info">Add</a></h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fas fa-times"></i></button>
        </div>
      </div>
      <div class="card-body">
        <h1>test category</h1>
        <table class="table">
          <thead>
            <tr>
              <th>name</th>
              <th>img</th>
              <th>icon</th>
              <th>Update</th>
              <th>Delete</th>
            </tr>
          </thead>

          <tbody>
            <?php foreach ($data as $c) { ?>

              <tr>
                <td><?= $c['name'] ?></td>
                <td><img src="<?= DOMAIN_NAME ?>img/<?= $c['img'] ?>" width="100*50" height="100px"  alt=""></td>
                <td><?= $c['icon'] ?></td>
                <td><a href="update/<?= $c['id'] ?>" class="btn btn-default">update</a></td>
                <td><a href="delete/<?= $c['id'] ?>" class="btn btn-danger">delete</a></td>

              </tr>
            <?php } ?>

          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        Footer
      </div>
      <!-- /.card-footer-->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php require_once 'footer.php' ?>