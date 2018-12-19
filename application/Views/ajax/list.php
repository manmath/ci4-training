<?php
if (count($allUsers)) {
  $i = 1;
  foreach ($allUsers as $user) {
    echo '<tr>'
        . '<td>' . $i++ . '</td>'
        . '<td>' . $user['name'] . '</td>'
        . '<td>' . $user['email'] . '</td>'
      . '</tr>';
  }
}
