<?php

include_once './services/SimpleServices/SimpleTaskService.php';
include_once './objects/task.php';
$services = new SimpleTaskService();

$tasks = $services->getTasks(2);
?>
<table class="table">
    <tr class="thead">
        <th class="th">ID</th>
        <th class="th">Task</th>
        <th class="th">Deadline</th>
    </tr>
<?php

foreach($tasks as $key=>$task){
    echo ("<tr>");
    echo ("<td class=\"td\">" . $task->getId() . "</td>");
    echo ("<td class=\"td\">" . $task->getName() . "</td>");
    echo ("<td class=\"td\">" . $task->getDeadline() . "</td>");
    echo ("</tr>");
}
?>
</table>