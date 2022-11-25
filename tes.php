<?php
require_once  './vendor/autoload.php';

use Satrio\Librarycomposer\Customer;


$data = new Customer("satrio");
echo  $data->Hello();
echo  "qq";