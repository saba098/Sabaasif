<?php  $this->load->view('include/header'); ?>
<?php  $this->load->view('include/sidebar'); ?>
<?php  $this->load->view('include/navbar'); ?>

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
<div class="content">
    <div class="animated fadeIn">
    </div>
    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Data Table</strong><br>
                    <div class="col_md_12">
                        <div class="text-right">
                            <a href="<?php echo base_url() . 'fee_type_con/create_fee/' ; ?>"
                                class="btn btn-primary">Create</a>
                            <div>
                                <div class="col-md-12">
                                    <div class="text-left">
                                        <?php
                                     $success = $this->session->userdata('success');
                                            if($success != ""){
                                            ?>
                                        <div class="alert alert-success"><?php echo $success;?></div>
                                        <?php
                                            }
                                            ?>
                                        <?php
                                             $failure = $this->session->userdata('failure');
                                            if($failure != ""){
                                            ?>
                                        <div class="alert alert-success"><?php echo $failure;?></div>
                                        <?php
                                            }
                                            ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>fee_id</th>
                            <th>fee_name</th>
                            <th>fee_desc</th>

                            <th width="70">Edit</th>
                            <th width="100">Delete</th>
                        </tr>
                        <?php  $i=0;
                       if (!empty($fee)) {
                                foreach ($fee as $fe) {  
                                    $i++;?>
                        <tr>
                            <td>
                                <?php echo $i ?>
                            </td>
                            <td>
                                <?php echo $fe['fee_name'] ?>
                            </td>
                            <td>
                                <?php echo $fe['fee_desc'] ?>
                            </td>

                            <td>

                                <a href="<?php echo base_url() .'fee_type_con/edit_fee/' . $fe['fee_id']; ?>"
                                    class="btn btn-primary">Edit</a>
                            </td>
                            <td>

                                <a href="<?php echo base_url() . 'fee_type_con/delete_fee/' . $fe['fee_id']; ?>"
                                    class="btn btn-danger">Delete</a>
                            </td>


                        </tr>
                        <?php }
                            } else { ?>
                        <tr>
                            <td colspan="5">Records Not Found</td>
                        </tr>
                        <?php } ?>

                    </table>
                </div>
            </div>
        </div>


    </div>
</div><!-- .animated -->
</div>
<!-- .content -->


<div class="clearfix"></div>
<?php  $this->load->view('include/footer'); ?>
</div>
<!-- /#right-panel -->


<?php  $this->load->view('include/script'); ?>