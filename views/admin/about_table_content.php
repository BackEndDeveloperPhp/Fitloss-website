<div class="container">
  <div class="row">
    <div class="col-lg-12 mb-5 mb-lg-0 mt-5">

              <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">id</th>
                        <th scope="col">Heading</th>
                        <th scope="col">Text</th>
                        <th scope="col">Big Image</th>
                        <th scope="col">Thumb Image</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $about_content = viewAboutContent(); ?>
                      <?php foreach ($about_content as $about): ?>
                      <tr date-id="<?= $about->id ?>">
                        <th scope="row"><?= $about->id ?></th>
                        <td><?= $about->heading ?></td>
                        <td><?= substr($about->content, 0 , 200); ?></td>
                        <td>
                          <img src="<?= $about->bigImage ?>" alt="<?= $about->heading ?>">
                        </td>
                        <td>
                          <img src="<?= $about->thumbImage ?>" alt="<?= $about->heading ?>">
                        </td>
                        <td> <a href="#" class="edit_about" data-id="<?= $about->id ?>">Edit</a> </td>
                        <td> <a href="#" class="delete_about" data-id="<?= $about->id ?>">Delete</a> </td>
                      </tr>
                      <?php endforeach; ?>
                    </tbody>
                </table>
                <p id="result_operation" class="mt-5"></p>
    </div>
  </div>
    </div>
