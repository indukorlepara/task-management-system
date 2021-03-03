<?php
class TasksModel extends CI_Model{
    
    public function get_tasks(){
        
        $query = $this->db->get("task");
        return $query->result();
    }
    public function insert_task()
    {    
        $data = array(
            'task_name' => $this->input->post('task_name'),
            'task_description' => $this->input->post('task_description'),
            'task_status' => $this->input->post('task_status'),
            
        );
        return $this->db->insert('task', $data);
    }
    public function update_task($id) 
    {
        $update_date = date("Y-m-d",strtotime($this->input->post('task_update')));
        $data=array(
            'task_name' => $this->input->post('task_name'),
            'task_description' => $this->input->post('task_description'),
            'task_update' =>$update_date,
            'task_status' => $this->input->post('task_status'),
        );
        
            $this->db->where('task_id',$id);
            return $this->db->update('task',$data);
              
    }
}
?>