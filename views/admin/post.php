<div class="container">
  <div class="row">
    <div class="col-lg-8 mb-5 mb-lg-0 mt-5">
<?php require_once "insert_update_form_post.php"; ?>

              <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">id</th>
                        <th scope="col">Heading</th>
                        <th scope="col">Text</th>
                        <th scope="col">Quotes</th>
                        <th scope="col">Date</th>
                        <th scope="col">Big Image</th>
                        <th scope="col">Thumb Image</th>
                        <th scope="col">Username</th>
                        <!-- <th scope="col">Category</th> -->
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $blog = listPost(); ?>
                      <?php foreach ($blog as $post): ?>
                      <tr date-id="<?= $post->id ?>">
                        <th scope="row"><?= $post->id ?></th>
                        <td><?= $post->heading ?></td>
                        <td><?= substr($post->content,0,80); ?></td>
                        <td><?= substr($post->quotes,0,60); ?></td>
                        <td><?= obradiDatum($post->date); ?></td>
                        <td>
                          <img src="<?= $post->bigImage ?>" alt="<?= $post->heading ?>">
                        </td>
                        <td>
                          <img src="<?= $post->thumbImage ?>" alt="<?= $post->heading ?>">
                        </td>
                        <td><?= $post->username ?></td>
                        <td> <a href="#" class="edit_post" data-id="<?= $post->id ?>">Edit</a> </td>
                        <td> <a href="#" class="delete_post" data-id="<?= $post->id ?>">Delete</a> </td>
                      </tr>
                      <?php endforeach; ?>
                    </tbody>
                </table>
                <p id="result_operation" class="mt-5"></p>
    </div>
