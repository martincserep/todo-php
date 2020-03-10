<?php
$title = 'ToDo';
include_once 'header.php';

$date = new DateTime();
$today = $date;


?>
<div class="main">
    <div class='profile'>
        <div class="title">Profile</div>
            <form>
                <label class='label'>Task name</label>
                <input type='text' />
                <label class='label'>Deadline</label>
                <input min=<? echo new DateTime("Y-m-d") ?> type='date'/>
                <input type='submit' value='Send' />
            </form>
        <button>Logout</button>
    </div>

    <div class='tasks'>
        <div class="title">
            ToDo
        </div>
        <div class="list">

            <?php echo($today);
            //  include_once "./todolist.php" ?>
        </div>
    </div>
</div>
<?php
include_once 'footer.php';
?>