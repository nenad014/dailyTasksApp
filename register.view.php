<?php require_once 'inc/top.inc.php'; ?>
<?php require_once 'inc/navbar.inc.php'; ?>

<div class="container">
    <h1 class="text-center">REGISTER</h1>
    <br>
    <div class="row">
        <div class="col-6 offset-3">
            <form action="register.php" method="POST">
                <input type="text" name="username" class="form-control" placeholder="Please enter your username" required><br>
                <input type="email" name="email" class="form-control" placeholder="Please enter your email" required><br>
                <input type="password" name="password" class="form-control" placeholder="Please enter your password" required><br>
                <button type="submit" class="btn btn-primary form-control" name="regBtn">REGISTER</button>
            </form>
        </div>
    </div>
</div>

<?php require_once 'inc/bottom.inc.php'; ?>