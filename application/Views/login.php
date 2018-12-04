<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo view('partials/includeInsideHead') ?>
</head>
<body>
    <div class="page-wrapper flex-row align-items-center">
        <div class="container">
            <form action="login/verify" method="post" class="form-row justify-content-center">
                <div class="col-md-5">
                    <div class="card p-4">
                        <div class="card-header text-center text-uppercase h4 font-weight-light">
                            Login
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label class="form-control-label">Email</label>
                                <input type="text" name="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary px-5">
                                        <i class="fas fa-sign-in-alt" aria-hidden="true"></i> Sign In
                                    </button>
                                </div>
                                <div class="col-md-6">
                                    <a href="<?php echo site_url('register'); ?>" class="btn btn-info px-5">
                                        <i class="fas fa-sign-out-alt" aria-hidden="true"></i> Sign Up
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
