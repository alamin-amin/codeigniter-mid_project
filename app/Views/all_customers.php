<?= $this->extend('nav') ?>

<?= $this->section('content') ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-3">
        <?= $this->include('sidebar') ?>
        </div>
        <div class="col-8">
            

            <!-- <section class="content col-md-8 col-lg-9 col-xxl-10"> -->
          <!-- Breadcrump Start -->
          <nav class="breadcrumb" style="--bs-breadcrumb-divider: '>' width:100%" aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item text-white"><a href="#"><i class="fa-solid fa-house text-white"></i> Project</a></li>
              <li class="breadcrumb-item active text-white" aria-current="page">DashBoard</li>
            </ol>
          </nav>
           <!-- Breadcrump End -->
           <!-- Content Start -->
           <h2 class="text-center pt-3">All Coustomer</h2>
           <div class="main_content">
            <div class="table-responsive">
              <table>
                <thead>
                  <tr>
                    <th><input type="checkbox" class="select-all"></th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><input type="checkbox" class="select"></td>
                    <td>0001</td>
                    <td>John Doe</td>
                    <td>johndoe@example.com</td>
                    <td>Mirpur,Dhaka</td>
                    <td>
                      <button class="edit-btn">Edit</button>
                      <button class="delete-btn">Delete</button>
                    </td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" class="select"></td>
                    <td>0001</td>
                    <td>John Doe</td>
                    <td>johndoe@example.com</td>
                    <td>Mirpur,Dhaka</td>
                    <td>
                      <button class="edit-btn">Edit</button>
                      <button class="delete-btn">Delete</button>
                    </td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" class="select"></td>
                    <td>0001</td>
                    <td>John Doe</td>
                    <td>johndoe@example.com</td>
                    <td>Mirpur,Dhaka</td>
                    <td>
                      <button class="edit-btn">Edit</button>
                      <button class="delete-btn">Delete</button>
                    </td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" class="select"></td>
                    <td>0001</td>
                    <td>John Doe</td>
                    <td>johndoe@example.com</td>
                    <td>Mirpur,Dhaka</td>
                    <td>
                      <button class="edit-btn">Edit</button>
                      <button class="delete-btn">Delete</button>
                    </td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" class="select"></td>
                    <td>0001</td>
                    <td>John Doe</td>
                    <td>johndoe@example.com</td>
                    <td>Mirpur,Dhaka</td>
                    <td>
                      <button class="edit-btn">Edit</button>
                      <button class="delete-btn">Delete</button>
                    </td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" class="select"></td>
                    <td>0001</td>
                    <td>John Doe</td>
                    <td>johndoe@example.com</td>
                    <td>Mirpur,Dhaka</td>
                    <td>
                      <button class="edit-btn">Edit</button>
                      <button class="delete-btn">Delete</button>
                    </td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" class="select"></td>
                    <td>0001</td>
                    <td>John Doe</td>
                    <td>johndoe@example.com</td>
                    <td>Mirpur,Dhaka</td>
                    <td>
                      <button class="edit-btn">Edit</button>
                      <button class="delete-btn">Delete</button>
                    </td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" class="select"></td>
                    <td>0001</td>
                    <td>John Doe</td>
                    <td>johndoe@example.com</td>
                    <td>Mirpur,Dhaka</td>
                    <td>
                      <button class="edit-btn">Edit</button>
                      <button class="delete-btn">Delete</button>
                    </td>
                  </tr>
                  <!-- <tr>
                    <td><input type="checkbox" class="select"></td>
                    <td>0001</td>
                    <td>John Doe</td>
                    <td>johndoe@example.com</td>
                    <td>Mirpur,Dhaka</td>
                    <td>
                      <button class="edit-btn">Edit</button>
                      <button class="delete-btn">Delete</button>
                    </td>
                  </tr> -->
                  <!-- <tr>
                    <td><input type="checkbox" class="select"></td>
                    <td>0001</td>
                    <td>John Doe</td>
                    <td>johndoe@example.com</td>
                    <td>Mirpur,Dhaka</td>
                    <td>
                      <button class="edit-btn">Edit</button>
                      <button class="delete-btn">Delete</button>
                    </td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" class="select"></td>
                    <td>0001</td>
                    <td>John Doe</td>
                    <td>johndoe@example.com</td>
                    <td>Mirpur,Dhaka</td>
                    <td>
                      <button class="edit-btn">Edit</button>
                      <button class="delete-btn">Delete</button>
                    </td>
                  </tr> -->
                  
            
                  <!-- Add more rows for each user -->
                </tbody>
              </table>
            </div>
          
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
         <!-- Content End -->
        <!-- </section> -->





          
        </div>
        
    </div>
</div>
<?= $this->include('footer') ?>

  
<?= $this->endSection() ?>