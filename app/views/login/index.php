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
                    <form action="home.html" class="form">
                        <div class="form-group">
                            <span class="flaticon-education"></span>
                            <!-- <input type="text" placeholder="username"> -->
                            <select name="" id="">
                                <option value="">Department</option>
                                <option value="">BSCE</option>
                                <option value="">BSEE</option>
                                <option value="">BSECE</option>
                                <option value="">BSCpE</option>
                                <option value="">BSME</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <span class="flaticon-lock"></span>
                            <input type="password" placeholder="password">
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