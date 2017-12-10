<div id="page-wrapper">
    <div class="container-fluid">
        <!-- Main Container -->
        <div class="contentWrapper" role="main">
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Customer Add</li>
                </ol>
            </nav>
            <div class="pageTitleh1"></div>
            <!-- Page Wrapper -->
            <div class="overviewWrapper">
                <!-- Tab panes -->
                    <!-- Add Company -->
                <div role="tabpanel" class="tab-pane" id="addcompanyDetails">
                    <!-- Profile -->
                    <?= $this->Form->create('addCustomerForm',[
                        'class' => 'formWrapper form-horizontal',
                        'id' => 'addCustomer',
                        'name' => 'addCustomer'

                    ]) ?>
                    <!-- Form Name -->
                    <h4> Customer Information </h4>

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

                    <div class="form-group">
                        <label class="col-md-4 control-label">Email Address</label>
                        <div class="col-md-6  inputGroupContainer">
                            <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                <input name="username" placeholder="abc@gmail.com" class="form-control" type="text" id="username">
                            </div>
                            <span class="emailErr"></span>
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
                    <!-- Button -->
                    <div class="form-group">
                        <label class="col-md-4 control-label"></label>
                        <div class="col-md-6">
                            <div class="refFrm2BtnGrup">
                                <button type="reset" class="btn btn-custom"><span class="glyphicon glyphicon-repeat"></span> Reset</button>
                                <button onclick="return customerValidate()" type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-menu-right"></span> Submit</button>
                            </div>
                        </div>
                    </div>

                    <?= $this->Form->end() ?>
                    <!-- //Profile -->
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function customerValidate() {
        $(".error").html('');
        var firstname = $("#firstname").val();
        var lastname = $("#lastname").val();
        var phonenumber = $("#phonenumber").val();
        var username = $("#username").val();
        var address = $("#address").val();

        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        if(firstname == '') {
            $(".firstErr").addClass('error').html('Please enter your firstname');
            $("#firstname").focus();
            return false;

        }else if(lastname == '') {
            $(".lastErr").addClass('error').html('Please enter your lastname');
            $("#lastname").focus();
            return false;

        }else if(phonenumber == '') {
            $(".phoneErr").addClass('error').html('Please enter your phonenumber');
            $("#phonenumber").focus();
            return false;

        }else if(username == '') {
            $(".emailErr").addClass('error').html('Please enter your email address');
            $("#username").focus();
            return false;
        }else if(!regex.test(username)) {
            $(".emailErr").addClass('error').html('Please enter valid email');
            $("#username").focus();
            return false;

        }else if(address == '') {
            $(".addressErr").addClass('error').html('Please enter your address');
            $("#address").focus();
            return false;

        }else {
            $("#addCustomer").submit();
        }

    }
</script>