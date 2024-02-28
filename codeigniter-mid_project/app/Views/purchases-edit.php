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
        <div class="col-9">

      





  <div class="container mt-5">
    <form method="post" id="add_create" name="add_create" 
    action="<?= site_url('/updatepu') ?>">
      <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control" value="<?= $user_obj['name']?>">
        <input type="hidden" name="id" class="form-control" value="<?= $user_obj['id']?>">
      </div>
      <div class="form-group">
                          <label for="">purchases Category:</label>
                          <select class="form-select" aria-label="Default select example" name="category">
                            <option selected>Open this select menu</option>
                            <?php foreach($Category as $row) : ?>
                            <option value="<?= $row['name'] ?>" <?=($row['name']==$user_obj['category'] ?  'selected' :'') ?> ><?= $row['name'] ?></option>
                            <?php endforeach ?>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="">Unit:</label>
                          <select class="form-select" aria-label="Default select example" name="unit">
                            <option selected>Open this select menu</option>
                            <?php foreach($unit as $row) : ?>
                            <option value="<?= $row['name'] ?>" <?=($row['name']==$user_obj['unit'] ?  'selected' :'') ?>><?= $row['name'] ?></option>
                            <?php endforeach ?>
                          </select>
                        </div>
                        <br>

                        <div class="form-group">
                          <label for="">Brand:</label>
                          <select class="form-select" aria-label="Default select example" name="brand">
                            <option selected>Open this select menu</option>
                            <?php foreach($band as $row) : ?>
                            <option value="<?= $row['name'] ?>" <?=($row['name']==$user_obj['brand'] ?  'selected' :'') ?>><?= $row['name'] ?></option>
                            <?php endforeach ?>
                          </select>
                        </div>
      <div class="form-group">
        <label>Price</label>
        <input type="text" name="price" class="form-control" value="<?= $user_obj['price']?>">
      </div>
      <div class="form-group">
        <label>Date&Time</label>
        <input type="text" name="date&time" class="form-control" value="<?= $user_obj['date&time']?>">
      </div>
      <br>
      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Update Data</button>
      </div>
      <br>
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