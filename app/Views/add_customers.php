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
              <li class="breadcrumb-item text-white"><a href="#"><i class="fa-solid fa-house"></i> Project</a></li>
              <li class="breadcrumb-item active text-white" aria-current="page">DashBoard</li>
            </ol>
          </nav>
           <!-- Breadcrump End -->
           <!-- Content Start -->
            <div class="main_content">
                <div class="form-body container" style="width: 80%; margin:0 auto">
                    <h4>Add Customer</h4>
                    <form action="">
                        <div class="form-group">
                          <label for="">Customer Name:</label>
                          <input class="form-control" type="text" placeholder="Enter Customer Name">
                        </div>
                        <br>
                        <div class="form-group">
                          <label for="">Customer Email:</label>
                          <input class="form-control" type="text" placeholder="Enter Customer Email">
                        </div>

                        <br>
                        <div class="form-group">
                          <label for="">Customer Phone:</label>
                          <input class="form-control" type="text" placeholder="Enter Customer Address">
                        </div>
                        <br>
                        <input type="submit" class="mybtn-hightlight btn" value="Add Customer">
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