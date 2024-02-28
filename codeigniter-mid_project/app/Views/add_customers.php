<?= $this->extend('nav') ?>

<?= $this->section('content') ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-3">
        <?= $this->include('sidebar') ?>
        </div>
        <div class="col-8">
        
        
        <!-- <section class="content col-md-8 col-xl-9 col-xxl-10"> -->
          <!-- Breadcrump Start -->
          <nav class="breadcrumb" style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#"><i class="fa-solid fa-house"></i> Project</a></li>
              <li class="breadcrumb-item active" aria-current="page">DashBoard</li>
            </ol>
          </nav>
           <!-- Breadcrump End -->
           <!-- Content Start -->
            <div class="main_content">
                <div class="form-body container" style="width: 80%; margin:0 auto">
                    <h4>Add Category</h4>
                    <form action="">
                        <div class="form-group">
                          <label for="">Category Name:</label>
                          <input class="form-control" type="text" placeholder="Enter Customer Name">
                        </div>
                        <br>
                        <div class="form-group">
                          <label for="">Category Email:</label>
                          <input class="form-control" type="text" placeholder="Enter Customer Email">
                        </div>

                        <br>
                        <div class="form-group">
                          <label for="">Address:</label>
                          <input class="form-control" type="text" placeholder="Enter Customer Address">
                        </div>
                        <br>
                        <input type="submit" class="mybtn-hightlight btn" value="Add Category">
                    </form>
                </div>
            </div>
           <!-- Content End -->
        </section>
      </section>










        </div>
        
    </div>
</div>
<?= $this->include('footer') ?>

  
<?= $this->endSection() ?>