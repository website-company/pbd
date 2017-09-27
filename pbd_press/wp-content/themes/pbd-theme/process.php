<?php
if(isset($_POST['submit'])) : die();
    function check_if_empty($data){
        $errors = array();
        foreach ($data as $key => $item) {
            if(empty($_POST[$key])):
                $errors[] = $item;
                return $errors;
            endif;
        }
        return false;
    }
    $post_check = array(
        $_POST['name'] => 'Please enter your name'
    );
    $post_check_result = check_if_empty($post_check);
    print_r($post_check_result);
endif;
