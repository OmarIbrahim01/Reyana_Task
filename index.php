<?php require __DIR__ . '/inc/head.php'; ?>


      <form action="procedures/addUser.php" method="post" id="form">
        <div class="form-group">
          <label for="">Full Name</label>
          <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Enter Your Full Name" required>
          <small id="full_name_error" class="form-text text-muted">qwewe</small>
        </div>
        <div class="form-group">
          <label for="">Username</label>
          <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username" required>
          <small id="username_error" class="form-text text-muted"></small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
          <small id="password_error" class="form-text text-muted"></small>
        </div>
        <div class="form-group">
          <label for="">Email address</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required>
          <small id="email_error" class="form-text text-muted"></small>
        </div>
        <div class="form-group">
          <label for="">Address</label>
          <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address" required>
          <small id="address_error" class="form-text text-muted"></small>
        </div>
        <div class="form-group">
          <label for="">Phone</label>
          <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Phone" required>
          <small id="phone_error" class="form-text text-muted"></small>
        </div>
        

        <button type="submit" id="submit" class="btn btn-primary">Submit</button>
      </form>


    <?php require __DIR__ . '/inc/foot.php'; ?>