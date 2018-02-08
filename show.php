<?php require __DIR__ . '/inc/head.php';
require __DIR__ .'/inc/functions.php';
?>

<table class="table table-dark" style="margin-top: 30px;">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Full Name</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Phone</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php echo getLastUser()['id']; ?></th>
      <td><?php echo getLastUser()['full_name']; ?></td>
      <td><?php echo getLastUser()['username']; ?></td>
      <td><?php echo getLastUser()['password']; ?></td>
      <td><?php echo getLastUser()['email']; ?></td>
      <td><?php echo getLastUser()['address']; ?></td>
      <td><?php echo getLastUser()['phone']; ?></td>
    </tr>
  </tbody>
</table>
<button onClick="window.print()" class="btn btn-info">Print this page</button>`








<?php require __DIR__ . '/inc/foot.php'; ?>