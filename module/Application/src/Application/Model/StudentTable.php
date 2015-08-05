<?php
namespace Application\Model;
use Application\Entity\Student;

class StudentTable extends ModelTable
{
    protected $tableGatewayClass = '\Application\Db\StudentTableGateway';
    
    public function fetchAll()
    {
        $resultSet = $this->tableGateway->select();
        return $resultSet;
    }
    
    public function get($id)
    {
        $id  = (int) $id;
        $rowset = $this->tableGateway->select(array('id' => $id));
        $row = $rowset->current();
        if (!$row) {
            throw new \Exception("Could not find row $id");
        }
        return $row;
    }

    public function save(Student $student)
    {
    	$data = array(
    			'name' => $student->name,
    	);
    
    	$id = (int) $student->id;
    	if ($id == 0) {
    		$this->tableGateway->insert($data);
    	} else {
    		if ($this->get($id)) {
    			$this->tableGateway->update($data, array('id' => $id));
    		} else {
    			throw new \Exception('Student id does not exist');
    		}
    	}
    }
    
    public function delete($id)
    {
    	$this->tableGateway->delete(array('id' => (int) $id));
    }
    }
    
