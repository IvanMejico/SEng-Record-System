<?php $this->start('head') ?>
    <style>
        /* TEMPORARY STYLES */
        .ttr-table td:first-child {
            width: 20%;
        }
        .ttr-table td:nth-child(2) {
            width: 40%;
        }
        .ttr-table td:nth-child(3) {
            width: 20%;
        }
        .ttr-table td:nth-child(4) {
            width: 10%;
        }
        .ttr-table td:nth-child(5) {
            width: 10%;
        }
        .ttr-table td > input, select {
            width: 100%;
            color: rgb(72, 73, 72);
            outline: none;
            border-top: 0px;
            border-right: 0px;
            border-left: 0px;
            border-bottom: 2px solid #909b98;
            background: transparent;
            
        }
        .ttr-table td > select {
            padding-top: 1px;
            padding-bottom: 1px;
        }
        .ttr-table td > input[type="number"] {
            width: 38px;
            padding: 2px 4px;
            color: rgb(72, 73, 72);
        }
        .ttr-table td > input[type="text"] {
            width: 100%;
            padding: 2px 5px;
            line-height: 1em;
            color: rgb(72, 73, 72);
        }

        #secondyear, #thirdyear, #fourthyear,#fifthyear {
            display: none;
        }
    </style>
<?php $this->end() ?>

