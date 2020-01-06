<?php
    use Core\FH;
?>

<?php $this->start('head') ?>
<link rel="stylesheet" href="<?=PROOT?>assets/styles/login.css">
<link rel="stylesheet" href="<?=PROOT?>assets/font/flaticon.css">
<link rel="shortcut icon" type="image/x-icon" href="<?=PROOT?>assets/images/senglogo.png" />
<?php $this->end() ?>

<?php $this->start('body') ?>
<div class="main">
    <div class="img-left"></div>
    <div class="txt-right">
        <div class="login-form">
            <div class="login-school-logo">
                <img src="assets/images/senglogo.png" width="120px" height="120px">
            </div>
            <div>
                <div>
                    <form class="form" action="" method="post">
                        <?= FH::csrfInput() ?>
                        <div class="form-group">
                            <span class="flaticon-education"></span>
                            <!-- <input type="text" placeholder="username"> -->
                            <select name="username" id="">
                                <?php // TODO: Generate these options automatically. ?>
                                <option selected disabled>select department</option>
                                <option value="bsce">BSCE</option>
                                <option value="bsee">BSEE</option>
                                <option value="bsece">BSECE</option>
                                <option value="bscpe">BSCpE</option>
                                <option value="bsme">BSME</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <span class="flaticon-lock"></span>
                            <input type="password" name="password" placeholder="password">
                        </div>
                        <div class="button">
                            <input type="submit" value="Log In">
                        </div>                            
                    </form>
                    <hr>
                    <div>
                        <a href="<?=PROOT?>login/admin"">Log in as administrator</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->end() ?>