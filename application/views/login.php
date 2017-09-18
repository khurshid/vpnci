<div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);"><b>Zingmobile</b></a>
            <small>Virtual Private Network-VPN</small>
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_in" action="<?php print base_url('/login/auth')?>" method="POST">
                    <div class="msg">Sign in to start your session</div>
					<?php if($error!='') { ?>
					<div class="alert bg-pink alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <?php print $error;?>       </div>
					<?php }?>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="email" class="form-control" name="email" placeholder="E-mail" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5 js-modal-buttons">
                            <!--<input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                            <label for="rememberme">Remember Me</label>-->
							<!--<button type="button" data-color="red" class="btn btn-red waves-effect">Forgot Password?</a>-->
							<a href="#" data-color="purple" class="btn bg-purple waves-effect">Forgot Password?</a>
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-pink waves-effect" type="submit">SIGN IN</button>
                        </div>
                    </div>
                    <!--<div class="row m-t-15 m-b--20">
                        <div class="col-xs-6">
                            <a href="sign-up.html">Register Now!</a>
                        </div>
                        <div class="col-xs-6 align-right">
                            <a href="forgot-password.html">Forgot Password?</a>
                        </div>
                    </div> -->
                </form>
            </div>
        </div>
	<div class="modal fade" id="mdModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content" id="forgot-content">
					<form id="frm-forgot" action="<?php print base_url('/login/forgot-password')?>" method="POST">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Forgot Password</h4>
                        </div>
                        <div class="modal-body">
                       <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" required autofocus>
                        </div>
                    </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" id="forgot" class="btn btn-link waves-effect">SUBMIT</button>
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                        </div>
						</form>
						</div>
                    </div>
                </div>
            </div>
		</div>