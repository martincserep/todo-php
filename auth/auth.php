<?php
$title = 'Login | ToDo';
include_once '../header.php';

$context_path = "/";
$home_url="http://localhost" . $context_path;


if($_POST){
    include_once "../services/SimpleServices/SimpleUserService.php";

    $services = new SimpleUserService();

    // check if email and password are in the Database
    $username=$_POST['username'];
    $password = $_POST['password'];

    $userExist = $services->checkUserExist($username);


    $user = $services->getUserByUsername($username);

    //$user->setStatus(1);
    //if ($email_exists && password_verify($_POST['password'], $user->getPassword()) && $user->getStatus()){

    // validate login
    if (!$userExist) {
        $services -> registerUser($username, $password);
    }
    //password_verify( )
    if ($userExist && password_verify($_POST['password'], $user->getPassword()) && $user !== null) {

        // if it is, set the session value to true
        $_SESSION['logged_in'] = true;
        $_SESSION['user_id'] = $user->getId();
        $_SESSION['username'] = htmlspecialchars($user->getUsername(), ENT_QUOTES, 'UTF-8') ;
        echo ('logged in');
    }

    // if username does not exist or password is wrong
    else{
        header("Location: {$home_url}auth/auth.php?action=incorrect");
    }
}
?>
<div class='center'>
<form class='form' method="post">
    <h2>Login to</h2>
    <h1>ToDo</h1>
    <input name='username' id='username' type='text' placeholder='username' required />
    <input name='password' id='password'  placeholder='password' type="password" required />
    <input type='submit' name= value='Send' />
    <h3>If you do not have an account, we will automatically create one. </h3>
</form>
</div>
<?php
include_once '../footer.php';
?>