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
                  <div class="row"> 
                     <div class="col-10">
                        <h1 class="text-left bg-primary text-white">User Details</h1>
                     </div>
                     <div class="col-2">
                        <a href="<?php echo base_url('user-form') ?>" class="btn btn-success mb-2 fload-end">Add User</a>
                     </div>
                  </div>

               <div class="d-flex ">
                  <div class="col-md-10 mt-8 p-5">
                     <?php
                     if (isset($_SESSION['msg'])) {
                        echo $_SESSION['msg'];
                     }
                     ?>
                     <div class="mt-3">
                        <table class="table table-bordered" id="users-list">
                           <thead>
                              <tr class="table-primary">
                                 <th>User Id</th>
                                 <th>Name</th>
                                 <th>Email</th>
                                 <th>Phone</th>
                                 <th>Age</th>
                                 <th>Address</th>
                                 <th>Action</th>
                              </tr> 
                           </thead>
                           <tbody>
                              <?php if ($customers) : ?>
                                 <?php foreach ($customers as $user) : ?>
                                    <tr>
                                       <!-- <td><input type="checkbox" class="select"></td> -->
                                       <td><?php echo $user['id']; ?></td>
                                       <td><?php echo $user['name']; ?></td>
                                       <td><?php echo $user['email']; ?></td>
                                       <td><?php echo $user['phone']; ?></td>
                                       <td><?php echo $user['age']; ?></td>
                                       <td><?php echo $user['address']; ?></td>
                                       <td>
                                          <a href="<?php echo base_url('edit-view/' . $user['id']); ?>" class="btn btn-primary btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
  <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
</svg></a>
                                          <a href="<?php echo base_url('delete/' . $user['id']); ?>" class="btn btn-danger btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-archive-fill" viewBox="0 0 16 16">
  <path d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM5.5 7h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1zM.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8H.8z"/>
</svg></a>
                                       </td>
                                    </tr>
                                 <?php endforeach; ?>
                              <?php endif; ?>
                           </tbody>
                        </table>
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
</div>
         <script>
            $(document).ready(function() {
               $('#users-list').DataTable();
            });
         </script>
        
         <?= $this->include('footer') ?>
         <?= $this->endSection() ?>
</body>
</html>