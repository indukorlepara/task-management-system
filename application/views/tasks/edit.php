
  <div class="container">

<div class="jumbotron">
    <div class="container">
      
<form method="post" action="<?php echo base_url('tasks/update/'.$task->task_id);?>">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Title</label>
                <div class="col-md-9">
                    <input type="text" name="task_name" class="form-control" value="<?php echo $task->task_name; ?>">
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Description</label>
                <div class="col-md-9">
                    <textarea name="task_description" class="form-control"><?php echo $task->task_description; ?></textarea>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Status</label>
                <div class="col-md-9">
                <select  class="form-control" name="task_status">
                <option value="">Select status</option>
                <option value="0"<?php if($task->task_status==0){echo "selected";}?>>pending</option>
                <option value="1"<?php if($task->task_status==1){echo "selected";}?>>done</option>
            </select>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Update Date</label>
                <div class="col-md-9">
               <input type="date" name="task_update" class="form-control"  >
               
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2 pull-right">
            <input type="submit" name="Save" class="btn  btn-primary">
            <a  href="<?php echo base_url('tasks') ?>">Back</a>
        </div>

    </div>
    
</form>


</div>
    </div>