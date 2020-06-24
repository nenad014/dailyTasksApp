<?php require_once 'inc/top.inc.php'; ?>
<?php require_once 'inc/navbar.inc.php'; ?>

<?php
$id = $_SESSION['loggedUser']->id;
$results = $task->getAllUserTasks($id);
?>

<div class="container-fluid">
    <h3 class="text-center">All tasks</h3>
    <br>
        <div class="col-md-8 offset-md-2">
        <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Task</th>
                        <th>Category</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($results as $task) : ?>
                    <tr id="status">
                        <td><?php echo $task->task; ?></td>
                        <td><?php echo $task->category_name; ?></td>
                        <td><?php echo $task->date; ?></td>
                        <td><button class="btn btn-success" id="isDone">Done</button> <button class="btn btn-warning" id="isStarted">Started</button> <button class="btn btn-danger">Undone</button></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
</div>

<?php require_once 'inc/bottom.inc.php'; ?>