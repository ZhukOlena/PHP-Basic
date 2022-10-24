<?php

include  __DIR__.'/links.html';

if ($created) {
    print '<br>User successfully created<br><br>';
}

?>

<form action="/contacts/create" method="post">
    <h2>Your Phone</h2>
    <input name="phone" placeholder="Please enter your phone number" type="int"/>
    <br>
    <br>
    <h2>Your address</h2>
    <input name="address" placeholder="Please enter your address" type="text">
    <br>
    <br>
    <h2>Your email</h2>
    <input name="email" placeholder="Please enter email" type="text">

    <br>
    <br>
    <input type="submit" value="Create">

</form>

