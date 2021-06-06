    <div class="error-pagewrap">
    	<div class="error-page-int">
    		<div class="text-center custom-login">
    			<h3>Registration</h3>
    			<p>This is the best app ever!</p>
    		</div>
    		<div class="content-error">
    			<div class="hpanel">
    				<div class="panel-body">
    					<form action="<?php echo base_url('AuthController/register_proses') ?>" method="post"
    						id="loginForm">
    						<div class="row">
    							<div class="form-group col-lg-12">
    								<label>Email</label>
    								<input class="form-control" value="example@gmail.com" name="email">
    							</div>
    							<div class="form-group col-lg-12">
    								<label>Password</label>
    								<input type="password" class="form-control" name="password">
    							</div>
    						</div>
                            <div class="form-group col-lg-6">
                                <input type="checkbox" class="form-check-input" name="level" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
    						<div class="text-center">
    							<button class="btn btn-success loginbtn" type="submit">Register</button>
    							<button class="btn btn-default">Cancel</button>
    						</div>
    					</form>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
