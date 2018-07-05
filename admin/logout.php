<?php

session_destroy();
session_unset();
foreach ($_COOKIE as $key => $ck) {
    setcookie($key, $ck, time() - 3600); //seta o cookie com vencimento no passado, invalidando-o
}
header('Location: ./login.html');
