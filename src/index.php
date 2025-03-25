<?php
require __DIR__ . '/../vendor/autoload.php';
use App\Arale;
use App\Senbei;

$a = new Arale('Arale Norimaki', 50);
$b = new Senbei('Senbei Norimaki', 70);

include __DIR__ . '/../views/home.php';

