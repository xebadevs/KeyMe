<?php
$dotenv = parse_ini_file('../.env');

// environment
if ($dotenv['ENV_SETTLED'] === 'PROD') {
    $connection = mysqli_connect(
        $dotenv['PROD_HOST'],
        $dotenv['PROD_USERNAME'],
        $dotenv['PROD_PASSWORD'],
        $dotenv['PROD_DB_NAME'],
        $dotenv['PROD_PORT']
    );
} else {
    $connection = mysqli_connect(
        $dotenv['LOCAL_HOST'],
        $dotenv['LOCAL_USERNAME'],
        $dotenv['LOCAL_PASSWORD'],
        $dotenv['LOCAL_DB_NAME'],
        $dotenv['LOCAL_PORT']
    );
}
