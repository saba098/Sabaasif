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
    <h3>Update fee</h3>
    <form method="post" name="create_User" action="<?php echo base_url() . 'fee_type_con/edit_fee/' . $fe['fee_id']; ?>">
        <div class="row">
            

            <div class="col-md-12">
                <div class="form-group">
                </div>
                <div class="form-group">
                    <label>fee_name</label>
                    <input type="text" name="fee_name" value="<?php echo set_value('fee_name', $fe['fee_name']); ?>"
                        class="form-control">
                    <?php echo form_error('fee_name'); ?>

                    <div class="form-group">
                    <label>fee_description</label>
                    <input type="text" name="fee_desc" value="<?php echo set_value('fee_desc', $fe['fee_desc']); ?>"
                        class="form-control">
                    <?php echo form_error('fee_desc'); ?>


                <div class="text-right">
                    <div class="form-group">
                        <div class="form-actions form-group"><button type="submit"
                                class="btn btn-primary btn_lg">update</button>

                            <a href="<?php echo base_url().'fee_type_con/list_fee';?>" class="btn-secondary btn">Cancel</a>

                        </div>

                    </div>
                </div>
                    </div>
            </div><!-- .animated -->
        </div>
</div>
</form>
</div>

<!-- .content -->


<div class="clearfix"></div>
<?php $this->load->view('include/footer'); ?>
</div>
<!-- /#right-panel -->


<?php $this->load->view('include/script'); ?>