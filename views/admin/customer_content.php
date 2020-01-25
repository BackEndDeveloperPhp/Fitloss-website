<div class="container">
  <div class="row">
    <div class="col-lg-12 mb-5 mb-lg-0 mt-5">

              <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">id</th>
                        <th scope="col">Username</th>
                        <th scope="col">Skill</th>
                        <th scope="col">Content</th>
                        <th scope="col">Big Image</th>
                        <th scope="col">Thumb Image</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $customers = viewCustomer(); ?>
                      <?php foreach ($customers as $customer): ?>
                      <tr date-id="<?= $customer->id ?>">
                        <th scope="row"><?= $customer->id ?></th>
                        <td><?= $customer->username ?></td>
                        <td><?= $customer->skill ?></td>
                        <td><?= substr($customer->content, 0 , 200); ?></td>
                        <td>
                          <img src="<?= $customer->bigImage ?>" alt="<?= $customer->username ?>">
                        </td>
                        <td>
                          <img src="<?= $customer->thumbImage ?>" alt="<?= $customer->username ?>">
                        </td>
                        <td> <a href="#" class="edit_customer" data-id="<?= $customer->id ?>">Edit</a> </td>
                        <td> <a href="#" class="delete_customer" data-id="<?= $customer->id ?>">Delete</a> </td>
                      </tr>
                      <?php endforeach; ?>
                    </tbody>
                </table>
                <p id="result_operation" class="mt-5"></p>
    </div>
  </div>
    </div>
