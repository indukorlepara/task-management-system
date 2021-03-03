
  <div class="container">

    <div class="jumbotron">
        <div class="container">
          
          <form method="post" action="<?php echo base_url('tasksCreate');?>">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Name</label>
                <div class="col-md-9">
                    <input type="text" name="task_name" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Description</label>
                <div class="col-md-9">
                    <textarea name="task_description" class="form-control"></textarea>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <label for="status">status</label>
            <div class="col-md-9">
            <select  class="form-control" name="task_status">
                <option value="">Select status</option>
                <option value="0">pending</option>
                <option value="1">done</option>
            </select>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="col-md-8 col-md-offset-2 pull-right">
            <input type="submit" name="Create" class="btn  btn-primary">
            <a  href="<?php echo base_url('tasks') ?>">Back</a>
        </div>
    </div>
    
</form>

        </div>
    </div>