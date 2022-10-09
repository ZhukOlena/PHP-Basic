<?php include __DIR__.'/links.html' ?>

<?php

print '<br>';
foreach ($messages as $message) {
    print 'From: '.$message['from'].'<br>';
    print $message['title'].'<br>';
    print $message['message'].'<br>';
    print '<br><br>';
}
?>

