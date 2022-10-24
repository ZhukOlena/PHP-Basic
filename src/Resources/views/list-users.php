<?php include __DIR__.'/links.html' ?>

<a href="/users/create">Create user</a>

<?php

print '<br>';

foreach ($users as $user) {
    print 'Registered: '.$user['created_at']->format('Y-m-d H:i:s').'<br>';
    print 'Age: '.$user['age'].'<br>';
    print 'Name: '.$user['first_name'].'<br>';
    print '<hr>';
}
