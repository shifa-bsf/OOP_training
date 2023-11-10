<?php
// mypage.php
require('vendor/autoload.php');

$shifa = new Shifa\Person('shifa');
$staff = new Shifa\Staff([$shifa]);
$myshop = new Shifa\Business($staff);
$myshop->hire(new Shifa\Person('riya'));

print_r($myshop->getStaffs());
