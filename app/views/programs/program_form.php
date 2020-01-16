<?php $this->start('body') ?>
   <main class="ttr-main">
        <div class="container">
            <!-- Breadcrumb -->
            <div class="db-breadcrumb">
                <h4 class="breadcrumb-title">Dashboard</h4>
                <ul class="db-breadcrumb-list">
                    <li>
                        <a href=""><i class="flaticon-education"></i>Manage Programs</a>
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
                                <div class="form-content">
                                    <div class="form-group">
                                        <label for="">ID No.</label>
                                        <div>
                                            <input class="form-field" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Shorthand</label>
                                        <div>
                                            <input class="form-field" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Name</label>
                                        <div>
                                            <input class="form-field" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Logo</label>
                                        <div>
                                            <img src="" alt="" class="upload-pic" width="120px" height="110px">
                                            <div>
                                                <a href="" class="btn btn-upload">Upload Photo</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Mission</label>
                                        <div>
                                            <textarea name="" id="" cols="30" rows="10"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Vision</label>
                                        <div>
                                            <textarea name="" id="" cols="30" rows="10"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Goal</label>
                                        <div>
                                            <textarea name="" id="" cols="30" rows="10"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-submit" type="submit">Submit</button>
                                    </div>
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