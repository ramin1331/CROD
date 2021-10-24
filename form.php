<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>
                <?php if ($user['id']): ?>
                بروزرسانی کاربر :<b><?php echo $user['name']; ?></b>
                <?php else: ?>
               ساخت کاربر جدید :
                <?php endif; ?>
            </h3>
        </div>
        <div class="card-body">
<form  method="POST" enctype="multipart/form-data" action="">
                <div class="form-group">
                    <lable>نام:</lable>
                    <input name="name" value="<?php echo $user['name']; ?>" class="form-control">
                </div>
                <div class="form-group">
                    <lable>نام کاربری:</lable>
                    <input name="username" value="<?php echo $user['username']; ?>" class="form-control">
                </div>
                <div class="form-group">
                    <lable>ایمیل:</lable>
                    <input name="email" value="<?php echo $user['email']; ?>" class="form-control">
                </div>
                <div class="form-group">
                    <lable>تلفن:</lable>
                    <input name="phone" value="<?php echo $user['phone']; ?>" class="form-control">
                </div>
                <div class="form-group">
                    <lable>وبسایت:</lable>
                    <input name="website" value="<?php echo $user['website']; ?>" class="form-control">
                </div>
                <div class="form-group">
                    <lable>عکس:</lable>
                    <input name="picture" type="file" class="form-control">
                    <button type="submit" class="btn btn-primary" >Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>


