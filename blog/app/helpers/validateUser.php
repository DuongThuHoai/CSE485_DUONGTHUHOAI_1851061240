<?php

function validateUser($user)
{
    $errors = array();

    if (empty($user['username'])) {
        array_push($errors, 'Nhập username ');
    }

    if (empty($user['email'])) {
        array_push($errors, 'Nhập email');
    }

    if (empty($user['password'])) {
        array_push($errors, 'Nhập mật khẩu');
    }

    if ($user['passwordConf'] !== $user['password']) {
        array_push($errors, 'Mật khẩu không khớp');
    }

    // $existingUser = selectOne('users', ['email' => $user['email']]);
    // if ($existingUser) {
    //     array_push($errors, 'Email already exists');
    // }

    $existingUser = selectOne('users', ['email' => $user['email']]);
    if ($existingUser) {
        if (isset($user['update-user']) && $existingUser['id'] != $user['id']) {
            array_push($errors, 'Đã tồn tại');
        }

        if (isset($user['create-admin'])) {
            array_push($errors, 'Đã tồn tại');
        }
    }

    return $errors;
}


function validateLogin($user)
{
    $errors = array();

    if (empty($user['username'])) {
        array_push($errors, 'Username is required');
    }

    if (empty($user['password'])) {
        array_push($errors, 'Password is required');
    }

    return $errors;
}