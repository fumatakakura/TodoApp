<?php

session_start();
//セッションにあるログイン情報を覇気
session_destroy();

//unset($_SETTION['user']);
header('Location: signup.html');