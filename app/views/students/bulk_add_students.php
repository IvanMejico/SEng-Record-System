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
                                <div class="bulk-add">
                                    <span>
                                        <a class="btn generate-csv" href="">Generate CSV File</a>
                                    </span>
                                    <span>
                                        <a class="btn select-csv" href="">Select CSV File</a>
                                    </span>
                                    <span>
                                        <a class="btn import-csv" href="">Import CSV File</a>
                                    </span>
                                </div>
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
    </main>
<?php $this->end() ?>