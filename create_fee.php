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
                    <div class="card-header">Fee_type</div>
                         <div class="card-body card-block">
                              <form action="<?php echo base_url() . 'fee_type_con/create_fee'; ?>" method="post"
                            name="create_User">
                                 <!-- <div class="form-group">
                                   <div class="input-group">
                                     <div class="input-group-addon"><i class="fa fa-circle"></i></div>
                                          <input type="integer" id="fee_id" name="fee_id" placeholder="fee_id"
                                           class="form-control" value="<?php echo set_value('fee_id'); ?>">
                                          <?php echo form_error('fee_id'); ?>
                                     </div>
                                 </div> -->
                            <div class="form-group">
                                <div class="input-group">
                                     <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                         <input type="text" id="fee_name" name="fee_name" placeholder="fee_name" class="form-control"
                                         value="<?php echo set_value('fee_name'); ?>">
                                          <?php echo form_error('fee_name'); ?>
                                     </div>
                                 </div>
                           <br>
                           <div class="form-group">
                                <div class="input-group">
                                     <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                         <input type="text" id="fee_desc" name="fee_desc" placeholder="fee_desc" class="form-control"
                                         value="<?php echo set_value('fee_desc'); ?>">
                                          <?php echo form_error('fee_desc'); ?>
                                     </div>
                                 </div>
                           <br>
                          
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="form-actions form-group"><button type="submit"
                                            class="btn btn-primary btn_lg">Submit</button>
                                        <a href="<?php echo base_url('fee_type_con/list_fee'); ?>">
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