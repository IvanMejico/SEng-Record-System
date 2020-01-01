<?php $this->start('head') ?>
<link rel="stylesheet" href="<?=PROOT?>assets/styles/admin_login.css">
<link rel="shortcut icon" type="image/x-icon" href="<?=PROOT?>assets/images/senglogo.png" />
<?php $this->end() ?>

<?php $this->start('body') ?>
<div class="bg"></div>
<div class="grid">
    <form method="POST" class="form login">
        <header class="login__header">
            <h3 class="login__title">Administrator Login</h3>
        </header>
        <div class="login__body">
            <div class="form__field">
            <input type="text" placeholder="Username" required>
            </div>
            <div class="form__field">
            <input type="password" placeholder="Password" required>
            </div>
        </div>
        <footer class="login__footer">
            <input type="submit" value="Login">
            <p><span class="icon icon--info">?</span><a href="#">Forgot Password</a></p>
        </footer>
    </form>
</div>
<?php $this->end() ?>