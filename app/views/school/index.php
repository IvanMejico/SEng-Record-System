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
                            <a href="<?=PROOT?>manageschool/edit_school_info"><i class="flaticon-pencil"></i></a>
                        </span>
                    </div>
                    <div class="display-flex-reverse">
                        <div class="panel-logo-box">
                            <img src="assets/images/senglogo.png" alt="" width="150px" height="150px">
                        </div>
                        <div class="panel-main">
                            <table>
                                <tr>
                                    <td><strong>Name:</strong></td>
                                    <td><em><b>Marinduque State College, School of Engineering</b></em></td>
                                </tr>
                                <tr>
                                    <td><strong>Mission:</strong></td>
                                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem autem nihil aliquid eligendi. Optio, pariatur velit possimus repellendus veritatis doloremque neque voluptas consectetur, dolorem expedita minus! Consectetur quis dolorem harum architecto labore eius animi illum incidunt saepe? Omnis, excepturi consequatur eaque placeat harum eos, ea ex nihil quam corrupti doloremque.</td>
                                </tr>
                                <tr>
                                    <td><strong>Vision:</strong></td>
                                    <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis hic mollitia quibusdam soluta placeat impedit qui atque a nulla exercitationem voluptatem, ex optio doloremque? Obcaecati beatae quasi expedita veniam a.</td>
                                </tr>
                                <tr>
                                    <td><strong>Goal:</strong></td>
                                    <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat quidem, autem dignissimos ipsa blanditiis laudantium eius illo. Voluptatibus distinctio maiores libero, recusandae placeat officiis magni, optio molestiae, impedit facilis consequatur blanditiis ducimus sunt amet rerum iste earum ratione voluptas? Obcaecati.</td>
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
                                        <th>Shorthand</th>
                                        <th>Name</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <img src="assets/images/orgs/PICE.png" alt="pice" width="30px" height="30px">
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
                                            <img src="assets/images/orgs/IiEE.png" alt="pice" width="30px" height="30px">
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
                                            <img src="assets/images/orgs/IECEP.png" alt="pice" width="30px" height="30px">
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
                                            <img src="assets/images/orgs/ICPEP.png" alt="pice" width="30px" height="30px">
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
                                            <img src="assets/images/orgs/PSME.png" alt="pice" width="30px" height="30px">
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