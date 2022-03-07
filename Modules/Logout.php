<?php
function logOut(){
    $_SESSION = array();
    session_destroy();
}
