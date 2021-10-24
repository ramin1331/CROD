<?php
include 'partials/header.php';
require __DIR__ . '/users/users.php';
if (!isset($_GET['id'])) {
    include 'partials/not_found.php';
}
$userId = $_GET['id'];

$user = getUsersById($userId);
if (!$user) {
    include 'partials/not_found.php';
    exit;
}

?>

  <div class="container">
      <div class="card">
          <div class="card-header">
              <h3 >نام کاربر: <b><?php echo $user['name']; ?></b></h3>
              <div class="card-body">
                  <a href="update.php?id=<?php echo $user['id'] ;?>" class="btn btn-secondary">بروزرسانی</a>
                  <a href="delete.php?id=<?php echo $user['id'] ;?>" class="btn btn-danger">حذف</a>
              </div>
              <table class="table">
                  <tbody>
                  <tr>
                      <th>نام</th>
                      <td><?php echo $user['name']; ?></td>
                  </tr>
                  <tr>
                      <th>نام کاربری</th>
                      <td><?php echo $user['username']; ?></td>
                  </tr>
                  <tr>
                      <th>ایمیل</th>
                      <td><?php echo $user['email']; ?></td>
                  </tr>
                  <tr>
                      <th>تلفن</th>
                      <td><?php echo $user['phone']; ?></td>
                  </tr>
                  <tr>
                      <th>وبسایت:</th>
                      <td>
                          <a target="_blank" href="http://<?php echo $user['website'] ?>"><?php echo $user['website'] ?></a>
                      </td>
                  </tr>
                  </tbody>
              </table>
          </div>
      </div></div>
<?php include 'partials/footer.php'; ?>