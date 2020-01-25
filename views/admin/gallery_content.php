<div class="container">
  <div class="row">
    <div class="col-lg-12 mb-5 mb-lg-0 mt-5">

              <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">id</th>
                        <th scope="col">Big Image</th>
                        <th scope="col">Thumb Image</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $galleries = viewGallery(); ?>
                      <?php foreach ($galleries as $gallery): ?>
                      <tr date-id="<?= $gallery->id ?>">
                        <th scope="row"><?= $gallery->id ?></th>
                        <td>
                          <img src="<?= $gallery->bigImage ?>" alt="<?= $gallery->id ?>">
                        </td>
                        <td>
                          <img src="<?= $gallery->thumbImage ?>" alt="<?= $gallery->id ?>">
                        </td>
                        <td> <a href="#" class="edit_gallery" data-id="<?= $gallery->id ?>">Edit</a> </td>
                        <td> <a href="#" class="delete_gallery" data-id="<?= $gallery->id ?>">Delete</a> </td>
                      </tr>
                      <?php endforeach; ?>
                    </tbody>
                </table>
                <p id="result_operation" class="mt-5"></p>
    </div>
  </div>
    </div>
