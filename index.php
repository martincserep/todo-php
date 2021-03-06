<?php
$title = 'ToDo';
include_once 'header.php';

$date = new DateTime();
$today = $date;



if($_POST){
    include_once './services/SimpleServices/SimpleTaskService.php';
    $services = new SimpleTaskService();

    $uid = 2;
    $name=$_POST['name'];
    $date = $_POST['date'];

    $services ->addTask($uid,$name,$date);
    header('location:index.php');

}

?>
<div class="main">
    <div class='profile'>
        <div class="title">Profile</div>
            <form method="post">
                <label class='label'>Task name</label>
                <input value="" name="name" id="name" type='text' required />
                <label class='label'>Deadline</label>
                <input value="" name="date" id="date" type='date' required/>
                <input type='submit' value='Send' />
            </form>
        <button>Logout</button>
    </div>

    <div class='tasks'>
        <div class="title">
            ToDo
        </div>
        <div class="list">
            <?php include_once "./todolist.php" ?>
        </div>
    </div>
</div>
<?php
include_once 'footer.php';
?>