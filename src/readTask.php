<?php
    $id = $_POST['taskId'];

    include 'getTaskInfo.php';
?>
<h3 class="taskName"><?= $name ?></h3>
<div class="mb-4">
    <button type="button" onclick="$('.tasks').load('../src/getTasks.php');" class="btn btn-primary text-white">Back</button>
    <button type="button" onclick="$('.tasks').load('../src/updateTaskForm.php', {taskId: <?= $id ?>});" class="btn btn-warning text-white">Update</button>
    <button type="button" onclick="deleteTask(<?= $id ?>);" class="btn btn-danger text-white">Delete</button>
</div>
<table class="table table-bordered table-striped">
    <tr>
        <td>Id</td>
        <td><?= $id ?></td>
    </tr>
    <tr>
        <td>Name</td>
        <td><?= $name ?></td>
    </tr>
    <tr>
        <td>Text</td>
        <td style="word-wrap: break-word;min-width: 160px;max-width: 160px;"><?= $text ?></td>
    </tr>
    <tr>
        <td>Status</td>
        <td><?= $status ?></td>
    </tr>
    <tr>
        <td>Created_at</td>
        <td><?= $created_at ?></td>
    </tr>
    <tr>
        <td>Updated_at</td>
        <td><?= $updated_at ?></td>
    </tr>
</table>