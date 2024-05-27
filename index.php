<?php
include 'src/model/model.php';


getTrails();

include 'src/view/homepage.php';

require_once 'src/controller/AuthController.php';

$authController = new AuthController();
$authController->showSubscriptionForm();
