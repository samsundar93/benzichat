<div id="wrapper" class="loginPageWrapper">
    <!-- Loading Progress -->
    <div class="loadingProgress">
        <div class="loadingProgressIn"></div>
    </div>
    <!-- //Loading Progress -->
    <!-- Fixed Header navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"></button>
            <a class="navbar-brand benchichatLogo" title="Benzichat" href="index.html">&nbsp;</a>
        </div>
        <!-- Header Top Right Nav -->
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right top-nav">
                <li class="languageSel dropdown">
                    <a href="#" id="languageSelectedBtn" class="dropdown-toggle" data-toggle="dropdown">English <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">English</span></a></li>
                        <li><a href="#">German</span></a></li>
                        <li><a href="#">Spanish</span></a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- //Header Top Right Nav -->
    </nav>
    <!-- //Fixed Header navbar -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="contentWrapper" role="main">
                <!-- Login Form -->
                <div class="LoginWrapper">
                    <a href="corporatevideo.html" title="Benzichat" class="loginLogo">&nbsp;</a>
                    <?= $this->Form->create('login',[
                        'class' => 'loginForm'
                    ]) ?>
                        <div class="loginTitle">
                            <h2>Sign In</h2>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <?= $this->Form->input('username',
                                [
                                    'type' => 'text',
                                    'class' => 'form-control',
                                    'required' => 'true',
                                    'placeholder' => 'Enter username',
                                    'label' => false
                                ]
                            ) ?>
                        </div>

                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <?= $this->Form->input('password',[
                                'type' => 'text',
                                'class' => 'form-control',
                                'required' => 'true',
                                'type' => 'password',
                                'placeholder' => 'Enter password',
                                'label' => false
                            ]) ?>
                        </div>
                        <div class="input-group rememberForgotPwd">
                            <div class="customCheckbox customCheckboxWlabel">
                                <input id="RememberMe" type="checkbox" value="RememberMe">
                                <label for="RememberMe">Remember Me</label>
                            </div>
                            <div class="forgotPwdDiv">
                                <a href="forgotpassword.html">Forgot Password?</a>
                            </div>
                        </div>
                        <?= $this->Form->submit('Login',[
                            'class' => 'loginButton btn'
                        ]); ?>
                        <div class="newRegisterDiv">
                            Don't have an account! <a href="register.html"> Sign Up</a> Here
                        </div>
                    <?= $this->Form->end() ?>
                    <div class="clear"></div>
                </div>
                <!-- //Login Form -->
            </div>
        </div>
    </div>
</div>