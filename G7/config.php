<?php
include_once 'sql.php';
session_start();


if (isset($_POST['login'])) {
    $user_n = $_POST['username'];
    $user_p = $_POST['password'];

    $sql = mysqli_query($con, "SELECT * FROM login Where username = '$user_n'");
    $fetcher = mysqli_fetch_assoc($sql);
    $user_p_fetch = $fetcher['password'];
    $id_fetchecd = $fetcher['id'];

    if ($user_p === $user_p_fetch) {
        $_SESSION['user_id'] = $id_fetchecd;
        header('location: customer_dash.php');
    } else {
        header('location: index.php?notif=login_error');
    }
}



// if (isset($_POST['login'])) {
//     $username_input = $_POST['username'];
//     $password_input = $_POST['password'];

//     $sql = mysqli_query($con, "SELECT * FROM `login` WHERE username = '$username_input'");
//     $sql_fetch = mysqli_fetch_assoc($sql);
//     $password_fetch = $sql_fetch['username' . 'password'];
//     $id_fetch = $sql_fetch['id'];

//     if ($password_input == $password_fetch) {
//         $_SESSION['user_id'] = $id_fetch;
//         header('location: customer_dash.php');
//     } else {
//         header('location: index.php?notif=login_error');
//     }
// }
if (isset($_POST['Reg_submit'])) {
    $usn = $_POST['usn'];
    $passwd = $_POST['passwd'];
    $fname = $_POST['fname'];
    $lname = $_POST['fname'];
    $bday = $_POST['bday'];
    $email = $_POST['email'];
    $cnum = $_POST['cnumber'];
    //address
    $st = $_POST['st'];
    $brgy = $_POST['brgy'];
    $city = $_POST['city'];
    $prv = $_POST['prv'];
    $zpc = $_POST['zpc'];

    mysqli_query($con, "INSERT INTO `user`( `lname`, `fname`, `birthdate`, `email`, `contact_no`, `gender_id`, `address_id`, `login_id`) VALUES ('$lname','$fname','$bday','$email','$cum','','','')");



    header('location: index.php?notif=success');
}
