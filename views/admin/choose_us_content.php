<div class="container">
  <div class="row">
    <div class="col-lg-12 mb-5 mb-lg-0 mt-5">

              <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">id</th>
                        <th scope="col">Heading</th>
                        <th scope="col">Content</th>
                        <th scope="col">Big Image</th>
                        <th scope="col">Thumb Image</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $choose_content = chooseUs(); ?>
                      <?php foreach ($choose_content as $choose): ?>
                      <tr date-id="<?= $choose->id ?>">
                        <th scope="row"><?= $choose->id ?></th>
                        <td><?= $choose->heading ?></td>
                        <td><?= substr($choose->content, 0 , 200); ?></td>
                        <td>
                          <img src="<?= $choose->bigImage ?>" alt="<?= $choose->heading ?>">
                        </td>
                        <td>
                          <img src="<?= $choose->thumbImage ?>" alt="<?= $choose->heading ?>">
                        </td>
                        <td> <a href="#" class="edit_choose" data-id="<?= $choose->id ?>">Edit</a> </td>
                        <td> <a href="#" class="delete_choose" data-id="<?= $choose->id ?>">Delete</a> </td>
                      </tr>
                      <?php endforeach; ?>
                    </tbody>
                </table>
                <p id="result_operation" class="mt-5"></p>
    </div>
  </div>
    </div>
