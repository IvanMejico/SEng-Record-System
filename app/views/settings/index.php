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
                                <div class="form-content">
                                    <div class="form-group">
                                        <label for="">Current Password</label>
                                        <div>
                                            <input class="form-field" type="password">                                        
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">New Password</label>
                                        <div>
                                            <input class="form-field" type="password">                                        
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Confirm Password</label>
                                        <div>
                                            <input class="form-field" type="password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-submit" type="submit">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php $this->end() ?>