<?php $this->load->view('include/header'); ?>
<?php $this->load->view('include/sidebar'); ?>
<?php $this->load->view('include/navbar'); ?>
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
                            <li><a href="#">Forms</a></li>
                            <li class="active">Basic</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Content -->

<div class="content">
    <div class="animated fadeIn">


        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">Branch</div>
                         <div class="card-body card-block">
                              <form action="<?php echo base_url() . 'index.php/Branch_con/create_branch'; ?>" method="post"
                            name="create_User">
                                 <!-- <div class="form-group">
                                   <div class="input-group">
                                     <div class="input-group-addon"><i class="fa fa-circle"></i></div>
                                          <input type="integer" id="branch_id" name="branch_id" placeholder="branch_id"
                                           class="form-control" value="<?php echo set_value('branch_id'); ?>">
                                          <?php echo form_error('branch_id'); ?>
                                     </div>
                                 </div> -->
                            <div class="form-group">
                                <div class="input-group">
                                     <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                         <input type="text" id="branch_name" name="branch_name" placeholder="branch_name" class="form-control"
                                         value="<?php echo set_value('branch_name'); ?>">
                                          <?php echo form_error('branch_name'); ?>
                                     </div>
                                 </div>
                           <br>
                          
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="form-actions form-group"><button type="submit"
                                            class="btn btn-primary btn_lg">Submit</button>
                                        <a href="<?php echo base_url('Branch_con/list_branch'); ?>">
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>

            </form>
        </div>
    </div>
</div>
</div>
</div>
</div>

<!-- End Main Content -->


<div class="clearfix"></div>
<?php $this->load->view('include/footer'); ?>
</div>
<!-- /#right-panel -->


<?php $this->load->view('include/script'); ?>