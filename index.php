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
}

?>
<div class="main">
    <div class='profile'>
        <div class="title">Profile</div>
            <form method="post">
                <label class='label'>Task name</label>
                <input name="name" id="name" type='text' />
                <label class='label'>Deadline</label>
                <input name="date" id="date" type='date'/>
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