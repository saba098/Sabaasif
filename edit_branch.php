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
    <h3>Update Branch</h3>
    <form method="post" name="create_User" action="<?php echo base_url() . 'Branch_con/edit_branch/' . $branch['branch_id']; ?>">
        <div class="row">
            

            <div class="col-md-12">
                <div class="form-group">
                </div>
                <div class="form-group">
                    <label>branch_name</label>
                    <input type="text" name="branch_name" value="<?php echo set_value('branch_name', $branch['branch_name']); ?>"
                        class="form-control">
                    <?php echo form_error('branch_name'); ?>

                


                <div class="text-right">
                    <div class="form-group">
                        <div class="form-actions form-group"><button type="submit"
                                class="btn btn-primary btn_lg">update</button>

                            <a href="<?php echo base_url().'Branch_con/list_branch';?>" class="btn-secondary btn">Cancel</a>

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