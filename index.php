<?php
require_once 'users/users.php';
$users = getUsers ();
include 'partials/header.php';

?>

    <div class="container">
        <p>
            <a href="create.php" class="btn btn-outline-success">ساخت کاربر</a>


        <b dir="ltr"> <?php
            date_default_timezone_set ("Asia/Tehran");
            echo "ساعت " . date ("h:i:sa") .' ';
            echo"تاریخ " . date ("Y-m-d");
            ?></b>
        </p>

        <table class="table">
            <thead>
            <tr>
                <th>عکس</th>
                <th>نام</th>
                <th>نام کاربری</th>
                <th>ایمیل</th>
                <th>تلفن</th>
                <th>سایت</th>
                <th>عملیات</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?php if (isset($user['extention'])):?>
                        <img style="width: 60px" src="<?php echo "users/images/${user['id']}.${user['extention']}" ?>" alt="">
                        <?php endif; ?>
                        </td>
                    <td><?php echo $user['name'] ?></td>
                    <td><?php echo $user['username'] ?></td>
                    <td><?php echo $user['email'] ?></td>
                    <td><?php echo $user['phone'] ?></td>
                    <td>
                        <a target="_blank"
                           href="http://<?php echo $user['website'] ?>"><?php echo $user['website'] ?></a>
                    </td>
                    <td>
                        <a href="view.php?id=<?php echo $user['id']; ?>" class="btn btn-sm btn-outline-info">تماشا</a>
                        <a href="update.php?id=<?php echo $user['id']; ?>" class="btn btn-sm btn-outline-secondary">بروزرسانی</a>
                        <form action="delete.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
                            <button class="btn btn-sm btn-outline-danger">حذف</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>

        </table>
    </div>

<?php include 'partials/footer.php'; ?>