<?php
    setcookie('login', '', time() - 3600 * 24 * 30, '/');
    echo true;
?>