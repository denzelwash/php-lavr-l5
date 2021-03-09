<?php

unset($_SESSION['token']);
setcookie('token', '', time() - 1, '/');
header('Location: ' . BASE_URL);
exit();
