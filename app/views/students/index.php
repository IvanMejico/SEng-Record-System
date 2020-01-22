<?php $this->start('head') ?>
    <script src="<?=PROOT?>assets/ajax/studentdata.js"></script>
    <script src="<?=PROOT?>assets/ajax/helpers/student_table.js"></script>
    <style>
        .profile-picture {
            width: 25px;
            height: 25px;
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
                        <a href=""><?=$this->pageTitle?></a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <!-- Program Information Panel -->
                <div class="ttr-section-head">
                    <h2 class="section-title"><?=$this->pageTitle?></h2>
                    <a class="section-button" href="managestudents/add_student">Add New Student</a>
                </div>
                <div class="ttr-main-panel light-background tabbed table">
                    <div class="tab-container">
                        <div class="tab-control" id="tabs">
                            <input type="radio" name="course" id="bsce" value="bsce" checked>
                            <label for="bsce"><span>BSCE</span></label>

                            <input type="radio" name="course" id="bsee" value="bsee">
                            <label for="bsee"><span>BSEE</span></label>

                            <input type="radio" name="course" id="bsece" value="bsece">
                            <label for="bsece"><span>BSECE</span></label>

                            <input type="radio" name="course" id="bscpe" value="bscpe">
                            <label for="bscpe"><span>BSCPE</span></label>

                            <input type="radio" name="course" id="bsme" value="bsme">
                            <label for="bsme"><span>BSME</span></label>
                        </div>
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

                    <table class="ttr-table stud-list" id="students"> <!-- Temporarily set id to "students" -->
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
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
<?php $this->end() ?>