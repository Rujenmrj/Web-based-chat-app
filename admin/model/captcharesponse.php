<?php
require_once '..\..\vendor\autoload.php';
$secret = '6Ldxc-MpAAAAAN2pumz9QgdloEJxGc_kHX4C-pbF';
$recaptcha = new \ReCaptcha\ReCaptcha($secret);
$gRecaptchaResponse = $_POST['g-recaptcha-response'];
$resp = $recaptcha->setExpectedHostname('localhost')->verify($gRecaptchaResponse, $_SERVER['REMOTE_ADDR']);
if ($resp->isSuccess()) {
    header('Location: ../view/index.php');
} else {
    echo 'Captcha failed';
    $errors = $resp->getErrorCodes();
}
?>