<?php

include __DIR__.'/links.html' ?>

<br>
<br>
<?php

if ($created) {
    print 'User successfully created<br><br>';
}

?>

<form action="/users/create" method="post">
    <input name="first_name" placeholder="Please enter first name" type="text"/>
    <br>
    <br>
    <input name="age" placeholder="Please enter age" type="text">
    <br>
    <br>
    <input type="submit" value="Create">
</form>

