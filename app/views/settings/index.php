<?php
use core\FH;
?>

<?php $this->start('head') ?>
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
    <main class="ttr-main">
        <div class="container">
            <!-- Breadcrumb -->
            <div class="db-breadcrumb">
                <h4 class="breadcrumb-title">Dashboard</h4>
                <ul class="db-breadcrumb-list">
                    <li>
                        <a href=""><i class="flaticon-edit"></i>Settings</a>
                    </li>
                    <li>
                        <a href=""><?=$this->pageTitle?></a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="grid-panel">
                    <div class="panel-container">
                        <div class="ttr-section-head">
                            <h2 class="section-title"><?=$this->pageTitle?></h2>
                        </div>
                        <div id="ttr-panel">
                            <div class="panel-heading">
                            </div>
                            <div class="panel-content">
                                <?= FH::displayErrors($this->displayErrors, false) ?>
                                <?= $this->_message ?>
                                <form method="POST">
                                    <div class="form-content">
                                        <?= FH::inputBlock('password',
                                            'Current Password',
                                            'old_pwd',
                                            '',
                                            ['class'=>'form-field'],
                                            ['class'=>'form-group']
                                        );
                                        ?>

                                        <?= FH::inputBlock('password',
                                            'New Password',
                                            'new_pwd',
                                            '',
                                            ['class'=>'form-field'],
                                            ['class'=>'form-group']
                                        );
                                        ?>

                                        <?= FH::inputBlock('password',
                                            'Confirm Password',
                                            'confirm',
                                            '',
                                            ['class'=>'form-field'],
                                            ['class'=>'form-group']
                                        );
                                        ?>
                                        <div class="form-group">
                                            <button class="btn btn-submit" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php $this->end() ?>