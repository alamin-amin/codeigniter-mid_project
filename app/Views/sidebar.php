

<section class="innder_body row " style=' height:630px; '>
      <!-- <section class="sidebar col-md-4 col-xl-3 col-xxl-2 "> -->
        <div class="sidebar_container bg-secondary">
          <!-- <div class="user_part">
            <img class="" src="uploads/images/avatar.png" alt="avatar" />
            <h5>Sk Miraj</h5>
            <p><i class="fas fa-circle"></i> Online</p>
          </div> -->
          <!-- Sidebar Menu Start -->
          <div class="accordion bg-secondary" id="accordionExample">
            <div class="side-body bg-secondary">


            <div class="accordion-item bg-secondary">
                <h2 class="accordion-header">
                  <button class="accordion-button" type="button" >
                  <a class="nav-link text-white" aria-current="page" href="<?= base_url() ?>/public"> Deshbord
                  </button>
                </h2>
                <!-- <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <a class="btn btn-block" href="all_Customers"><i class="fa-sharp fa-solid fa-users"></i>&nbsp; All Customers</a>
                  </div>
                  <div class="accordion-body">
                    <a class="btn btn-block" href="add_Customers"><i class="fa-solid fa-user-plus"></i>&nbsp; Add Customers</a>
                  </div>
                  <div class="accordion-body">
                    <a class="btn btn-block" href=""><i class="fa-solid fa-trash"></i>&nbsp; Restore Customer</a>
                  </div>
                </div> -->
              </div>






              <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed text-white" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fa-solid fa-box "></i>&nbsp; Customer
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <a class="btn btn-block text-white" href="all_Customers"><i class="fa-sharp fa-solid fa-users"></i>&nbsp; All Customers</a>
                  </div>
                  <div class="accordion-body">
                    <a class="btn btn-block text-white" href="add_Customers"><i class="fa-solid fa-user-plus"></i>&nbsp; Add Customers</a>
                  </div>
                  <div class="accordion-body">
                    <a class="btn btn-block text-white" href=""><i class="fa-solid fa-trash"></i>&nbsp; Restore Customer</a>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed text-white" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fa-solid fa-box"></i>&nbsp; Products
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <a class="btn btn-block text-white" href="all_Products"><i class="fa-solid fa-boxes-stacked"></i>&nbsp; All Products</a>
                  </div>
                  <div class="accordion-body">
                    <a class="btn btn-block text-white" href="add_Product"><i class="fa-solid fa-box-open"></i>&nbsp; Add Products</a>
                  </div>
                  <div class="accordion-body">
                    <a class="btn btn-block text-white" href=""><i class="fa-solid fa-trash"></i>&nbsp; Restore Product</a>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed text-white" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <i class="fa-solid fa-cart-shopping"></i>&nbsp; Sales Order
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <a class="btn btn-block text-white" href=""><i class="fa-solid fa-cart-flatbed"></i>&nbsp; All Orders</a>
                  </div>
                  <div class="accordion-body">
                    <a class="btn btn-block text-white " href=""><i class="fa-solid fa-cart-plus"></i>&nbsp; Create Order</a>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed text-white" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    <i class="fa-solid fa-bag-shopping"></i>&nbsp; Purchase Order
                  </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <a class="btn btn-block text-white" href=""><i class="fa-solid fa-layer-group"></i>&nbsp; All Orders</a>
                  </div>
                  <div class="accordion-body">
                    <a class="btn btn-block text-white" href=""><i class="fa-solid fa-cart-plus"></i>&nbsp; Create Order</a>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed text-white" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    <i class="fa-solid fa-warehouse"></i>&nbsp; Inventory
                  </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <a class="btn btn-block text-white" href=""><i class="fa-solid fa-cubes"></i>&nbsp; Current Stock</a>
                  </div>
                  <div class="accordion-body">
                    <a class="btn btn-block text-white" href=""><i class="fa-solid fa-file-pen"></i>&nbsp; Update Stock</a>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed text-white" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    <i class="fa-solid fa-user"></i>&nbsp; Users
                  </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <a class="btn btn-block text-white" href=""><i class="fa-solid fa-users"></i>&nbsp; All Users</a>
                  </div>
                  <div class="accordion-body">
                    <a class="btn btn-block text-white" href=""><i class="fa-solid fa-user-plus"></i>&nbsp; Add Users</a>
                  </div>
                  <div class="accordion-body">
                    <a class="btn btn-block text-white" href=""><i class="fa-solid fa-toolbox"></i>&nbsp; Roles</a>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed text-white" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                    <i class="fa-solid fa-chart-simple"></i>&nbsp; Reports/Analytics
                  </button>
                </h2>
                <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <a class="btn btn-block text-white" href=""><i class="fa-solid fa-chart-line"></i>&nbsp; Sales Reports</a>
                  </div>
                  <div class="accordion-body">
                    <a class="btn btn-block text-white" href=""><i class="fa-solid fa-people-line"></i>&nbsp; Customer Reports</a>
                  </div>
                  <div class="accordion-body">
                    <a class="btn btn-block text-white" href=""><i class="fa-solid fa-truck-ramp-box"></i>&nbsp; Inventory
                      Reports</a>
                  </div>

                  
                </div>
              </div>
            </div>
          </div>
          <!-- <div class="bottom_sidebar">
            <a href=""><i class="fa-solid fa-user"></i> Profile</a><br>
            <a href=""><i class="fa-solid fa-gear"></i> Setting</a>

          </div> -->
        </div>