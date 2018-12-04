<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo view('partials/includeInsideHead') ?>
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
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Email</label>
                                <input type="text" name="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Confirm Password</label>
                                <input type="password" name="confirmPassword" class="form-control">
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
