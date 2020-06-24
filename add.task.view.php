<?php require_once 'inc/top.inc.php'; ?>
<?php require_once 'inc/navbar.inc.php'; ?>

<?php $results = $category->getCategory(); ?>

<div class="container-fluid">
    <h3 class="text-center">Add task</h3>
    <br>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form action="add.task.php" method="POST">
                <input type="text" name="task" class="form-control" placeholder="Enter task" required><br>
                <select name="category" class="form-control">
                    <option>Select category...</option>
                <?php foreach($results as $result) : ?>
                    <option value="<?php echo $result->id; ?>"><?php echo $result->category_name; ?></option>
                <?php endforeach; ?>
                </select><br>
                <input type="date" name="date" class="form-control"><br>
                <input type="hidden" name="user_id" value="<?php echo $_SESSION['loggedUser']->id; ?>">
                <button type="submit" class="btn btn-success form-control" name="addTaskBtn">Add task</button>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>

<?php require_once 'inc/bottom.inc.php'; ?>