<?php
$id = $_POST['taskId'];
require 'getTaskInfo.php';
?>
<form onsubmit="updateTask(<?= $id ?>);">
    <div class="form-group">
        <label class="font-weight-bold" for="taskName">Task name</label>
        <input required class="form-control" type="text" id="taskName" value="<?= $name ?>" name="taskName">
    </div>
    <div class="form-group">
        <label class="font-weight-bold" for="taskText">Task text</label>
        <input required class="form-control" type="text" id="taskText" value="<?= $text ?>" name="taskText">
    </div>
    <div class="text-center">
        <input type="submit" value="Update" class="btn btn-success">
        <button type="button" onclick="$('.tasks').load('../src/getTasks.php');" class="btn btn-danger">Cancel</button>
    </div>
</form>