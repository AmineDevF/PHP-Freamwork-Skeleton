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
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($users as $user) :?>
    <tr>
      <th scope="row"><?=$user['id'] ?></th>
    
        <td><?=$user['username'] ?></td>
        <td><?=$user['email'] ?></td>
        <td><?=$user['role_name'] ?></td>
        <td>
        <form action="delete/12" method="post">
        <button type="submit">Delete user</button>
        </form>
        </td>
    </tr>
  
    <?php endforeach ?>
  </tbody>
</table>
</div>
<?php include '../views/layout/footer.php'?>