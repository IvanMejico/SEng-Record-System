<?php $this->start('head') ?>
<style>
    .student-pic {
        border-radius: 50%;
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
                                <a href="<?=PROOT?>managestudents/edit_student_info/<?=$this->student->id?>"><i class="flaticon-pencil"></i></a>
                                <a href="<?=PROOT?>managestudents"><i class="flaticon-list"></i></a>
                            </span>
                        </div>
                        <div class="display-flex-normal">
                            <div class="panel-logo-box">
                                <?php
                                    if($this->student->picture != '') {
                                        $path = PROOT.'public/uploads/'.$this->student->picture;
                                    } else {
                                        $path = PROOT.'assets/images/user.svg';
                                    }
                                ?>
                                <img class="student-pic" src="<?=$path?>" alt="" width="100px" height="100px">
                            </div>
                            <div>
                                <table>
                                    <tr>
                                        <td><strong>ID Number:</strong></td>
                                        <td><?=$this->student->id?></td>
                                    </tr>
                                    <tr>
                                        <td><strong>First Name:</strong></td>
                                        <td><?=$this->student->firstname?></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Middle Name:</strong></td>
                                        <td><?=$this->student->middlename?></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Last Name</strong></td>
                                        <td><?=$this->student->lastname?></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Gender</strong></td>
                                        <td><?=ucfirst($this->student->gender)?></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Course</strong></td>
                                        <?php
                                            // Temporary code until there's a table for academic programs to be queried
                                            switch($this->student->course) {
                                                case 'bsce':
                                                    $course = 'BS in Civil Engineering';
                                                    break;
                                                case 'bsee':
                                                    $course = 'BS in Electrical Engineering';
                                                    break;
                                                case 'bsece':
                                                    $course = 'BS in Electronics and Communications Engineering';
                                                    break;
                                                case 'bscpe':
                                                    $course = 'BS in Computer Engineering';
                                                    break;
                                                case 'bsme':
                                                    $course = 'BS in Mechanical Engineering';
                                                    break;
                                                default:
                                                    break;
                                            }
                                        ?>

                                        <td><?=$course?></td>
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
                            <div class="tab-control">
                                <input type="radio" name="yearlevel" id="first-year" value="first-year" checked>
                                <label for="first-year"><span>First Year</span></label>

                                <input type="radio" name="yearlevel" id="second-year" value="second-year">
                                <label for="second-year"><span>Second Year</span></label>

                                <input type="radio" name="yearlevel" id="third-year" value="third-year">
                                <label for="third-year"><span>Third Year</span></label>

                                <input type="radio" name="yearlevel" id="fourth-year" value="fourth-year">
                                <label for="fourth-year"><span>Fourth Year</span></label>

                                <input type="radio" name="yearlevel" id="fifth-year" value="fifth-year">
                                <label for="fifth-year"><span>Fifth Year</span></label>
                            </div>
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