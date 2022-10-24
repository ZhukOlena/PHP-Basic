<?php include __DIR__.'/links.html' ?>


<?php

print '<br>';

foreach ($messages as $message) {
    print 'From: '.$message['from'].'<br>';
    print 'Time: '.$message['created_at']->format('Y-m-d H:i:s').'<br/>';
    print $message['message'].'<br>';
    print '<br><br>';
}
