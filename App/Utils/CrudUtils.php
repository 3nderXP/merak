<?php

namespace App\Utils;

class CrudUtils {

    protected $pdo;
    private $groupBy;
    private $order;
    private $orderColumn;
    private $limit;
    private $where;
    private Array $status = [];

    /**
     *
     * Get the value of groupBy
     *
     * @return mixed
     *
    */

    public function getGroupBy() {

        return $this->groupBy;

    }

    /**
     *
     * Set the value of groupBy
     *
     * @param mixed  $groupBy  
     *
    */

    public function setGroupBy($groupBy) {

        $this->groupBy = $groupBy;

    }

    /**
     *
     * Get the value of order
     *
     * @return mixed
     *
    */

    public function getOrder() {

        return $this->order;

    }

    /**
     *
     * Set the value of order
     *
     * @param mixed  $order  
     *
    */

    public function setOrder($order) {

        $this->order = $order;

    }

    /**
     *
     * Get the value of orderColumn
     *
     * @return mixed
     *
    */

    public function getOrderColumn() {

        return $this->orderColumn;

    }

    /**
     *
     * Set the value of orderColumn
     *
     * @param mixed  $orderColumn  
     *
    */

    public function setOrderColumn($orderColumn) {

        $this->orderColumn = $orderColumn;

    }

    /**
     *
     * Get the value of limit
     *
     * @return mixed
     *
    */

    public function getLimit() {

        return $this->limit;

    }

    /**
     *
     * Set the value of limit
     *
     * @param mixed  $limit  
     *
    */

    public function setLimit($limit) {

        $this->limit = $limit;

    }

    /**
     *
     * Get the value of where
     *
     * @return mixed
     *
    */

    public function getWhere() {

        return $this->where;

    }

    /**
     *
     * Set the value of where
     *
     * @param mixed  $where  
     *
    */

    public function setWhere($where) {

        $this->where = $where;

    }

    /**
     *
     * Get the value of Status
     *
     * @param string $filterStatus Will Filter the Status Array
     * 
     * @return array
     *
    */

    public function getStatus($filterStatus = null){

        if(!empty($filterStatus)){

            return array_filter($this->status, function($array) use ($filterStatus){

                return $array["status"] == $filterStatus;

            });

        } else {

            return $this->status;

        }

    }

    /**
     *
     * Set the value of status
     *
     * @param array $status
     *
    */

    protected function setStatus(Array $status) {

        $this->status = $status;

    }

    /**
     * 
     * @param array $array fields Array containing the fields and values ​​of the model
     * 
     * @return object Returns the model object
     * 
    */

    protected function createModel(Array $array){

        $arrayFields = array_keys($array);

        $methods = array_map(function ($field) {

            return "set".implode("", array_map(function ($string) {

                return ucfirst($string);
                
            }, explode("_", $field)));

        }, $arrayFields);

        $className = "App\Classes\Model\\".ucfirst(lastElement(explode("\\",get_class($this))));

        $obj = new $className;

        foreach($methods as $index => $method){

            
            if(method_exists($obj, $method)){

                $obj->$method($array[$arrayFields[$index]]);

            }

        }

        return $obj;

    }

}