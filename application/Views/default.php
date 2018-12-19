<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo view('partials/includeInsideHead') ?>
</head>
<body>
    <div class="page-wrapper flex-row align-items-center">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <?php
                        $uri = service('uri', current_url(true));
                        $directory = $uri->getSegment(1);
                        $file = $uri->getSegment(2);
                        if (!$directory) {
                            // only baseurl
                            echo '<h1>Welcome page</h1>';
                        } elseif (!$file) {
                            // only baseurl + controller name
                            echo view($directory . '/index');
                        } else {
                            // baseurl + controller name + method name
                            echo view($directory . '/' . $file);
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <?php
    echo view('partials/ajaxLoading');
    echo view('partials/includeBeforeCloseBody');
    ?>
</body>
</html>
