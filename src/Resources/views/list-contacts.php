<?php include __DIR__.'/links.html' ?>

    <a href="/contacts/create">Create contacts</a>

<?php

print '<br>';

foreach ($contacts as $contact) {
    print 'Registered: '.$contact['created_at']->format('Y-m-d H:i:s').'<br>';
    print 'phone: '.$contact['phone'].'<br>';
    print 'address: '.$contact['address'].'<br>';
    print 'email: '.$contact['email'].'<br>';
    print '<hr>';
}

