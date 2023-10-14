


<?= $this->extend('nav') ?>

<?= $this->section('content') ?>

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


  <div class="container-fluid">
      <div class="row">
        <div class="col-3">
          <?= $this->include('sidebar') ?>
        </div>
      <div class="col-8">

    <form method="post" id="add_create" name="add_create" 
    action="<?= base_url('public/submit-form') ?>">
    <h1 style= " text-align:center">Add User Information </h1>
      <div class="form-group">
        <label>Name:</label>
        <input type="text" name="name" class="form-control">
      </div>
      <div class="form-group">
        <label>Email:</label>
        <input type="text" name="email" class="form-control">
      </div>

      <div class="form-group">
        <label>Phone:</label>
        <input type="text" name="phone" class="form-control">
      </div>
      
      <div class="form-group">
        <label>Age:</label>
        <input type="text" name="age" class="form-control">
      </div>

      <div class="form-group">
        <label>Address:</label>
        <input type="text" name="address" class="form-control">
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Add User</button>
      </div>
    </form>
    </div>
  </div>
  <?= $this->include('footer') ?> 
<?= $this->endSection() ?>
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
          
          phone: {
            required: true,
            maxlength: 60,
            phone: true,
          },
          age: {
            required: true,
            maxlength: 60,
            age: true,
          },
          address: {
            required: true,
            maxlength: 60,
            address: true,
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

          phone: {
            required: "Phone number is required.",
          },
          age: {
            required: "Age is required.",
          },
          address: {
            required: "Address is required.",
          },
        },
      })
    }
  </script>

