<?php

session_start(); // function start (mulai) source code.

session_unset("user"); // untuk menghapus variabel pada session.

header("Location: index.php"); // untuk mengarahkan ke laman index setelah user log out.