<?php


function validatePost($post)
{
    $errors = array();

    if (empty($post['title'])) {
        array_push($errors, 'Nhập tiêu đề');
    }

    if (empty($post['body'])) {
        array_push($errors, 'Nhập nội dung');
    }

    if (empty($post['topic_id'])) {
        array_push($errors, 'Mời chọn chủ đề');
    }

    $existingPost = selectOne('posts', ['title' => $post['title']]);
    if ($existingPost) {
        if (isset($post['update-post']) && $existingPost['id'] != $post['id']) {
            array_push($errors, 'Bài viết đã tồn tại');
        }

        if (isset($post['add-post'])) {
            array_push($errors, 'Tiêu đề đã tồn tại');
        }
    }

    return $errors;
}