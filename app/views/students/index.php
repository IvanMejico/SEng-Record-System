<?php $this->start('body') ?>
    <main class="ttr-main">
        <div class="container">
            <!-- Breadcrumb -->
            <div class="db-breadcrumb">
                <h4 class="breadcrumb-title">Dashboard</h4>
                <ul class="db-breadcrumb-list">
                    <li>
                        <a href=""><i class="flaticon-man-user"></i>Manage Students</a>
                    </li>
                    <li>
                        <a href=""><?=$this->pageTitle?></a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <!-- Program Information Panel -->
                <div class="ttr-section-head">
                    <h2 class="section-title"><?=$this->pageTitle?></h2>
                    <a class="section-button" href="add_student.html">Add New Student</a>
                </div>
                <div class="ttr-main-panel light-background tabbed table">
                    <div class="tab-container">
                        <ul class="tab-control">
                            <li><a>BSCE</a></li>
                            <li><a>BSEE</a></li>
                            <li><a>BSECE</a></li>
                            <li><a>BSCPE</a></li>
                            <li><a>BSME</a></li>
                        </ul>
                    </div>

                    <div class="panel-control">
                        <div class="control-group">
                            <span>Show</span>
                            <select name="" id="">
                                <option value="">10</option>
                                <option value="">20</option>
                                <option value="">30</option>
                                <option value="">40</option>
                            </select>
                            <span>entries</span>

                        </div>
                        <div class="control-group">
                            <a href="" class="btn btn-selectall">
                                <i class="flaticon-task-complete"></i> Select All
                            </a>
                            <a href="" class="btn btn-delete">
                                <i class="flaticon-minus-sign-inside-a-black-circle"></i> Delete
                            </a>
                        </div>

                        <div class="control-group">
                            <input type="text" placeholder="search">
                            <select name="" id="">
                                <option value="">Year Level</option>
                                <option value="">First Year</option>
                                <option value="">Second Year</option>
                                <option value="">Third Year</option>
                                <option value="">Fourth Year</option>
                                <option value="">Fifth Year</option>
                            </select>
                        </div>
                    </div>

                    <table class="ttr-table stud-list">
                        <thead>
                            <tr>
                                <th></th>
                                <th></th>
                                <th>ID No.</th>
                                <th>First Name</th>
                                <th>Middle Name</th>
                                <th>Last Name</th>
                                <th>Gender</th>
                                <th>Year Level</th>
                                <th>Section</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr onclick="window.location='student_information.html';">
                                <td>
                                    <input type="checkbox">
                                </td>
                                <td>
                                    <img src="<?=PROOT?>assets/images/user.svg" alt="" width="25px" height="25px">
                                </td>
                                <td>12B1192</td>
                                <td>Mark Anthony Ivan</td>
                                <td>Sotto</td>
                                <td>Mejico</td>
                                <td>Male</td>
                                <td>Fifth Year</td>
                                <td>1</td>
                                <td>
                                    <div class="table-action">
                                        <a href="add_student.html" class="table-edit"><i class="flaticon-pencil-edit-button"></i></a><a href="" class="table-delete"><i class="flaticon-garbage"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr onclick="window.location='student_information.html';">
                                <td>
                                    <input type="checkbox">
                                </td>
                                <td>
                                    <img src="<?=PROOT?>assets/images/user.svg" alt="" width="25px" height="25px">
                                </td>
                                <td>12B1192</td>
                                <td>Mark Anthony Ivan</td>
                                <td>Sotto</td>
                                <td>Mejico</td>
                                <td>Male</td>
                                <td>Fifth Year</td>
                                <td>1</td>
                                <td>
                                    <div class="table-action">
                                        <a href="add_student.html" class="table-edit"><i class="flaticon-pencil-edit-button"></i></a><a href="" class="table-delete"><i class="flaticon-garbage"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr onclick="window.location='student_information.html';">
                                <td>
                                    <input type="checkbox">
                                </td>
                                <td>
                                    <img src="<?=PROOT?>assets/images/user.svg" alt="" width="25px" height="25px">
                                </td>
                                <td>12B1192</td>
                                <td>Mark Anthony Ivan</td>
                                <td>Sotto</td>
                                <td>Mejico</td>
                                <td>Male</td>
                                <td>Fifth Year</td>
                                <td>1</td>
                                <td>
                                    <div class="table-action">
                                        <a href="add_student.html" class="table-edit"><i class="flaticon-pencil-edit-button"></i></a><a href="" class="table-delete"><i class="flaticon-garbage"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr onclick="window.location='student_information.html';">
                                <td>
                                    <input type="checkbox">
                                </td>
                                <td>
                                    <img src="<?=PROOT?>assets/images/user.svg" alt="" width="25px" height="25px">
                                </td>
                                <td>12B1192</td>
                                <td>Mark Anthony Ivan</td>
                                <td>Sotto</td>
                                <td>Mejico</td>
                                <td>Male</td>
                                <td>Fifth Year</td>
                                <td>1</td>
                                <td>
                                    <div class="table-action">
                                        <a href="add_student.html" class="table-edit"><i class="flaticon-pencil-edit-button"></i></a><a href="" class="table-delete"><i class="flaticon-garbage"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr onclick="window.location='student_information.html';">
                                <td>
                                    <input type="checkbox">
                                </td>
                                <td>
                                    <img src="<?=PROOT?>assets/images/user.svg" alt="" width="25px" height="25px">
                                </td>
                                <td>12B1192</td>
                                <td>Mark Anthony Ivan</td>
                                <td>Sotto</td>
                                <td>Mejico</td>
                                <td>Male</td>
                                <td>Fifth Year</td>
                                <td>1</td>
                                <td>
                                    <div class="table-action">
                                        <a href="add_student.html" class="table-edit"><i class="flaticon-pencil-edit-button"></i></a><a href="" class="table-delete"><i class="flaticon-garbage"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr onclick="window.location='student_information.html';">
                                <td>
                                    <input type="checkbox">
                                </td>
                                <td>
                                    <img src="<?=PROOT?>assets/images/user.svg" alt="" width="25px" height="25px">
                                </td>
                                <td>12B1192</td>
                                <td>Mark Anthony Ivan</td>
                                <td>Sotto</td>
                                <td>Mejico</td>
                                <td>Male</td>
                                <td>Fifth Year</td>
                                <td>1</td>
                                <td>
                                    <div class="table-action">
                                        <a href="add_student.html" class="table-edit"><i class="flaticon-pencil-edit-button"></i></a><a href="" class="table-delete"><i class="flaticon-garbage"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr onclick="window.location='student_information.html';">
                                <td>
                                    <input type="checkbox">
                                </td>
                                <td>
                                    <img src="<?=PROOT?>assets/images/user.svg" alt="" width="25px" height="25px">
                                </td>
                                <td>12B1192</td>
                                <td>Mark Anthony Ivan</td>
                                <td>Sotto</td>
                                <td>Mejico</td>
                                <td>Male</td>
                                <td>Fifth Year</td>
                                <td>1</td>
                                <td>
                                    <div class="table-action">
                                        <a href="add_student.html" class="table-edit"><i class="flaticon-pencil-edit-button"></i></a><a href="" class="table-delete"><i class="flaticon-garbage"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr onclick="window.location='student_information.html';">
                                <td>
                                    <input type="checkbox">
                                </td>
                                <td>
                                    <img src="<?=PROOT?>assets/images/user.svg" alt="" width="25px" height="25px">
                                </td>
                                <td>12B1192</td>
                                <td>Mark Anthony Ivan</td>
                                <td>Sotto</td>
                                <td>Mejico</td>
                                <td>Male</td>
                                <td>Fifth Year</td>
                                <td>1</td>
                                <td>
                                    <div class="table-action">
                                        <a href="add_student.html" class="table-edit"><i class="flaticon-pencil-edit-button"></i></a><a href="" class="table-delete"><i class="flaticon-garbage"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr onclick="window.location='student_information.html';">
                                <td>
                                    <input type="checkbox">
                                </td>
                                <td>
                                    <img src="<?=PROOT?>assets/images/user.svg" alt="" width="25px" height="25px">
                                </td>
                                <td>12B1192</td>
                                <td>Mark Anthony Ivan</td>
                                <td>Sotto</td>
                                <td>Mejico</td>
                                <td>Male</td>
                                <td>Fifth Year</td>
                                <td>1</td>
                                <td>
                                    <div class="table-action">
                                        <a href="add_student.html" class="table-edit"><i class="flaticon-pencil-edit-button"></i></a><a href="" class="table-delete"><i class="flaticon-garbage"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr onclick="window.location='student_information.html';">
                                <td>
                                    <input type="checkbox">
                                </td>
                                <td>
                                    <img src="<?=PROOT?>assets/images/user.svg" alt="" width="25px" height="25px">
                                </td>
                                <td>12B1192</td>
                                <td>Mark Anthony Ivan</td>
                                <td>Sotto</td>
                                <td>Mejico</td>
                                <td>Male</td>
                                <td>Fifth Year</td>
                                <td>1</td>
                                <td>
                                    <div class="table-action">
                                        <a href="add_student.html" class="table-edit"><i class="flaticon-pencil-edit-button"></i></a><a href="" class="table-delete"><i class="flaticon-garbage"></i></a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
<?php $this->end() ?>