<?php
    use Core\FH;
?>

<?php $this->start('head') ?>
<link rel="stylesheet" href="<?=PROOT?>assets/styles/login.css">
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
        border-color: rgb(219, 78, 78) !important;
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
<div class="main">
    <div class="img-left"></div>
    <div class="txt-right">
        <div class="login-form">
            <div class="login-school-logo">
                <img src="<?=PROOT?>assets/images/senglogo.png" width="120px" height="120px">
            </div>
            <div>
                <div>
                    <form class="form" method="post">
                        <?= FH::csrfInput() ?>
                        <?= FH::displayErrors($this->displayErrors) ?>
                        <div class="form-group">
                            <span class="flaticon-education"></span>
                            <!-- <input type="text" placeholder="username"> -->
                            <select name="username" id="username">
                                <?php
                                    if($this->login->username) {
                                        $html .= '<script>document.addEventListener("DOMContentLoaded", function(){
                                            option = document.getElementById("'.$this->login->username.'").selected = true;
                                        });</script>';
                                        echo $html;
                                    }
                                    ?>
                                <?php // TODO: Generate these options automatically. ?>
                                <option selected disabled>select department</option>
                                <option id="bsce" value="bsce">BSCE</option>
                                <option id="bsee" value="bsee">BSEE</option>
                                <option id="bsece" value="bsece">BSECE</option>
                                <option id="bscpe" value="bscpe">BSCpE</option>
                                <option id="bsme" value="bsme">BSME</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <span class="flaticon-lock"></span>
                            <input type="password" name="password" id="password" placeholder="password">
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