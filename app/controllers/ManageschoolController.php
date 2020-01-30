<?php

namespace App\Controllers;
use Core\Controller;
use Core\Router;
use App\Models\Programs;

use Core\H;

class ManageschoolController extends Controller {
    public function __construct($controller, $action) {
        parent::__construct($controller, $action);
        $this->load_model('School');
    }

    public function indexAction() {
        $this->view->school = $this->SchoolModel->findById('seng');

        // Pass delare and initialize programs[] property to view object
        $ProgramsModel = new Programs();
        $this->view->programs = $ProgramsModel->find();

        $this->view->bodyAttr = 'class="ttr-pinned-sidebar ttr-opened-sidebar"';
        $this->view->pageTitle = 'School Information';
        $this->view->render('school/index');
    }

    public function edit_school_infoAction($schoolId) {
        if(!$schoolId) Router::redirect('manageschools');

        if(!$schoolId) Router::redirect('manageschool');

        $this->view->_message = '';
        $this->view->displayErrors = [];

        if($this->request->isPost()) {
            $fileSource = '';
            $fileDestination = '';

            if(file_exists($_FILES['profile-upload']['tmp_name']) || is_uploaded_file($_FILES['profile-upload']['tmp_name'])) {
                // Check if there is an existing logo saved in the database. If there is, delete that file from the upload folder.
                if($this->request->get('file-name')) {
                    unlink('public/uploads/logo/'.$this->request->get('file-name'));
                }

                $fileName = $_FILES['profile-upload']['name'];
                $tmpName = $_FILES['profile-upload']['tmp_name'];
                $fileError = $_FILES['profile-upload']['error'];
                $fileSize = $_FILES['profile-upload']['size'];

                $fileExt = explode('.', $fileName);
                $fileActualExt = strtolower(end($fileExt));

                $allowed = array('jpg', 'jpeg', 'png');

                if(in_array($fileActualExt, $allowed)) {
                    if($fileError === 0) {
                        if($fileSize < 10000000) {
                            $fileNameNew = 'profile_'.time().'.'.$fileActualExt;
                            $fileDestination = 'public/uploads/logo/'.$fileNameNew;
                        } else {
                            die('file is too big'); // temporary
                        }
                    }
                }

                $fileSource = $tmpName;
                $this->SchoolModel->logo = $fileNameNew;
            } else if ($this->request->get('file-name')) {
                $this->SchoolModel->logo = $this->request->get('file-name');
            }

            $this->SchoolModel->assign($this->request->get());
            $this->SchoolModel->id = strtolower($this->SchoolModel->id);
            $this->SchoolModel->setUpdate(true);
            if($this->SchoolModel->save()) {
                move_uploaded_file($fileSource, $fileDestination); // TODO: Retain files after submission.
                Router::redirect('manageschool/');
            } else {
                $this->view->displayErrors = $this->SchoolModel->getErrorMessages();
            }
            $this->view->school = $this->SchoolModel;
        } else {
            $school = $this->SchoolModel->findById($schoolId);
            $this->view->school = $school;
        }

        $this->view->bodyAttr = 'class="ttr-pinned-sidebar ttr-opened-sidebar"';
        $this->view->pageTitle = 'Edit School Information';
        $this->view->render('school/school_form');
    }
}