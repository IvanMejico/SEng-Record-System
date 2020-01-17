<?php

namespace App\Controllers;

use App\Models\Students;
use Core\Controller;
use Core\Router;
use Core\H;

class ManagestudentsController extends Controller {
    public function __construct($controller, $action) {
        parent::__construct($controller, $action);
    }

    public function indexAction() {
        $this->view->bodyAttr = 'class="ttr-pinned-sidebar ttr-opened-sidebar"';
        $this->view->pageTitle = 'Student List';
        $this->view->render('students/index');
    }

    public function add_studentAction() {
        $studentModel = new Students();
        $this->view->_message = '';
        
        if($this->request->isPost()) {
            $fileSource = '';
            $fileDestination = '';

            if(file_exists($_FILES['profile-upload']['tmp_name']) || is_uploaded_file($_FILES['profile-upload']['tmp_name'])) {
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
                            $fileDestination = 'public/uploads/'.$fileNameNew;
                        } else {
                            die('file is too big'); // temporary
                        }
                    }
                }

                $fileSource = $tmpName;
                $studentModel->picture = $fileNameNew;
            }
            
            $studentModel->assign($this->request->get());
            if($studentModel->save()) {
                move_uploaded_file($fileSource, $fileDestination); // TODO: Retain files after submission.
                H::resetObjectProperties($studentModel);
                $this->view->_message = $studentModel->getSuccessMessage();
            }
        }

        $this->view->displayErrors = $studentModel->getErrorMessages();
        $this->view->newStudent = $studentModel;

        $this->view->bodyAttr = 'class="ttr-pinned-sidebar ttr-opened-sidebar"';
        $this->view->pageTitle = 'Add Student';
        $this->view->render('students/student_form');
    }

    public function bulk_add_studentsAction() {
        $this->view->bodyAttr = 'class="ttr-pinned-sidebar ttr-opened-sidebar"';
        $this->view->pageTitle = 'Bulk Add Students';
        $this->view->render('students/bulk_add_students');
    }

    public function edit_student_infoAction() {
        $this->view->bodyAttr = 'class="ttr-pinned-sidebar ttr-opened-sidebar"';
        $this->view->pageTitle = 'Edit Student Information';
        $this->view->render('students/student_form');
    }

    public function infoAction() {
        $this->view->bodyAttr = 'class="ttr-pinned-sidebar ttr-opened-sidebar"';
        $this->view->pageTitle = 'Student Information';
        $this->view->render('students/info');
    }
}