<?php

class AdminModel extends Database
{
    public function login($username, $password)
    {
        $stmt = $this->pdo->prepare(
            "SELECT * FROM users WHERE username = ?"
        );
        $stmt->execute([$username]);
        $user = $stmt->fetch();

        if ($user && $password === $user['password']) {
            return $user;
        }

        // if ($user && password_verify($password, $user['password'])) {
        //     return $user;
        // }

        return false;
    }
}
