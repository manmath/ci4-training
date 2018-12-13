<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo view('partials/includeInsideHead'); ?>
</head>
<body>
    <div class="page-wrapper">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $i = 1;
                            foreach ($users as $user) {
                                echo '<tr>'
                                    . '<td>' . $i++ . '</td>'
                                    . '<td>' . $user['name'] . '</td>'
                                    . '<td>' . $user['email'] . '</td>'
                                . '</tr>';
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
