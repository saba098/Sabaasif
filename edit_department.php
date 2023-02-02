<?php $this->load->view('include/header'); ?>
<?php $this->load->view('include/sidebar'); ?>
<?php $this->load->view('include/navbar'); ?>

<!-- Main Content -->


<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">

            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Table</a></li>
                            <li class="active">Data table</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container" style="padding-top: 10px; ">
    <h4>Update Department</h4>
    <form method="post" name="create_User"
        action="<?php echo base_url() . 'Department_con/edit_department/' . $dep['department_id']; ?>">
        <div class="row">


            <div class="col-md-6">
                <div class="form-group">
                </div>
                <div class="form-group">
                    <label>department_name</label>
                    <input type="text" name="department_name"
                        value="<?php echo set_value('department_name', $dep['department_name']); ?>"
                        class="form-control">
                    <?php echo form_error('department_name'); ?>

                </div>
               
                <div class="row">
                    <div class="col-md_6">
                        <div class="form_group">
                            <div class="input-group">
                                <!-- <div class="input-group-addon"><i class="fa fa-circle"></i> -->

                                    <label for="branch" class="form_label">Choose a branch</label><br>
                                    <select class="form_select" name="branch_id"
                                        value="<?php echo set_value('branch_id');?>"> SELECT
                                        branch
                                        <option value="">Your branch </option>

                                        <?php  foreach($get_branch_id as $branch )
                                                     {
                                                         if($branch['branch_id'] == $dep['branch_id']) {

                                                          ?>
                                        <option value="<?php echo  $branch['branch_id'];?>" selected
                                            class="form_control" required="">
                                            <?php echo  $branch['branch_name'];?>
                                        </option>
                                        <?php 
                                                     }
                                          else {  ?>

                                        <option value="<?php echo  $branch['branch_id'];?>" class="form_control"
                                            required="">
                                            <?php echo  $branch['branch_name'];?>
                                        </option>
                                        <?php  }}
                                    ?>

                                    </select>
                                <!-- </div> -->
                            </div>
                        </div>
                    </div>


                </div><!-- .animated -->
                <div class="text-right">
                    <div class="form-group">
                        <div class="form-actions form-group"><button type="submit"
                                class="btn btn-primary btn_lg">update</button>

                            <a href="<?php echo base_url().'Department_con/list_department';?>"
                                class="btn-secondary btn">Cancel</a>

                        </div>

                    </div>
                </div>


            </div>
    </form>
</div>

