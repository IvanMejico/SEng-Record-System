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
                        <a href="">Student Information</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <!-- Program Information Panel -->
                <div class="ttr-main-panel dark-background">
                    <div class="panel-wrapper">
                        <div class="panel-buttons">
                            <span>
                                <a href="<?=PROOT?>managestudents/edit_student_info"><i class="flaticon-pencil"></i></a>
                                <a href="<?=PROOT?>managestudents"><i class="flaticon-list"></i></a>
                            </span>
                        </div>
                        <div class="display-flex-normal">
                            <div class="panel-logo-box">
                                <img src="<?=PROOT?>assets/images/user.svg" alt="" width="100px" height="100px">
                            </div>
                            <div>
                                <table>
                                    <tr>
                                        <td><strong>ID Number:</strong></td>
                                        <td>12B1192</td>
                                    </tr>
                                    <tr>
                                        <td><strong>First Name:</strong></td>
                                        <td>Mark Anthony Ivan</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Middle Name:</strong></td>
                                        <td>Sotto</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Last Name</strong></td>
                                        <td>Mejico</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Gender</strong></td>
                                        <td>Male</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Course</strong></td>
                                        <td>BS Computer Engineering</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Academic Record Panel -->
            <div class="row">
                <div class="panel-container full-width">
                    <div class="ttr-section-head">
                        <h2 class="section-title">Academic Record</h2>
                    </div>
                    <div id="ttr-panel">
                        <div class="panel-heading">
                            <ul class="tab-control y-level">
                                <li><a href="">First Year</a></li>
                                <li><a href="">Second Year</a></li>
                                <li><a href="">Third Year</a></li>
                                <li><a href="">Fourth Year</a></li>
                                <li><a class="active" href="">Fifth Year</a></li>
                            </ul>
                        </div>
                        <div class="panel-content">
                            <h4>First Semester</h4>
                            <table class="ttr-table">
                                <thead>
                                    <tr>
                                        <th>Subject Code</th>
                                        <th>Subject Title</th>
                                        <th>Type</th>
                                        <th>Units</th>
                                        <th><a href="#" class="table-add">Add</a></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            CPEM2113
                                        </td>
                                        <td>Discrete Mathematics</td>
                                        <td>Lecture</td>
                                        <td>3</td>
                                        <td>
                                            <div class="table-action">
                                            <a class="table-edit"><i class="flaticon-pencil-edit-button"></i></a><a class="table-delete"><i class="flaticon-garbage"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            CPEM2113
                                        </td>
                                        <td>Discrete Mathematics</td>
                                        <td>Lecture</td>
                                        <td>3</td>
                                        <td>
                                            <div class="table-action">
                                            <a class="table-edit"><i class="flaticon-pencil-edit-button"></i></a><a class="table-delete"><i class="flaticon-garbage"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            CPEM2113
                                        </td>
                                        <td>Discrete Mathematics</td>
                                        <td>Lecture</td>
                                        <td>3</td>
                                        <td>
                                            <div class="table-action">
                                            <a class="table-edit"><i class="flaticon-pencil-edit-button"></i></a><a class="table-delete"><i class="flaticon-garbage"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            CPEM2113
                                        </td>
                                        <td>Discrete Mathematics</td>
                                        <td>Lecture</td>
                                        <td>3</td>
                                        <td>
                                            <div class="table-action">
                                            <a class="table-edit"><i class="flaticon-pencil-edit-button"></i></a><a class="table-delete"><i class="flaticon-garbage"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            CPEM2113
                                        </td>
                                        <td>Discrete Mathematics</td>
                                        <td>Lecture</td>
                                        <td>3</td>
                                        <td>
                                            <div class="table-action">
                                            <a class="table-edit"><i class="flaticon-pencil-edit-button"></i></a><a class="table-delete"><i class="flaticon-garbage"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            CPEM2113
                                        </td>
                                        <td>Discrete Mathematics</td>
                                        <td>Lecture</td>
                                        <td>3</td>
                                        <td>
                                            <div class="table-action">
                                            <a class="table-edit"><i class="flaticon-pencil-edit-button"></i></a><a class="table-delete"><i class="flaticon-garbage"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <h4>Second Semester</h4>
                            <table class="ttr-table">
                                <thead>
                                    <tr>
                                        <th>Subject Code</th>
                                        <th>Subject Title</th>
                                        <th>Type</th>
                                        <th>Units</th>
                                        <th><a href="#" class="table-add">Add</a></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            CPEM2113
                                        </td>
                                        <td>Discrete Mathematics</td>
                                        <td>Lecture</td>
                                        <td>3</td>
                                        <td>
                                            <div class="table-action">
                                            <a class="table-edit"><i class="flaticon-pencil-edit-button"></i></a><a class="table-delete"><i class="flaticon-garbage"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            CPEM2113
                                        </td>
                                        <td>Discrete Mathematics</td>
                                        <td>Lecture</td>
                                        <td>3</td>
                                        <td>
                                            <div class="table-action">
                                            <a class="table-edit"><i class="flaticon-pencil-edit-button"></i></a><a class="table-delete"><i class="flaticon-garbage"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            CPEM2113
                                        </td>
                                        <td>Discrete Mathematics</td>
                                        <td>Lecture</td>
                                        <td>3</td>
                                        <td>
                                            <div class="table-action">
                                            <a class="table-edit"><i class="flaticon-pencil-edit-button"></i></a><a class="table-delete"><i class="flaticon-garbage"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            CPEM2113
                                        </td>
                                        <td>Discrete Mathematics</td>
                                        <td>Lecture</td>
                                        <td>3</td>
                                        <td>
                                            <div class="table-action">
                                            <a class="table-edit"><i class="flaticon-pencil-edit-button"></i></a><a class="table-delete"><i class="flaticon-garbage"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            CPEM2113
                                        </td>
                                        <td>Discrete Mathematics</td>
                                        <td>Lecture</td>
                                        <td>3</td>
                                        <td>
                                            <div class="table-action">
                                            <a class="table-edit"><i class="flaticon-pencil-edit-button"></i></a><a class="table-delete"><i class="flaticon-garbage"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            CPEM2113
                                        </td>
                                        <td>Discrete Mathematics</td>
                                        <td>Lecture</td>
                                        <td>3</td>
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