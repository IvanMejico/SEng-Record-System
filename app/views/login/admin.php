<?php 
    use Core\FH;
?>

<?php $this->start('head') ?>
<link rel="stylesheet" href="<?=PROOT?>assets/styles/admin_login.css">
<link rel="stylesheet" href="<?=PROOT?>assets/font/flaticon.css">
<style>
    .message {
        margin-bottom: 25px;
        text-align: left;
        color: rgb(2, 90, 148);
        background-color: rgb(206, 224, 231);
        border: 1px solid rgb(104, 157, 206);
        border-radius: 5px;
        font-size: .9em;
        padding: 20px;
        position: relative;
        display: none;
    }

    .message ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .success {
        display: block;
        color: rgb(13, 117, 13);
        background-color: rgb(196, 248, 222);
        border-color: rgb(104, 197, 104);
    }

    .warning {
        display: block;
        color: rgb(197, 2, 2);
        background-color: rgb(248, 201, 201);
        border-color: rgb(245, 121, 121);
    }

    .has-errors {
        border-bottom: 1px solid rgb(219, 78, 78) !important;
    }

    .close-button {
        color: red;
        position: absolute;
        right: 5px;
        top: 5px;
        font-size: .2em;
        cursor: pointer;
    }
    .close-button:hover {
        filter: brightness(85%);
    }
    .close-button::before {
        font-size: 1.2rem;
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