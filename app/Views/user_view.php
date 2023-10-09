

<div class="d-flex ">
   <div class="col-md-2 mt-4 p-5"></div>
   <div class="col-md-10 mt-4 p-5">
      <div class="d-flex justify-content-end">
      <h1 class="text-center p-3 mb-2 bg-primary text-white">User Details</h1>
         <a href="<?php echo base_url('user-form') ?>" class="btn btn-success mb-2">Add User</a>
      </div>
      <?php
      if (isset($_SESSION['msg'])) {
         echo $_SESSION['msg'];
      }
      ?>
      <div class="mt-3">
         <table class="table table-bordered" id="users-list">
            <thead>
               <tr>
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
               <?php if ($users) : ?>
                  <?php foreach ($users as $user) : ?>
                     <tr>
                        <td><?php echo $user['id']; ?></td>
                        <td><?php echo $user['name']; ?></td>
                        <td><?php echo $user['email']; ?></td>
                        <td><?php echo $user['phone']; ?></td>
                        <td><?php echo $user['age']; ?></td>
                        <td><?php echo $user['address']; ?></td>
                        <td>
                           <a href="<?php echo base_url('public/edit-view/' . $user['id']); ?>" class="btn btn-primary btn-sm">Edit</a>
                           <a href="<?php echo base_url('delete/' . $user['id']); ?>" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                     </tr>
                  <?php endforeach; ?>
               <?php endif; ?>
            </tbody>
         </table>
      </div>
   </div>
</div>



<script>
   $(document).ready(function() {
      $('#users-list').DataTable();
   });
</script>
</body>

</html>