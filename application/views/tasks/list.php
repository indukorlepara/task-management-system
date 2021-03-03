<br>
<br>
<br>

<div class="container">
<div class="row">
    <div class="col-lg-12">           
                
            <div class="pull-right">
               <a  href="<?php echo base_url('tasks/create') ?>"> Create New Task</a>
            </div>
        
     </div>
</div>
<div class="table-responsive">
<table class="table table-bordered">
  <thead>
      <tr>
          <th>Task Name</th>
          <th>Description</th>
          <th>Status</th>
          <th>Update Date</th>
          <th>Action</th>
      </tr>
  </thead>
  <tbody>
   <?php foreach ($data as $d) { ?>      
      <tr>
          <td><?php echo $d->task_name; ?></td>
          <td><?php echo $d->task_description; ?></td>       
          <td><?php if($d->task_status==0){echo "pending";}else{echo 
        "done";} ?></td>      
      <td><?php echo $d->task_update; ?></td> 
       <td>
       
    
         <a class="btn btn-info btn-xs" href="<?php echo base_url('tasks/edit/'.$d->task_id) ?>">Edit</a>
           
      </td>     
      </tr>
      <?php } ?>
  </tbody>
</table>
</div>
</div>