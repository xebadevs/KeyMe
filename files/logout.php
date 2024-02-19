<?php

require_once('session.php');
session_unset();
header('location:../index.php');
