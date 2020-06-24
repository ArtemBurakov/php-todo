<?php
require 'db-connect.php';

$sql = "SELECT `id`, `name`, `text`, status FROM $database";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
?>
<div class="addTask mb-3">
    <a class="btn btn-success text-white" onclick="$('.tasks').load('../web/addTask.html');">Add task +</a>
</div>
<div class="table-responsive">
    <table class="table table-striped table-bordered">
        <thead class="thead-light">
            <tr>
                <td scope="col">#</td>
                <td scope="col">Id</td>
                <td scope="col">Name</td>
                <td scope="col">Text</td>
                <td scope="col">Status</td>
                <td scope="col">Actions</td>
            </tr>
        </thead>
<?php
$i = 1;
while($row = $result->fetch_assoc()) {
?>
        <tr>
            <td class="align-middle"><?= $i ?></td>
            <td class="align-middle"><?= $row['id'] ?></td>
            <td class="align-middle"><?= $row['name'] ?></td>
            <td class="align-middle" style="word-wrap: break-word;min-width: 160px;max-width: 160px;"><?= $row['text'] ?></td>
            <td class="align-middle"><?= $row['status'] ?></td>
            <td>
                <button type="button" class="btn btn-primary mb-1" onclick="$('.tasks').load('../src/readTask.php', {taskId: <?= $row['id'] ?>});">Read</button>
                <button type="button" class="btn btn-warning text-white mb-1" onclick="$('.tasks').load('../src/updateTaskForm.php', {taskId: <?= $row['id'] ?>});">Update</button>
                <button type="button" class="btn btn-danger mb-1" onclick="deleteTask(<?= $row['id'] ?>);">Delete</button>
            </td>
        </tr>
<?php
$i++;
        }
?>
    </table>
</div>
<?php
} else {
?>
<div class="addTask mb-3">
    <a class="btn btn-success text-white" onclick="$('.tasks').load('addTask.html');">Add task +</a>
</div>
<h4 class="text-center" ><?= 'You have 0 tasks' ?></h4>

<?php
}
$conn->close();
?>