<?php $this->start('body') ?>
    <main class="ttr-main">
        <div class="container">
            <div class="db-breadcrumb">
                <h4 class="breadcrumb-title">Dashboard</h4>
                <ul class="db-breadcrumb-list">
                    <li>
                        <a href=""><i class="flaticon-education"></i>Manage Programs</a>
                    </li>
                    <li>
                        <a href="">Program Information</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <!-- Program Information Panel -->
                <div class="ttr-main-panel dark-background tabbed">
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
                    <div class="panel-wrapper">
                        <div class="panel-buttons">
                            <span>
                                <a href="<?=PROOT?>manageprograms/edit_program"><i class="flaticon-pencil"></i></a>
                            </span>
                        </div>
                        <div class="display-flex-reverse">
                            <div class="panel-logo-box">
                                <img src="<?=PROOT?>assets/images/orgs/ICPEP.png" alt="" width="150px" height="150px">
                            </div>
                            <div>
                                <table>
                                    <tr>
                                        <td><strong>Name:</strong></td>
                                        <td><em><b>Bachelor of Science in Computer Engineering</em></b></td>
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
            </div>

            <!-- Offered Programs Panel -->
            <div class="row">
                <div class="panel-container full-width">
                    <div class="ttr-section-head">
                        <h2 class="section-title">Subjects</h2>
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
                        <div class="panel-content" id="firstyear">
                            <h4>First Semester</h4>
                            <table class="ttr-table">
                                <thead>
                                    <tr>
                                        <th>Subject Code</th>
                                        <th>Subject Title</th>
                                        <th>Type</th>
                                        <th>Units</th>
                                        <th><a class="table-add">Add</a></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <tr id="CPEM2113">
                                        <td data-inlinetype="text" data-inlinename="subjectcode">CPEM2113</td>
                                        <td data-inlinetype="text" data-inlinename="subjecttitle">Discrete Mathematics</td>
                                        <td data-inlinetype="select" data-inlinename="subjecttype">Lecture</td>
                                        <td data-inlinetype="number" data-inlinename="units">3</td>
                                        <td data-inlinetype="buttons" data-inlinename="actionbuttons">
                                            <div class="table-action">
                                                <a class="table-edit"><i class="flaticon-pencil-edit-button"></i></a><a class="table-delete"><i class="flaticon-garbage"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr id="CPEM2615">
                                        <td data-inlinetype="text" data-inlinename="subjectcode">CPEM2615</td>
                                        <td data-inlinetype="text" data-inlinename="subjecttitle">Computer Programming</td>
                                        <td data-inlinetype="select" data-inlinename="subjecttype">Laboratory</td>
                                        <td data-inlinetype="number" data-inlinename="units">3</td>
                                        <td data-inlinetype="buttons" data-inlinename="actionbuttons">
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
                                        <th><a class="table-add">Add</a></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr id="MATH2221">
                                        <td data-inlinetype="text" data-inlinename="subjectcode">MATH2221</td>
                                        <td data-inlinetype="text" data-inlinename="subjecttitle">Advanced Algebra</td>
                                        <td data-inlinetype="select" data-inlinename="subjecttype">Lecture</td>
                                        <td data-inlinetype="number" data-inlinename="units">2</td>
                                        <td data-inlinetype="buttons" data-inlinename="actionbuttons">
                                            <div class="table-action">
                                                <a class="table-edit"><i class="flaticon-pencil-edit-button"></i></a><a class="table-delete"><i class="flaticon-garbage"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr id="MATH2222">
                                        <td data-inlinetype="text" data-inlinename="subjectcode">MATH2222</td>
                                        <td data-inlinetype="text" data-inlinename="subjecttitle">Dynamics of Rigid Bodies</td>
                                        <td data-inlinetype="select" data-inlinename="subjecttype">Laboratory</td>
                                        <td data-inlinetype="number" data-inlinename="units">2</td>
                                        <td data-inlinetype="buttons" data-inlinename="actionbuttons">
                                            <div class="table-action">
                                                <a class="table-edit"><i class="flaticon-pencil-edit-button"></i></a><a class="table-delete"><i class="flaticon-garbage"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr id="MATH2223">
                                        <td data-inlinetype="text" data-inlinename="subjectcode">MATH2223</td>
                                        <td data-inlinetype="text" data-inlinename="subjecttitle">Statics of Deformable Bodies</td>
                                        <td data-inlinetype="select" data-inlinename="subjecttype">Lecture</td>
                                        <td data-inlinetype="number" data-inlinename="units">3</td>
                                        <td data-inlinetype="buttons" data-inlinename="actionbuttons">
                                            <div class="table-action">
                                                <a class="table-edit"><i class="flaticon-pencil-edit-button"></i></a><a class="table-delete"><i class="flaticon-garbage"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr id="MATH2224">
                                        <td data-inlinetype="text" data-inlinename="subjectcode">MATH2224</td>
                                        <td data-inlinetype="text" data-inlinename="subjecttitle">Trigonometry</td>
                                        <td data-inlinetype="select" data-inlinename="subjecttype">Lecture</td>
                                        <td data-inlinetype="number" data-inlinename="units">3</td>
                                        <td data-inlinetype="buttons" data-inlinename="actionbuttons">
                                            <div class="table-action">
                                                <a class="table-edit"><i class="flaticon-pencil-edit-button"></i></a><a class="table-delete"><i class="flaticon-garbage"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr id="MATH2225">
                                        <td data-inlinetype="text" data-inlinename="subjectcode">MATH2225</td>
                                        <td data-inlinetype="text" data-inlinename="subjecttitle">Solid Mensuration</td>
                                        <td data-inlinetype="select" data-inlinename="subjecttype">Lecture</td>
                                        <td data-inlinetype="number" data-inlinename="units">4</td>
                                        <td data-inlinetype="buttons" data-inlinename="actionbuttons">
                                            <div class="table-action">
                                                <a class="table-edit"><i class="flaticon-pencil-edit-button"></i></a><a class="table-delete"><i class="flaticon-garbage"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="panel-content" id="secondyear">
                            <h4>First Semester</h4>
                            <table class="ttr-table">
                                <thead>
                                    <tr>
                                        <th>Subject Code</th>
                                        <th>Subject Title</th>
                                        <th>Type</th>
                                        <th>Units</th>
                                        <th><a class="table-add">Add</a></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <tr id="CPEM2113">
                                        <td data-inlinetype="text" data-inlinename="subjectcode">ENSC2313</td>
                                        <td data-inlinetype="text" data-inlinename="subjecttitle">Chemistry</td>
                                        <td data-inlinetype="select" data-inlinename="subjecttype">Lecture</td>
                                        <td data-inlinetype="number" data-inlinename="units">3</td>
                                        <td data-inlinetype="buttons" data-inlinename="actionbuttons">
                                            <div class="table-action">
                                                <a class="table-edit"><i class="flaticon-pencil-edit-button"></i></a><a class="table-delete"><i class="flaticon-garbage"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr id="CPEM2615">
                                        <td data-inlinetype="text" data-inlinename="subjectcode">HUM2412</td>
                                        <td data-inlinetype="text" data-inlinename="subjecttitle">Philosophy</td>
                                        <td data-inlinetype="select" data-inlinename="subjecttype">Laboratory</td>
                                        <td data-inlinetype="number" data-inlinename="units">3</td>
                                        <td data-inlinetype="buttons" data-inlinename="actionbuttons">
                                            <div class="table-action">
                                                <a class="table-edit"><i class="flaticon-pencil-edit-button"></i></a><a class="table-delete"><i class="flaticon-garbage"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr id="CPEM2213">
                                        <td data-inlinetype="text" data-inlinename="subjectcode">CPE4142</td>
                                        <td data-inlinetype="text" data-inlinename="subjecttitle">Software Engineering</td>
                                        <td data-inlinetype="select" data-inlinename="subjecttype">Laboratory</td>
                                        <td data-inlinetype="number" data-inlinename="units">3</td>
                                        <td data-inlinetype="buttons" data-inlinename="actionbuttons">
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
                                        <th><a class="table-add">Add</a></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr id="MATH2221">
                                        <td data-inlinetype="text" data-inlinename="subjectcode">MATH2521</td>
                                        <td data-inlinetype="text" data-inlinename="subjecttitle">Advanced Algebra</td>
                                        <td data-inlinetype="select" data-inlinename="subjecttype">Lecture</td>
                                        <td data-inlinetype="number" data-inlinename="units">2</td>
                                        <td data-inlinetype="buttons" data-inlinename="actionbuttons">
                                            <div class="table-action">
                                                <a class="table-edit"><i class="flaticon-pencil-edit-button"></i></a><a class="table-delete"><i class="flaticon-garbage"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr id="MATH2222">
                                        <td data-inlinetype="text" data-inlinename="subjectcode">HUM2415</td>
                                        <td data-inlinetype="text" data-inlinename="subjecttitle">Arts and Appreciation</td>
                                        <td data-inlinetype="select" data-inlinename="subjecttype">Lecture</td>
                                        <td data-inlinetype="number" data-inlinename="units">2</td>
                                        <td data-inlinetype="buttons" data-inlinename="actionbuttons">
                                            <div class="table-action">
                                                <a class="table-edit"><i class="flaticon-pencil-edit-button"></i></a><a class="table-delete"><i class="flaticon-garbage"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr id="MATH2225">
                                        <td data-inlinetype="text" data-inlinename="subjectcode">MATH2225</td>
                                        <td data-inlinetype="text" data-inlinename="subjecttitle">Solid Mensuration</td>
                                        <td data-inlinetype="select" data-inlinename="subjecttype">Lecture</td>
                                        <td data-inlinetype="number" data-inlinename="units">4</td>
                                        <td data-inlinetype="buttons" data-inlinename="actionbuttons">
                                            <div class="table-action">
                                                <a class="table-edit"><i class="flaticon-pencil-edit-button"></i></a><a class="table-delete"><i class="flaticon-garbage"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="panel-content" id="thirdyear">
                            <h4>First Semester</h4>
                            <table class="ttr-table">
                                <thead>
                                    <tr>
                                        <th>Subject Code</th>
                                        <th>Subject Title</th>
                                        <th>Type</th>
                                        <th>Units</th>
                                        <th><a class="table-add">Add</a></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr id="CPEM2615">
                                        <td data-inlinetype="text" data-inlinename="subjectcode">HUM2412</td>
                                        <td data-inlinetype="text" data-inlinename="subjecttitle">Philosophy</td>
                                        <td data-inlinetype="select" data-inlinename="subjecttype">Laboratory</td>
                                        <td data-inlinetype="number" data-inlinename="units">3</td>
                                        <td data-inlinetype="buttons" data-inlinename="actionbuttons">
                                            <div class="table-action">
                                                <a class="table-edit"><i class="flaticon-pencil-edit-button"></i></a><a class="table-delete"><i class="flaticon-garbage"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr id="CPEM2615">
                                        <td data-inlinetype="text" data-inlinename="subjectcode">HUM2412</td>
                                        <td data-inlinetype="text" data-inlinename="subjecttitle">Philosophy</td>
                                        <td data-inlinetype="select" data-inlinename="subjecttype">Laboratory</td>
                                        <td data-inlinetype="number" data-inlinename="units">3</td>
                                        <td data-inlinetype="buttons" data-inlinename="actionbuttons">
                                            <div class="table-action">
                                                <a class="table-edit"><i class="flaticon-pencil-edit-button"></i></a><a class="table-delete"><i class="flaticon-garbage"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr id="CPEM2615">
                                        <td data-inlinetype="text" data-inlinename="subjectcode">HUM2412</td>
                                        <td data-inlinetype="text" data-inlinename="subjecttitle">Philosophy</td>
                                        <td data-inlinetype="select" data-inlinename="subjecttype">Laboratory</td>
                                        <td data-inlinetype="number" data-inlinename="units">3</td>
                                        <td data-inlinetype="buttons" data-inlinename="actionbuttons">
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
                                        <th><a class="table-add">Add</a></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr id="MATH2222">
                                        <td data-inlinetype="text" data-inlinename="subjectcode">HUM2415</td>
                                        <td data-inlinetype="text" data-inlinename="subjecttitle">Arts and Appreciation</td>
                                        <td data-inlinetype="select" data-inlinename="subjecttype">Lecture</td>
                                        <td data-inlinetype="number" data-inlinename="units">2</td>
                                        <td data-inlinetype="buttons" data-inlinename="actionbuttons">
                                            <div class="table-action">
                                                <a class="table-edit"><i class="flaticon-pencil-edit-button"></i></a><a class="table-delete"><i class="flaticon-garbage"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr id="MATH2225">
                                        <td data-inlinetype="text" data-inlinename="subjectcode">MATH2225</td>
                                        <td data-inlinetype="text" data-inlinename="subjecttitle">Solid Mensuration</td>
                                        <td data-inlinetype="select" data-inlinename="subjecttype">Lecture</td>
                                        <td data-inlinetype="number" data-inlinename="units">4</td>
                                        <td data-inlinetype="buttons" data-inlinename="actionbuttons">
                                            <div class="table-action">
                                                <a class="table-edit"><i class="flaticon-pencil-edit-button"></i></a><a class="table-delete"><i class="flaticon-garbage"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="panel-content" id="fourthyear">
                            <h4>First Semester</h4>
                            <table class="ttr-table">
                                <thead>
                                    <tr>
                                        <th>Subject Code</th>
                                        <th>Subject Title</th>
                                        <th>Type</th>
                                        <th>Units</th>
                                        <th><a class="table-add">Add</a></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr id="MATH2222">
                                    <td data-inlinetype="text" data-inlinename="subjectcode">HUM2415</td>
                                    <td data-inlinetype="text" data-inlinename="subjecttitle">Arts and Appreciation</td>
                                    <td data-inlinetype="select" data-inlinename="subjecttype">Lecture</td>
                                    <td data-inlinetype="number" data-inlinename="units">2</td>
                                    <td data-inlinetype="buttons" data-inlinename="actionbuttons">
                                        <div class="table-action">
                                            <a class="table-edit"><i class="flaticon-pencil-edit-button"></i></a><a class="table-delete"><i class="flaticon-garbage"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr id="MATH2222">
                                    <td data-inlinetype="text" data-inlinename="subjectcode">HUM2415</td>
                                    <td data-inlinetype="text" data-inlinename="subjecttitle">Arts and Appreciation</td>
                                    <td data-inlinetype="select" data-inlinename="subjecttype">Lecture</td>
                                    <td data-inlinetype="number" data-inlinename="units">2</td>
                                    <td data-inlinetype="buttons" data-inlinename="actionbuttons">
                                        <div class="table-action">
                                            <a class="table-edit"><i class="flaticon-pencil-edit-button"></i></a><a class="table-delete"><i class="flaticon-garbage"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr id="MATH2222">
                                    <td data-inlinetype="text" data-inlinename="subjectcode">HUM2415</td>
                                    <td data-inlinetype="text" data-inlinename="subjecttitle">Arts and Appreciation</td>
                                    <td data-inlinetype="select" data-inlinename="subjecttype">Lecture</td>
                                    <td data-inlinetype="number" data-inlinename="units">2</td>
                                    <td data-inlinetype="buttons" data-inlinename="actionbuttons">
                                        <div class="table-action">
                                            <a class="table-edit"><i class="flaticon-pencil-edit-button"></i></a><a class="table-delete"><i class="flaticon-garbage"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr id="MATH2222">
                                    <td data-inlinetype="text" data-inlinename="subjectcode">HUM2415</td>
                                    <td data-inlinetype="text" data-inlinename="subjecttitle">Arts and Appreciation</td>
                                    <td data-inlinetype="select" data-inlinename="subjecttype">Lecture</td>
                                    <td data-inlinetype="number" data-inlinename="units">2</td>
                                    <td data-inlinetype="buttons" data-inlinename="actionbuttons">
                                        <div class="table-action">
                                            <a class="table-edit"><i class="flaticon-pencil-edit-button"></i></a><a class="table-delete"><i class="flaticon-garbage"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr id="MATH2222">
                                    <td data-inlinetype="text" data-inlinename="subjectcode">HUM2415</td>
                                    <td data-inlinetype="text" data-inlinename="subjecttitle">Arts and Appreciation</td>
                                    <td data-inlinetype="select" data-inlinename="subjecttype">Lecture</td>
                                    <td data-inlinetype="number" data-inlinename="units">2</td>
                                    <td data-inlinetype="buttons" data-inlinename="actionbuttons">
                                        <div class="table-action">
                                            <a class="table-edit"><i class="flaticon-pencil-edit-button"></i></a><a class="table-delete"><i class="flaticon-garbage"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr id="CPEM2615">
                                    <td data-inlinetype="text" data-inlinename="subjectcode">HUM2412</td>
                                    <td data-inlinetype="text" data-inlinename="subjecttitle">Philosophy</td>
                                    <td data-inlinetype="select" data-inlinename="subjecttype">Laboratory</td>
                                    <td data-inlinetype="number" data-inlinename="units">3</td>
                                    <td data-inlinetype="buttons" data-inlinename="actionbuttons">
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
                                        <th><a class="table-add">Add</a></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr id="MATH2222">
                                        <td data-inlinetype="text" data-inlinename="subjectcode">HUM2415</td>
                                        <td data-inlinetype="text" data-inlinename="subjecttitle">Arts and Appreciation</td>
                                        <td data-inlinetype="select" data-inlinename="subjecttype">Lecture</td>
                                        <td data-inlinetype="number" data-inlinename="units">2</td>
                                        <td data-inlinetype="buttons" data-inlinename="actionbuttons">
                                            <div class="table-action">
                                                <a class="table-edit"><i class="flaticon-pencil-edit-button"></i></a><a class="table-delete"><i class="flaticon-garbage"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr id="MATH2225">
                                        <td data-inlinetype="text" data-inlinename="subjectcode">MATH2225</td>
                                        <td data-inlinetype="text" data-inlinename="subjecttitle">Solid Mensuration</td>
                                        <td data-inlinetype="select" data-inlinename="subjecttype">Lecture</td>
                                        <td data-inlinetype="number" data-inlinename="units">4</td>
                                        <td data-inlinetype="buttons" data-inlinename="actionbuttons">
                                            <div class="table-action">
                                                <a class="table-edit"><i class="flaticon-pencil-edit-button"></i></a><a class="table-delete"><i class="flaticon-garbage"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr id="MATH2225">
                                        <td data-inlinetype="text" data-inlinename="subjectcode">MATH2225</td>
                                        <td data-inlinetype="text" data-inlinename="subjecttitle">Solid Mensuration</td>
                                        <td data-inlinetype="select" data-inlinename="subjecttype">Lecture</td>
                                        <td data-inlinetype="number" data-inlinename="units">4</td>
                                        <td data-inlinetype="buttons" data-inlinename="actionbuttons">
                                            <div class="table-action">
                                                <a class="table-edit"><i class="flaticon-pencil-edit-button"></i></a><a class="table-delete"><i class="flaticon-garbage"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr id="MATH2225">
                                        <td data-inlinetype="text" data-inlinename="subjectcode">MATH2225</td>
                                        <td data-inlinetype="text" data-inlinename="subjecttitle">Solid Mensuration</td>
                                        <td data-inlinetype="select" data-inlinename="subjecttype">Lecture</td>
                                        <td data-inlinetype="number" data-inlinename="units">4</td>
                                        <td data-inlinetype="buttons" data-inlinename="actionbuttons">
                                            <div class="table-action">
                                                <a class="table-edit"><i class="flaticon-pencil-edit-button"></i></a><a class="table-delete"><i class="flaticon-garbage"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="panel-content" id="fifthyear">
                            <h4>First Semester</h4>
                            <table class="ttr-table">
                                <thead>
                                    <tr>
                                        <th>Subject Code</th>
                                        <th>Subject Title</th>
                                        <th>Type</th>
                                        <th>Units</th>
                                        <th><a class="table-add">Add</a></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr id="CPEM2615">
                                        <td data-inlinetype="text" data-inlinename="subjectcode">NASC1111</td>
                                        <td data-inlinetype="text" data-inlinename="subjecttitle">Biology</td>
                                        <td data-inlinetype="select" data-inlinename="subjecttype">Laboratory</td>
                                        <td data-inlinetype="number" data-inlinename="units">3</td>
                                        <td data-inlinetype="buttons" data-inlinename="actionbuttons">
                                            <div class="table-action">
                                                <a class="table-edit"><i class="flaticon-pencil-edit-button"></i></a><a class="table-delete"><i class="flaticon-garbage"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr id="CPEM2615">
                                        <td data-inlinetype="text" data-inlinename="subjectcode">ENG4111</td>
                                        <td data-inlinetype="text" data-inlinename="subjecttitle">English</td>
                                        <td data-inlinetype="select" data-inlinename="subjecttype">Lecture</td>
                                        <td data-inlinetype="number" data-inlinename="units">3</td>
                                        <td data-inlinetype="buttons" data-inlinename="actionbuttons">
                                            <div class="table-action">
                                                <a class="table-edit"><i class="flaticon-pencil-edit-button"></i></a><a class="table-delete"><i class="flaticon-garbage"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr id="CPEM2615">
                                        <td data-inlinetype="text" data-inlinename="subjectcode">MATH3333</td>
                                        <td data-inlinetype="text" data-inlinename="subjecttitle">Calculus</td>
                                        <td data-inlinetype="select" data-inlinename="subjecttype">Lecture</td>
                                        <td data-inlinetype="number" data-inlinename="units">3</td>
                                        <td data-inlinetype="buttons" data-inlinename="actionbuttons">
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
                                        <th><a class="table-add">Add</a></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr id="MATH2222">
                                        <td data-inlinetype="text" data-inlinename="subjectcode">HUM2415</td>
                                        <td data-inlinetype="text" data-inlinename="subjecttitle">Arts and Appreciation</td>
                                        <td data-inlinetype="select" data-inlinename="subjecttype">Lecture</td>
                                        <td data-inlinetype="number" data-inlinename="units">2</td>
                                        <td data-inlinetype="buttons" data-inlinename="actionbuttons">
                                            <div class="table-action">
                                                <a class="table-edit"><i class="flaticon-pencil-edit-button"></i></a><a class="table-delete"><i class="flaticon-garbage"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr id="MATH2222">
                                        <td data-inlinetype="text" data-inlinename="subjectcode">HUM2415</td>
                                        <td data-inlinetype="text" data-inlinename="subjecttitle">Arts and Appreciation</td>
                                        <td data-inlinetype="select" data-inlinename="subjecttype">Lecture</td>
                                        <td data-inlinetype="number" data-inlinename="units">2</td>
                                        <td data-inlinetype="buttons" data-inlinename="actionbuttons">
                                            <div class="table-action">
                                                <a class="table-edit"><i class="flaticon-pencil-edit-button"></i></a><a class="table-delete"><i class="flaticon-garbage"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr id="MATH2222">
                                        <td data-inlinetype="text" data-inlinename="subjectcode">HUM2415</td>
                                        <td data-inlinetype="text" data-inlinename="subjecttitle">Arts and Appreciation</td>
                                        <td data-inlinetype="select" data-inlinename="subjecttype">Lecture</td>
                                        <td data-inlinetype="number" data-inlinename="units">2</td>
                                        <td data-inlinetype="buttons" data-inlinename="actionbuttons">
                                            <div class="table-action">
                                                <a class="table-edit"><i class="flaticon-pencil-edit-button"></i></a><a class="table-delete"><i class="flaticon-garbage"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr id="MATH2225">
                                        <td data-inlinetype="text" data-inlinename="subjectcode">MATH2225</td>
                                        <td data-inlinetype="text" data-inlinename="subjecttitle">Solid Mensuration</td>
                                        <td data-inlinetype="select" data-inlinename="subjecttype">Lecture</td>
                                        <td data-inlinetype="number" data-inlinename="units">4</td>
                                        <td data-inlinetype="buttons" data-inlinename="actionbuttons">
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
    <script src="<?=PROOT?>assets/js/editable.js"></script>
    <script src="<?=PROOT?>assets/js/main.js"></script>
<?php $this->end() ?>