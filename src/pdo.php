<?php
/**
 * Created by PhpStorm.
 * User: Noutcha
 * Date: 08/01/2019
 * Time: 16:05
 */

$pdo = new PDO('mysql:host=iim_mysql', 'root', 'root');
$databases = $pdo->query('SHOW DATABASES')->fetch(PDO::FETCH_ASSOC);

print_r($databases);