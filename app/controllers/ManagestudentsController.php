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

    public function getDataAction() {
        /**
         * Get the properties of every student, shift the last
         * element of every item to the first, append eah to a 
         * final array to be encoded in json data and echoed 
         * out be parsed by the js script
         */
        $students = new Students();
        $list = $students->find();
        foreach($list as $item) {
            $item_properties = H::getObjectProperties($item);
            unset($item_properties['course']);

            // replace the '-' character with ' ' character and capitalize each word
            $ylevel = $item_properties['yearlevel'];
            $ylevel = explode('-', $ylevel);
            $ylevel = $ylevel[0].' '.$ylevel[1];
            $item_properties['yearlevel'] = ucwords(($ylevel));
            
            $lastvalue = end($item_properties);
            $lastkey = key($item_properties);
            $temp = array($lastkey=>$lastvalue);
            array_pop($item_properties);
            $item_properties = array_merge($temp, $item_properties);
            $response[] = $item_properties;
        }
        echo json_encode($response);
    }
}