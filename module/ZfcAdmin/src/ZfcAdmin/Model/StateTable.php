<?php

namespace ZfcAdmin\Model;

use Zend\Db\TableGateway\TableGateway;
use Zend\Db\Sql\Select;

class StateTable {

    protected $tableGateway;

    public function __construct(TableGateway $tableGateway) {
        $this->tableGateway = $tableGateway;
    }

    public function fetchAll($data='') {
        $resultSet = $this->tableGateway->select(function (Select $select) use($data) {
                $select->join('tbl_country','tbl_state.country_id = tbl_country.id',array("country_name"),Select::JOIN_INNER);
                $select->where($data);
        });

        return $resultSet;
    }

    public function getState($id) {
        $resultSet = $this->tableGateway->select(array('id'=>$id))->current();
        return $resultSet;
    }

    public function getStatejoin($id) {
        $resultSet = $this->tableGateway->select(function (Select $select) use($id){
            $select->where(array('tbl_state.id'=>$id));
            $select->join('tbl_country','tbl_state.country_id = tbl_country.id',array('country_name'));
        })->current();

        return $resultSet;
    }

    public function deleteState($id) {
        $resultSet = $this->tableGateway->delete(array('id'=>$id));
        return $resultSet;
    }

    public function SaveState($stateEntity)
    {
    	$stateEntity->created_date = (empty($stateEntity->created_date))? date('Y-m-d h:i:s'):$stateEntity->created_date;
                $stateEntity->modified_date = (empty($stateEntity->modified_date))? date('Y-m-d h:i:s'):$stateEntity->modified_date;

                $status = empty($stateEntity->IsActive)? 0:1;

    	$data = array(
            'state_name' => $stateEntity->state_name,
            'country_id' => $stateEntity->country_id,
    		'master_state_id' => $stateEntity->master_state_id,
    		'IsActive' => $status,
    		'created_date' => $stateEntity->created_date,
    		'modified_date' => $stateEntity->modified_date,
    		'modified_by' => "1"
    		);
        if($stateEntity->id==0){
            $result = $this->tableGateway->insert($data);
            if($result)
                return "success";
            else return "couldn't update";
        }
        else {
            if ($this->getState($stateEntity->id)) {

                    $result = $this->tableGateway->update($data, array('id' => $stateEntity->id));

                if($result)
                return "success";
            else return "couldn't update";
                } else {
                     return "couldn't update";
                    throw new \Exception('Users id does not exist');
                }
        }

    }

     public function customFields($columns)
    {   
        $stateName = $this->tableGateway->select(function(Select $select) use($columns){
            $select->order('id ASC');
            $select->columns($columns);
        })->toArray();

        foreach ($stateName as $list) {
            $statenamelist[$list['id']] = $list['state_name'];
        }
        // print_r($statenamelist);die;
        return $statenamelist;
    }

    public function updatestatus($data)
    {
        $changedata = array('IsActive'=>$data->IsActive);
        // return "dfgdgdfgd";
        $status = $this->tableGateway->update($changedata,array('id'=>$data->id));
            
        if($status){
            $respArr = array('status'=>"Updated SuccessFully");
        }   
            
        else $respArr = array('status'=>"Couldn't update");

        return $respArr;

    }

    public function delmultiple($data='')
    {
        $resultSet = $this->tableGateway->delete("id in($data)");
        return $resultSet;
    }

}
