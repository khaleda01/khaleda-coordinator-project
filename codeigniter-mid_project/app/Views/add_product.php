<!DOCTYPE html>
<html>
<head>
  <title>Codeigniter 4 Add User With Validation Demo</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    .container {
      max-width: 500px;
    }
    .error {
      display: block;
      padding-top: 5px;
      font-size: 14px;
      color: red;
    }
  </style>
</head>
<body>
<?= $this->extend('nav') ?>

<?= $this->section('content') ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-3">
        <?= $this->include('sidebar') ?>
        </div>
        <div class="col-8">

        <!-- <nav class="breadcrumb" style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#"><i class="fa-solid fa-house"></i> Project</a></li>
              <li class="breadcrumb-item active" aria-current="page">DashBoard</li>
            </ol>
          </nav> -->


  <div class="container mt-5">
    <!-- <form method="post" id="add_create" name="add_create" 
    action="<?= site_url('/submit-form') ?>">
      <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control">
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" class="form-control">
      </div>
      <div class="form-group">
        <label>phone</label>
        <input type="text" name="phone" class="form-control">
      </div>
      <div class="form-group">
        <label>Age</label>
        <input type="text" name="age" class="form-control">
      </div>
      <div class="form-group">
        <label>Address</label>
        <input type="text" name="address" class="form-control">
      </div><br>
      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Update Data</button>
      </div>
      <br>
    </form> -->

    <form method="post" id="add_create" name="add_create" 
    action="<?= site_url('submit-pform') ?>">
                        <div class="form-group">
                          <label for="">Product Name:</label>
                          <input class="form-control" type="text" name="name" class="form-control" type="text" placeholder="Enter product Name">
                        </div>
                        <br>
                        <!-- <div class="form-group">
                          <label for="">Product Category:</label>
                          <input class="form-control" type="text"  name="category" class="form-control" placeholder="Enter product category">
                        </div> -->

                        <div class="form-group">
                          <label for="">product Category:</label>
                          <select class="form-select" aria-label="Default select example" name="category">
                            <option selected>Open this select menu</option>
                            <?php foreach($Category as $row) : ?>
                            <option value="<?= $row['name'] ?>"><?= $row['name'] ?></option>
                            <?php endforeach ?>
                          </select>
                        </div>


                        <br>
                        <div class="form-group">
                          <label for="">Unit:</label>
                          <select class="form-select" aria-label="Default select example" name="unit">
                            <option selected>Open this select menu</option>
                            <?php foreach($unit as $row) : ?>
                            <option value="<?= $row['name'] ?>"><?= $row['name'] ?></option>
                            <?php endforeach ?>
                          </select>
                        </div>
                        <br>
                         
                        <div class="form-group">
                          <label for="">Brand:</label>
                          <select class="form-select" aria-label="Default select example" name="brand">
                            <option selected>Open this select menu</option>
                            <?php foreach($band as $row) : ?>
                            <option value="<?= $row['name'] ?>"><?= $row['name'] ?></option>
                            <?php endforeach ?>
                          </select>
                        </div>
                        <br>

                        
                        <!-- <div class="form-group">
                          <label for="">Picture:</label>
                          <input class="form-control" type="text" name="picture" class="form-control" placeholder="Enter product Picture">
                        </div>
                        <br> -->

                        
                        <div class="form-group">
                          <label for="">Price:</label>
                          <input class="form-control" type="text" name="price" class="form-control" placeholder="Enter product Proce">
                        </div>
                        <br>

                        <br>
                        <div class="form-group">
                          <label for="">Date&Time:</label>
                          <input class="form-control" type="datetime-local" name="date&time" class="form-control" placeholder="Enter product unit">
                        </div>
                        <br>

                        <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Update Data</button>
      </div>
                    </form>






  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
  <script>
    if ($("#add_create").length > 0) {
      $("#add_create").validate({
        rules: {
          name: {
            required: true,
          },
          email: {
            required: true,
            maxlength: 60,
            email: true,
          },
        },
        messages: {
          name: {
            required: "Name is required.",
          },
          email: {
            required: "Email is required.",
            email: "It does not seem to be a valid email.",
            maxlength: "The email should be or equal to 60 chars.",
          },
        },
      })
    }
  </script>

</div>
        
  </div>
   </div>
    <?= $this->include('footer') ?>
    
      
    <?= $this->endSection() ?>


</body>
</html>

