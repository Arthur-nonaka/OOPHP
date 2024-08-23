<?php

class UserMangaer {
    private $users = [];

    public function createUser($name, $email) {
        $users = [ 'name' => $name,
                    'email' => $email
    ];
    $this->users[] = $user;
    return $user;
    }

    public function getUserByEmail($email) {
        foreach ($this->users as $user) {
            if($user['email'] === $email) {
                return $user;
            }
        }
        return null;
    }

    public function registerUser($name, $email) {
        if($this->getUserByEmail($email) === null) {
            return $this->createUser($name, $email);
        }
        return null;
    } 
}

$userManager = new UserManager();
$userManager->registerUser("Jhon", "jhon@gmail.com");
$user = $userManager->getUserByEmail("jhon@gmail.com");
if($user !== null) {
    echo "User found: " . $user['name'];
}
else {
    echo "User not found";
}