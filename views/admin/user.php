<?php
require_once "models/user/list_of_users.php";
$users = listOfUser();
 ?>
    <div class="container mt-5 mb-5">
      <div class="row">
          <div class="col-12">
            <h1>List of users</h1>
            <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">id</th>
                <th scope="col">First name</th>
                <th scope="col">Last name</th>
                <th scope="col">Email</th>
                <th scope="col">Username</th>
                <th scope="col">Date of Birth</th>
              </tr>
            </thead>
            <tbody>
          <?php foreach ($users as $user): ?>
              <tr>
                <th scope="row"><?= $user->id ?></th>
                <td><?= $user->firstName ?></td>
                <td><?= $user->lastName ?></td>
                <td><?= $user->email ?></td>
                <td><?= $user->username ?></td>
                <td><?= $user->dateOfBirth ?></td>
              </tr>
            <?php endforeach; ?>
            </tbody>
          </table>
          </div>
      </div>
    </div>
