<?php

function validateTopic($topic)
{
    $errors = array();

    if (empty($topic['name'])) {
        array_push($errors, 'Nhập tên');
    }

    $existingTopic = selectOne('topics', ['name' => $post['name']]);
    if ($existingTopic) {
        if (isset($post['update-topic']) && $existingTopic['id'] != $post['id']) {
            array_push($errors, 'Tên đã được dử dụng');
        }

        if (isset($post['add-topic'])) {
            array_push($errors, 'Tên đã được dử dụng');
        }
    }

    return $errors;
}
