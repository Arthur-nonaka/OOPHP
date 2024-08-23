<?php
require_once "User.php";
require_once "UserRepository.php";
require_once "UserService.php";

$userRepository = new UserRepository();
$userService = new UserService($userRepository);

$userService->registerUser("Arthur", "arthur@gmail.com");
$user = $userService->registerUser("Miau", "miau@gmail.com");

$getUser = $userRepository->getUserByEmail("miau@gmail.com");
if($getUser  !== null) {
    echo "User Found: " . $getUser->getName();
}
else {
    echo "User Not Fonud";
}
