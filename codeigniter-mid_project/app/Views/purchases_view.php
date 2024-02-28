<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
   </head?

   <?= $this->extend('nav') ?>

<?= $this->section('content') ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-3">
        <?= $this->include('sidebar') ?>
        </div>
        <div class="col-9">

        <nav class="breadcrumb" style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#"><i class="fa-solid fa-house"></i> Project</a></li>
              <li class="breadcrumb-item active" aria-current="page">DashBoard</li>
            </ol>
          </nav>



<div class="d-flex ">
   <div class="col-md-2 mt-4 p-5"></div>
   <div class="col-md-10 mt-8 p-5">
      <div class="d-flex justify-content-end">
      <h1 class="text-center p-3 mb-2 bg-primary text-white">Product Details</h1>
         <a href="<?php echo base_url('purchases-form') ?>" class="btn btn-success mb-2 fload-end">Add Product</a>
      </div>
      <?php
      if (isset($_SESSION['msg'])) {
         echo $_SESSION['msg'];
      }
      ?>
      <div class="mt-3">
         <table class="table table-bordered" id="purchases-list">
            <thead>
               <tr>
                  <th>purchases Id</th>
                  <th>Name</th>
                  <th>Category</th>
                  <th>Unit</th>
                  <th>Brand</th>
                  <!-- <th>Picture</th> -->
                  <th>Price</th>
                  <th>Date&Time</th>
                  <th>Action</th>
               </tr>




               
            </thead>
            <tbody>
               <?php if ($purchases) : ?>
                  <?php foreach ($purchases as $user) : ?>
                     <tr>
                       
                     <td><?php echo $user['id']; ?></td>
                    <td><?php echo $user['name']; ?></td>
                    <td><?php echo $user['category']; ?></td>
                    <td><?php echo $user['unit']; ?></td>
                    <td><?php echo $user['brand']; ?></td>
                     <td><?php echo $user['price']; ?></td>
                     <td><?php echo $user['date&time']; ?></td>
                    <td>
                           <a href="<?php echo base_url('purchases-edit/' . $user['id']); ?>" class="btn btn-primary btn-sm">Edit</a>
                           <a href="<?php echo base_url('deletepu/' . $user['id']); ?>" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                     </tr>
                  <?php endforeach; ?>
               <?php endif; ?>
            </tbody>
            <h1>Total Purches :<?php echo $sum ?></h1></table>
      </div>
   </div>
</div>

<script>
   $(document).ready(function() {
      $('#products-list').DataTable();
   });
</script>
<div class="pagination">
              <a href="#">&laquo;</a>
              <a href="#" class="active">1</a>
              <a href="#">2</a>
              <a href="#">3</a>
              <a href="#">4</a>
              <a href="#">5</a>
              <a href="#">6</a>
              <a href="#">&raquo;</a>
            </div>
          </div>


</div>
        
  </div>
   </div>
    <?= $this->include('footer') ?>
    
      
    <?= $this->endSection() ?>



</body>

</html>