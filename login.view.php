<?php require_once 'inc/top.inc.php'; ?>
<?php require_once 'inc/navbar.inc.php'; ?>

<div class="container">
    <h1 class="text-center">LOGIN</h1>
    <br>
    <div class="row">
        <div class="col-6 offset-3">
            <form action="login.php" method="POST">
                <input type="email" name="email" class="form-control" placeholder="Please enter your email" required><br>
                <input type="password" name="password" class="form-control" placeholder="Please enter your password" required><br>
                <button type="submit" class="btn btn-primary form-control" name="logBtn">LOGIN</button>
            </form>
        </div>
    </div>
</div>

<?php require_once 'inc/bottom.inc.php'; ?>