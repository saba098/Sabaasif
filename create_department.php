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
                    <div class="card-header">Department</div>
                    <div class="card-body card-block">
                        <div class="text-right">
                            <a class="btn btn-primary btn_lg"
                                href="<?php echo base_url('Department_con/list_department'); ?>">List Department</a>
                            <form action="<?php echo base_url() . 'Department_con/create_department'; ?>" method="post"
                                name="create_User">
                        </div>
                        <div class="container"></div>
                        <div class="col-lg-6">
                            <label for="validation" class="form-label">Branch:</label>
                            <select class="form-select" name="branch_id" class="form-control" id="validation"
                                value="<?php echo set_value('branch_id'); ?>">
                                <option selected disabled value="<?php echo set_value('branch_id'); ?>">select a Branch
                                    first
                                    ...</option>
                                <?php foreach ($get_branch_id as $branch) {
                                    ?>
                                <option value="<?php echo $branch['branch_id']; ?>">
                                    <?php echo $branch['branch_name'] ?>
                                </option>
                                <?php
                                }
                                ?>
                            </select>
                            <div class="valid-feedback">
                                <?php echo form_error('branch_id'); ?>
                                please select a valid Branch
                            </div>
                        </div>


                        </br>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                <input type="text" id="department_name" name="department_name"
                                    placeholder="department_name" class="form-control"
                                    value="<?php echo set_value('department_name'); ?>">
                                <?php echo form_error('department_name'); ?>
                            </div>
                        </div>
                        <div class="container"></div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="form-actions form-group">
                                    <button type="submit" class="btn btn-primary btn_lg">Submit</button>

                                </div>
                            </div>
                        </div>

                    </div>
                          <!--input-group -->
                </div>
                <!--form-group -->
            </div>
            <!--col-md-6 -->

        </div> <!-- row-->
    </div>

    </form>
</div><!-- card body-->
</div><!-- card header-->
</div><!-- card-->
</div><!-- col lg 6-->
</div><!-- row-->
</div><!-- animated-->
</div><!-- main content-->

<!-- End Main Content -->


<div class="clearfix"></div>
<?php $this->load->view('include/footer'); ?>
</div>
<!-- /#right-panel -->


<?php $this->load->view('include/script'); ?>