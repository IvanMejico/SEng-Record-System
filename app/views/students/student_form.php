<?php
    use Core\FH;
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
                        <a href=""><i class="flaticon-man-user"></i>Manage Students</a>
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
                                <form id="studentForm" action="/SENG_SYSTEM/managestudents/add_student" method="POST" enctype="multipart/form-data">
                                    <div class="form-content">
                                    <?= FH::inputBlock(
                                        'text',
                                        'ID No.',
                                        'id',
                                        $this->newStudent->id,
                                        ['class'=>'form-field'],
                                        ['class'=>'form-group']
                                    ); 
                                    ?>
                                    
                                    <?= FH::inputBlock(
                                        'text',
                                        'First Name',
                                        'firstname',
                                        $this->newStudent->firstname,
                                        ['class'=>'form-field'],
                                        ['class'=>'form-group']
                                    );
                                    ?>

                                    <?= FH::inputBlock(
                                        'text',
                                        'Middle Name',
                                        'middlename',
                                        $this->newStudent->middlename,
                                        ['class'=>'form-field'],
                                        ['class'=>'form-group']
                                    );
                                    ?>

                                    <?= FH::inputBlock(
                                        'text',
                                        'Last Name',
                                        'lastname',
                                        $this->newStudent->lastname,
                                        ['class'=>'form-field'],
                                        ['class'=>'form-group']
                                    );
                                    ?>

                                    <?= FH::selectBlock(
                                        'Gender',
                                        'gender',
                                        ['male'=>'Male', 'female'=>'Female'],
                                        ['class'=>'form-field'],
                                        ['class'=>'form-group']
                                    );
                                    ?>
                                    <?php
                                    if(isset($this->newStudent->gender)) {
                                        $html = '<script>document.addEventListener("DOMContentLoaded", function(){
                                            option = document.getElementById("'.$this->newStudent->gender.'").selected = true;
                                        });</script>';
                                        echo $html;
                                    }
                                    ?>

                                    <?= FH::selectBlock(
                                        'Course',
                                        'course',
                                        //TODO: Generate this dynamically later
                                        [
                                            'bsce'=>'BS in Civil Engineering',
                                            'bsee'=>'BS in Electrical Engineering',
                                            'bsece'=>'BS in Electronics and Communications Engineering',
                                            'bscpe'=>'BS in Computer Engineering',
                                            'bsme'=>'BS in Mechanical Engineering'
                                        ], 
                                        ['class'=>'form-field'],
                                        ['class'=>'form-group']
                                    );
                                    ?>
                                    <?php
                                    if(isset($this->newStudent->course)) {
                                        $html = '<script>document.addEventListener("DOMContentLoaded", function(){
                                            option = document.getElementById("'.$this->newStudent->course.'").selected = true;
                                        });</script>';
                                        echo $html;
                                    }
                                    ?>

                                    <?= FH::selectBlock(
                                        'Year Level',
                                        'yearlevel',
                                        [
                                            'first-year'=>'First Year',
                                            'second-year'=>'Second year',
                                            'third-year'=>'Third Year',
                                            'fourth-year'=>'Fourth Year',
                                            'fifth-year'=>'Fifth Year'
                                        ],
                                        ['class'=>'form-field'],
                                        ['class'=>'form-group']
                                    );
                                    ?>
                                    <?php
                                    if(isset($this->newStudent->yearlevel)) {
                                        $html = '<script>document.addEventListener("DOMContentLoaded", function(){
                                            option = document.getElementById("'.$this->newStudent->yearlevel.'").selected = true;
                                        });</script>';
                                        echo $html;
                                    }
                                    ?>

                                    <?= FH::inputBlock(
                                        'text',
                                        'Section',
                                        'section',
                                        $this->newStudent->section,
                                        ['class'=>'form-field'],
                                        ['class'=>'form-group']
                                    );

                                    ?>
                                        <div class="form-group">
                                            <label for="">Photo</label>
                                            <div>
                                                <input type="file" id="profile-upload" name="profile-upload" style="display:none" onchange="displayImage(this)">
                                                <img class="upload-pic" id="profile-display" width="120px" style="cursor: pointer" height="110px" onclick="triggerClick()">
                                                <div>
                                                    <a class="btn btn-upload" style="cursor: pointer" onclick="triggerClick()">Upload Photo</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-submit" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="instruction-container">
                        <div class="ttr-instructions">
                            <h4>Instructions:</h4>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias est sint quidem quae dicta nulla voluptatem, illo veniam doloribus laborum, quisquam laboriosam maxime tempora? Soluta iste culpa similique consequuntur dicta saepe? Non dolores mollitia dolorem libero esse est earum magni, minus, excepturi, in voluptatum aliquam consectetur sunt aut repellat beatae quisquam! Voluptates adipisci quibusdam perferendis corporis ad repudiandae ut debitis. Officia numquam laudantium minus eaque earum non possimus ipsa dolorem.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            // TODO: Move this later to a separate file
            function triggerClick() {
                document.querySelector('#profile-upload').click();
            }

            function displayImage(e) {
                if (e.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e){
                    document.querySelector('#profile-display').setAttribute('src', e.target.result);
                    };
                    reader.readAsDataURL(e.files[0]);
                }
            }
        </script>
    </main>
<?php $this->end() ?>