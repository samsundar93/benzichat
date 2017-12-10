<!-- //Fixed Header navbar -->
<div id="page-wrapper">
    <div class="container-fluid">
        <!-- Main Container -->
        <div class="contentWrapper" role="main">
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Company Management</li>
                </ol>
            </nav>
            <div class="pageTitleh1"></div>
            <!-- Page Wrapper -->
            <div class="overviewWrapper">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#allCompany" aria-controls="allCompany" role="tab" data-toggle="tab"><i class="fa fa-fw fa-navicon"></i> All Store</a>
                    </li>
                    <li role="presentation" class="addCompanyTab"><a href="#addcompanyDetails" aria-controls="addcompanyDetails" role="tab" data-toggle="tab"><i class="fa fa-fw fa-plus"></i> Add Company</a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <!-- Add Company -->
                    <div role="tabpanel" class="tab-pane" id="addcompanyDetails">
                        <!-- Profile -->
                        <?= $this->Form->create('addCompany1',[
                            'class' => 'formWrapper form-horizontal',
                            'id' => 'addCompany',
                            'name' => 'addCompany'

                        ]) ?>

                        <!-- Form Name -->
                        <h4> Company Information </h4>

                        <input type="hidden" value="addCompany" name="action">

                        <!-- Text input-->

                        <div class="form-group">
                            <label class="col-md-4 control-label">Company Name</label>
                            <div class="col-md-6 ">
                                <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input  name="companyname" placeholder="Company Name" class="form-control"  type="text" id="companyname">
                                </div>
                                <span class="companynameErr"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">First Name</label>
                            <div class="col-md-6 ">
                                <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input  name="firstname" placeholder="First Name" class="form-control"  type="text" id="firstname">
                                </div>
                                <span class="firstErr"></span>
                            </div>
                        </div>

                        <!-- Text input-->

                        <div class="form-group">
                            <label class="col-md-4 control-label" >Last Name</label>
                            <div class="col-md-6 ">
                                <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input  name="last_name" placeholder="Last Name" class="form-control"  type="text" id="lastname">
                                </div>
                                <span class="lastErr"></span>
                            </div>
                        </div>


                        <!-- Text input-->

                        <div class="form-group">
                            <label class="col-md-4 control-label">Phone #</label>
                            <div class="col-md-6  inputGroupContainer">
                                <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                    <input name="phone" placeholder="(845)555-1212" class="form-control" type="text" id="phonenumber">
                                </div>
                                <span class="phoneErr"></span>
                            </div>
                        </div>

                        <!-- Text input-->

                        <div class="form-group">
                            <label class="col-md-4 control-label">Address</label>
                            <div class="col-md-6  inputGroupContainer">
                                <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                    <input name="address" placeholder="Address" class="form-control" type="text" id="address" autocomplete="off">
                                </div>
                                <span class="addressErr"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Zip Code</label>
                            <div class="col-md-6  inputGroupContainer">
                                <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                    <input name="zipcode" placeholder="Zip Code" class="form-control"  type="text" id="zipcode">
                                </div>
                                <span class="zipcodeErr"></span>
                            </div>
                        </div>
                        <!-- Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label"></label>
                            <div class="col-md-6">
                                <div class="refFrm2BtnGrup">
                                    <button type="reset" class="btn btn-custom"><span class="glyphicon glyphicon-repeat"></span> Reset</button>
                                    <button onclick="return companyValidate()" type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-menu-right"></span> Submit</button>
                                </div>
                            </div>
                        </div>

                        <?= $this->Form->end() ?>
                        <!-- //Profile -->
                    </div>
                    <!-- //Add Company -->
                    <!-- All Company List -->
                    <div role="tabpanel" class="tab-pane active" id="allCompany">
                        <!-- Table Filter -->
                        <div class="searchFilterDiv">
                            <input type="text" class="form-control searchBox" placeholder="Search..">
                        </div>
                        <!-- //Table Filter -->

                        <div class="companyBoxList">
                            <!-- Box 01 -->
                            <?php if(!empty($companyDetails)) {
                                foreach ($companyDetails as $key => $value) { ?>
                                    <div class="companyBoxListTable" onclick="window.location='usermanagement.html'">
                                        <ul>
                                            <li>
                                                <a href="usermanagement.html" title="View Details" class="companyImage"><img src="<?php echo BASE_URL ?>backend/images/logo.png" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <h6><b><?php echo $value['companyname'] ?></b></h6>
                                                <h6><?php echo $value['address'].','.$value['zipcode'] ?></h6>
                                            </li>
                                            <li>
                                                <h5>Number of Users:</h5>
                                                <h3><?php echo $value['userscount']; ?></h3>
                                            </li>
                                        </ul>
                                    </div>

                                    <?php
                                }
                            } ?>

                        </div>
                        <!-- //All Site -->
                    </div>
                    <!--<nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>-->
                    <!-- //All Company List -->
                </div>
                <!-- //Page Wrapper -->
            </div>


        </div>
        <!-- //Main Container -->
    </div>
</div>
<!-- Delete Company Modal -->
<div class="modal fade" id="deleteCompanyConfirmModal" tabindex="-1" role="dialog" aria-labelledby="deleteCompanyConfirmModalLabel">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                </button>
                <h4 class="modal-title" id="deleteCompanyConfirmModalLabel">Confirmation</h4>
            </div>
            <div class="modal-body">
                <p class="text-center">Do you want to delete this Company record?</p>

            </div>
            <div class="modal-footer textAlignCenter">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Yes</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
            </div>
        </div>
    </div>
</div>
