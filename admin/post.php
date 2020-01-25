<?php
$blog= listPost();
 ?>
    <div class="container mt-5 mb-5">
      <div class="row">
          <div class="col-12">
            <h1>List of users</h1>
            <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">id</th>
                <th scope="col">Heading</th>
                <th scope="col">Text</th>
                <th scope="col">Quotes</th>
                <th scope="col">Image</th>
              </tr>
            </thead>
            <tbody>
          <?php foreach ($blog as $post): ?>
              <tr>
                <th scope="row"><?= $post->id ?></th>
                <td><?= $post->heading ?></td>
                <td><?= $post->text ?></td>
                <td><?= $post->quotes ?></td>
                <td><?= $post->image?></td>
              </tr>
            <?php endforeach; ?>
            </tbody>
          </table>
          </div>
      </div>
    </div>
