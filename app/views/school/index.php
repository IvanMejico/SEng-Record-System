<?php $this->start('head') ?>
<style>
    .ttr-table tbody tr {
        cursor: default;
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

                                <?php
                                // Loop through the program object arrays to list all the details on the table
                                foreach($this->programs as $program) {
                                    // Organization Logo
                                    $html = '<tr id="' . $program->id . '" onclick="">';
                                    $html .= '<td><img src="'. PROOT .'public/uploads/logo/'. $program->logo .'" alt="'. $program->id .'" width="30px" height="30px"/></td>';
                                    // Program ID
                                    $html .= '<td>'. strtoupper($program->id) .'</td>';
                                    // Program Name
                                    $html .= '<td>'. $program->name .'</td>';
                                    // Row Buttons
                                    $html .= '<td><div class="table-action"><a href="'.PROOT.'manageprograms/edit_program/'.$program->id.'" class="table-edit"><i class="flaticon-pencil-edit-button"></i></a><a class="table-delete"><i class="flaticon-garbage"></i></a></div></td>';
                                    $html .= '</tr>';
                                    
                                    echo $html;
                                }
                                ?>  
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
    <script>
        rows = document.querySelectorAll('.ttr-table tbody tr');
        
        deleteButtons = document.getElementsByClassName('table-delete');
        for (key in deleteButtons) {
            deleteButtons[key].onclick = function() {
                tableRow = this.parentNode.parentNode.parentNode;
                programId = tableRow.id;
                response = confirm("Are you sure you want to delete "+tableRow.id.toUpperCase()+"?");
                if(response == true) {
                    // Delete the data on the databse
                    deleteData(programId);
                    // Delete the table row from the table DOM
                    deleteTableRow(tableRow);
                }
            };
        }

        function deleteTableRow(row){
            parent = row.parentNode;
            parent.removeChild(row);
        }
        function deleteData(programId){
            var xhr = new XMLHttpRequest();
            xhr.open('GET','manageprograms/deletedata/'+programId);
            xhr.onload = function() {
            };
            xhr.send();
        }
    </script>
<?php $this->end() ?>