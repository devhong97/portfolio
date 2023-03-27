<?
    $register_data = [
        'user_id'           => $user_id,
        'password'          => $password,
        'user_name'         => $user_name,
        'gender'            => $gender,
        'email'             => $email,
        'user_tel_number'   => $user_tel_number,
        'user_grade'        => "1",
        'visit_day'         => date('Y-m-d H:i:s'),
        'reg_date'          => date("Y-m-d H:i:s"),
        'ip'                => $_SERVER["REMOTE_ADDR"],
    ];
?>