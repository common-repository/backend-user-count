<h1>Backend User Count</h1>
<hr>
<?php

$result = count_users();
echo '<h2>There are ', $result['total_users'], ' total users</h2>';

foreach($result['avail_roles'] as $role => $count) {
    if ($count == 0){
        //do nothing
    }
    else if ($count == 1){
        echo '<strong>'.$count. '</strong> '. $role . '<br>';
    }
    else {
        echo '<strong>'.$count. '</strong> '. $role . 's<br>';
    }
}
    

