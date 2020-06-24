<?php require_once 'inc/top.inc.php'; ?>
<?php require_once 'inc/navbar.inc.php'; ?>

<?php
$id = $_SESSION['loggedUser']->id;
$tasks = $task->getDailyTasks($id); ?>

<div class="container-fluid">
    <h1 class="text-center">Welcome <?php echo $_SESSION['loggedUser']->username; ?></h1>
    <br>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <a href="add.task.view.php" class="btn btn-primary form-control">Add task</a>
            <br><br>
            <h3 class="text-center">Your tasks for today</h3>
            <br>
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
                <?php foreach($tasks as $task) : ?>
                    <tr id="status">
                        <td><?php echo $task->task; ?></td>
                        <td><?php echo $task->category_name; ?></td>
                        <td><?php echo $task->date; ?></td>
                        <td><button class="btn btn-success" id="isDone">Done</button> <button class="btn btn-warning" id="isStarted">Started</button> <button class="btn btn-danger">Undone</button></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
            <br>
            <a href="all.task.view.php" class="btn btn-success form-control">View your tasks</a>
        </div>
        
        <div class="col-md-3"></div>
    </div>
</div>
<br>


<?php require_once 'inc/bottom.inc.php'; ?>