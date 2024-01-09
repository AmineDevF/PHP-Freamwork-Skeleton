<?php include '../views/layout/header.php'?>
  <body>
    <div class="container">
    <h1>fetch all users!</h1>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">username</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($users as $user) :?>
    <tr>
      <th scope="row"><?=$user['id'] ?></th>
    
        <td><?=$user['username'] ?></td>
        <td><?=$user['email'] ?></td>
        <td><?=$user['role_name'] ?></td>
    </tr>
  
    <?php endforeach ?>
  </tbody>
</table>
</div>
<?php include '../views/layout/footer.php'?>