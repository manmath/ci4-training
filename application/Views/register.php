<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo view('partials/includeInsideHead'); ?>
</head>
<body>
    <div class="page-wrapper flex-row align-items-center">
        <div class="container">
            <form action="<?php echo site_url('register/create'); ?>" method="post" class="form-row justify-content-center">
                <div class="col-md-5">
                    <div class="card p-4">
                        <div class="card-header text-center text-uppercase h4 font-weight-light">
                            Register
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label class="form-control-label">Name</label>
                                <input type="text" name="name" value="<?php echo set_value('name'); ?>" class="form-control">
                                <small class="form-text text-danger"><?php echo $validation->showError('name'); ?></small>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Email</label>
                                <input type="text" name="email" value="<?php echo set_value('email'); ?>" class="form-control">
                                <small class="form-text text-danger"><?php echo $validation->showError('email'); ?></small>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Password</label>
                                <input type="password" name="password" value="<?php echo set_value('password'); ?>" class="form-control">
                                <small class="form-text text-danger"><?php echo $validation->showError('password'); ?></small>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Confirm Password</label>
                                <input type="password" name="confirmPassword" value="<?php echo set_value('confirmPassword'); ?>" class="form-control">
                                <small class="form-text text-danger"><?php echo $validation->showError('confirmPassword'); ?></small>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success btn-block">
                                <i class="fas fa-save"></i> Create Account
                            </button>
                            <div class="text-center pt-3">
                                <a href="<?php echo site_url('login'); ?>">Already has account!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
