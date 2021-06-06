  <div class="error-pagewrap">
    <div class="error-page-int">
      <div class="text-center m-b-md custom-login">
        <h3>PLEASE LOGIN</h3>
      </div>
      <div class="content-error">
        <div class="hpanel">
                    <div class="panel-body">
                        <form action="<?php echo base_url('AuthController/auth_proses') ?>" method="post" id="loginForm">
                            <div class="form-group">
                                <label class="control-label" for="username">Username</label>
                                <input type="text" placeholder="example@gmail.com" title="Please enter you username" required="" value="" name="email" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" title="Please enter your password" placeholder="******" required="" value="" name="password" id="password" class="form-control">
                            </div>
                            <button class="btn btn-success btn-block loginbtn" type="submit">Login</button>
                            <a class="btn btn-default btn-block" href="<?php echo base_url('AuthController/register') ?>">Register</a>
                        </form>
                    </div>
                </div>
      </div>
    </div>   
    </div>