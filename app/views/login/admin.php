<?php 
    use Core\FH;
?>

<?php $this->start('head') ?>
<link rel="stylesheet" href="<?=PROOT?>assets/styles/admin_login.css">
<link rel="shortcut icon" type="image/x-icon" href="<?=PROOT?>assets/images/senglogo.png" />
<style>
    .message {
        margin-bottom: 10px;
        border-radius: 3px;
        text-align: left;
        background-color: rgb(238, 194, 194);
        color: red;
        font-size: .9em;
        border-radius: 5px;
        display: none;
    }

    .message ul {
        margin: 0;
        padding: 15px 20px;
        list-style: none;
    }
    .has-errors {
        border-bottom: 1px solid red;
    }
</style>
<?php $this->end() ?>

<?php $this->start('body') ?>
<div class="bg"></div>
<div class="grid">
    <form method="POST" class="form login">
        <?= FH::csrfInput() ?>
        <header class="login__header">
            <h3 class="login__title">Administrator Login</h3>
        </header>
        <div class="login__body">
            <?= FH::displayErrors($this->displayErrors) ?>
            <div class="form__field">
                <input type="text" id="username" name="username" placeholder="Username" value="<?= $this->login->username ?>">
            </div>
            <div class="form__field">
                <input type="password" id="password" name="password" placeholder="Password">
            </div>
        </div>
        <footer class="login__footer">
            <input type="submit" value="Login">
        </footer>
    </form>
</div>
<?php $this->end() ?>