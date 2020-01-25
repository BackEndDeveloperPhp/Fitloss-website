<div class="container-fluid">
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
                        <th scope="col">Price</th>
                        <th scope="col">Available Seats</th>
                        <th scope="col">Overviews</th>
                        <th scope="col">Benifits</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $courses = viewCourse(); ?>
                      <?php foreach ($courses as $course): ?>
                      <tr date-id="<?= $course->id ?>">
                        <th scope="row"><?= $course->id ?></th>
                        <td><?= $course->heading ?></td>
                        <td><?= substr($course->content, 0 , 200); ?></td>
                        <td>
                          <img src="<?= $course->bigImage ?>" alt="<?= $course->heading ?>">
                        </td>
                        <td>
                          <img src="<?= $course->thumbImage ?>" alt="<?= $course->heading ?>">
                        </td>
                        <th scope="col"><?= $course->price ?></th>
                        <th scope="col"><?= $course->availableSeats ?></th>
                        <th scope="col"><?= substr($course->overviews, 0 , 200); ?></th>
                        <th scope="col"><?= substr($course->benifits, 0 , 200); ?></th>
                        <td> <a href="#" class="edit_course" data-id="<?= $course->id ?>">Edit</a> </td>
                        <td> <a href="#" class="delete_course" data-id="<?= $course->id ?>">Delete</a> </td>
                      </tr>
                      <?php endforeach; ?>
                    </tbody>
                </table>
                <p id="result_operation" class="mt-5"></p>
    </div>
  </div>
    </div>
