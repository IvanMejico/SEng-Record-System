<?php

namespace Core;
// use H; // for debugging purposes only

class Model {
    protected $_db, $_table, $_modelName, $_updating = false, $_softDelete = false, $_validates=true, $_validationErrors=[];
    public $id;

    public function __construct($table) {
        $this->_db = DB::getInstance();
        $this->_table = $table;        
        $this->_modelName = str_replace(' ', '', ucwords(str_replace('_',' ', $this->_table)));
    }

    public function get_columns() {
        return $this->_db->get_columns($this->_table);
    }

    // Adds a soft delete condition to the query
    protected function _softDeleteParams($params) {
        if($this->_softDelete) {
            if(array_key_exists('conditions', $params)) {
                if(is_array($params['conditions'])) {
                    $params['conditions'][] = "deleted != 1";
                } else {
                    $params['conditions'] .= " AND deleted != 1";
                }
            } else {
                $params['conditions'] = "deleted != 1";
            }
        }
        return $params;
    }

    public function find($params = []) {
        $params = $this->_softDeleteParams($params);
        $resultsQuery = $this->_db->find($this->_table, $params, get_class($this));
        if(!$resultsQuery) return []; // Return and empty array if no record is found
        return $resultsQuery;
    }

    public function findFirst($params = []) {
        $params = $this->_softDeleteParams($params);
        $resultQuery = $this->_db->findFirst($this->_table, $params, get_class($this));
        return $resultQuery;
    }

    public function findById($id) {
        return $this->findFirst(['conditions'=>"id = ?", 'bind'=>[$id]]);
    }

    public function save() {
        $this->validator();
        if($this->_validates) {
            $this->beforeSave();
            $fields = H::getObjectProperties($this);
            // determine whether to update or insert
            $existingRecord = $this->findById($this->id); // Check if there's an existing record. If there is, just update the record.
            if($existingRecord) {
                $save =  $this->update($this->id, $fields);
                $this->afterSave();
                return $save;
            } else {
                $save = $this->insert($fields);
                $this->afterSave();
                return $save;
            }  
        }
        return false;
    }

    public function insert($fields) {
        if(empty($fields)) return false;
        return $this->_db->insert($this->_table, $fields);
    }

    public function update($id, $fields) {
        if(empty($fields) || $id == '') return false;
        return $this->_db->update($this->_table, $id, $fields);
    }

    public function delete($id = '') {
        if($id == '' && $this->id == '') return false;
        $id = ($id == '') ? $this->id : $id;
        if($this->_softDelete) {
            $this->update($id, ['deleted' => 1]);
        } else {
            return $this->_db->delete($this->_table, $id);
        }
    }
    
    public function query($sql, $bind=[]) {
        return $this->_db->query($sql, $bind);
    }

    public function data() {
        $data = new stdClass();
        foreach(H::getObjectProperties($this) as $column => $value) {
            $data->column = $value;
        }
        return $data;
    }
    
    // create object properties by checking if the paremeter keys exist in
    //  the database then saving the form values to the properties
    public function assign($params) {
        if(!empty($params)) {
            foreach($params as $key => $value) {
                if(property_exists($this, $key)) {
                    $this->$key = $value;
                }
            }
            return true;
        }
        return false;
    }

    protected function populateObjData($result) {
        foreach($result as $key=>$val) {
            $this->$key = $val;
        }
    }

    public function validator() {}

    // Checks the properties of the validator object for pass or fail.
    public function runValidation($validator) {
        $key = $validator->field;
        if(!$validator->success) {
            $this->_validates = false;
            $this->_validationErrors[$key] = $validator->msg;
        }
    }

    public function getErrorMessages() {
        return $this->_validationErrors;
    }

    public function validationPassed() {
        return $this->_validates;
    }

    public function addErrorMessage($field, $msg)    {
        $this->_validates = false;
        $this->_validationErrors[$field] = $msg;
    }

    public function beforeSave() {}
    public function afterSave() {}

    public function isNew() {
        return (property_exists($this, 'id') && !empty($this->id)) ? false : true;
    }

    public function setUpdate($status) {
        $this->_updating = $status;
    }
    public function isUpdating() {
        return $this->_updating;
    }
}