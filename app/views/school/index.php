<?php $this->start('body') ?>
    <main class="ttr-main">
        <div class="container">
            <!-- Breadcrumb -->
            <div class="db-breadcrumb">
                <h4 class="breadcrumb-title">Dashboard</h4>
                <ul class="db-breadcrumb-list">
                    <li>
                        <a href=""><i class="flaticon-parthenon-1"></i>Manage School</a>
                    </li>
                    <li>
                        <a href=""><?=$this->pageTitle?></a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <!-- School Information Panel -->
                <div class="ttr-main-panel dark-background">
                    <div class="panel-buttons">
                        <span>
                            <a href="<?=PROOT?>manageschool/edit_school_info/<?=$this->school->id?>"><i class="flaticon-pencil"></i></a>
                        </span>
                    </div>
                    <div class="display-flex-reverse">
                        <div class="panel-logo-box">
                            <img src="<?=PROOT?>public/uploads/logo/<?=$this->school->logo?>" alt="" width="150px" height="150px">
                        </div>
                        <div class="panel-main">
                            <table>
                                <tr>
                                    <td><strong>Name:</strong></td>
                                    <td><em><b><?=$this->school->name?></b></em></td>
                                </tr>
                                <tr>
                                    <td><strong>Mission:</strong></td>
                                    <td><?=$this->school->mission?></td>
                                </tr>
                                <tr>
                                    <td><strong>Vision:</strong></td>
                                    <td><?=$this->school->vision?></td>
                                </tr>
                                <tr>
                                    <td><strong>Goal:</strong></td>
                                    <td><?=$this->school->goal?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            

            <!-- Offered Programs Panel -->
            <div class="row">
                <div class="panel-container full-width">
                    <div class="ttr-section-head">
                        <h2 class="section-title">Programs</h2>
                        <a class="section-button" href="manageprograms/add_program">Add Program</a>
                    </div>
                    <div id="ttr-panel">
                        <div class="panel-heading"></div>
                        <div class="panel-content">
                            <table class="ttr-table">
                                <thead>
                                    <tr>
                                        <th>Logo</th>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <img src="<?=PROOT?>assets/images/orgs/PICE.png" alt="pice" width="30px" height="30px">
                                        </td>
                                        <td>BSCE</td>
                                        <td>BS Civil Engineering</td>
                                        <td>
                                            <div class="table-action">
                                                <a class="table-edit"><i class="flaticon-pencil-edit-button"></i></a><a class="table-delete"><i class="flaticon-garbage"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="<?=PROOT?>assets/images/orgs/IiEE.png" alt="pice" width="30px" height="30px">
                                        </td>
                                        <td>BSEE</td>
                                        <td>BS Electrical Engineering</td>
                                        <td>
                                            <div class="table-action">
                                                <a class="table-edit"><i class="flaticon-pencil-edit-button"></i></a><a class="table-delete"><i class="flaticon-garbage"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="<?=PROOT?>assets/images/orgs/IECEP.png" alt="pice" width="30px" height="30px">
                                        </td>
                                        <td>BSECE</td>
                                        <td>BS Electronics and Communications Engineering</td>
                                        <td>
                                            <div class="table-action">
                                                <a class="table-edit"><i class="flaticon-pencil-edit-button"></i></a><a class="table-delete"><i class="flaticon-garbage"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="<?=PROOT?>assets/images/orgs/ICPEP.png" alt="pice" width="30px" height="30px">
                                        </td>
                                        <td>BSCpE</td>
                                        <td>BS Computer Engineering</td>
                                        <td>
                                            <div class="table-action">
                                                <a class="table-edit"><i class="flaticon-pencil-edit-button"></i></a><a class="table-delete"><i class="flaticon-garbage"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="<?=PROOT?>assets/images/orgs/PSME.png" alt="pice" width="30px" height="30px">
                                        </td>
                                        <td>BSCE</td>
                                        <td>BS Mechanical Engineering</td>
                                        <td>
                                            <div class="table-action">
                                                <a class="table-edit"><i class="flaticon-pencil-edit-button"></i></a><a class="table-delete"><i class="flaticon-garbage"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
<?php $this->end() ?>