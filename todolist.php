<?php

include_once './services/SimpleServices/SimpleTaskService.php';
include_once './objects/task.php';
$services = new SimpleTaskService();

$tasks = $services->getTasks(2);

?>
<table class="table">
    <tr class="thead">
        <th class="th">Task</th>
        <th class="th">Deadline</th>
        <th class="th">Delete</th>
    </tr>
<?php

foreach($tasks as $key=>$task){
    echo ("<tr class=\"thead\">");
    echo ("<td class=\"td\">" . $task->getName() . "</td>");
    echo ("<td class=\"td\">" . $task->getDeadline() . "</td>");
    echo ("<td class=\"td\">" . "<button>" . "Delete</button>"  . "</td>");
    echo ("</tr>");
}
// onclick=".$services->deleteTask($task->getId())."
?>
</table>
