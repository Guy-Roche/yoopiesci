@extends('.layouts.corps')

@section('body')
			<!--Inner Home Banner Start-->
			<div class="wt-haslayout wt-innerbannerholder">
				<div class="container">
					<div class="row justify-content-md-center">
						<div class="col-xs-12 col-sm-12 col-md-8 push-md-2 col-lg-6 push-lg-3">
							<div class="wt-innerbannercontent">
							<div class="wt-title"><h2>Join Now For FREE</h2></div>
							<ol class="wt-breadcrumb">
								<li><a href="index-2.html">Home</a></li>
								<li class="wt-active">Join Now</li>
							</ol>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--Inner Home End-->
			<!--Main Start-->
			<main id="wt-main" class="wt-main wt-haslayout wt-innerbgcolor">
				<!--Register Form Start-->
				<div class="wt-haslayout wt-main-section">
					<div class="container">
						<div class="row justify-content-md-center">
							<div class="col-xs-12 col-sm-12 col-md-10 push-md-1 col-lg-8 push-lg-2">
								<div class="wt-registerformhold">
                                    <form class="wt-formtheme wt-loginform do-login-form">
                                        <fieldset>
                                            <div class="form-group">
                                                <input type="text" name="username" class="form-control" placeholder="Username">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name="password" class="form-control" placeholder="Password">
                                            </div>
                                            <div class="wt-logininfo">
                                                <a href="javascript:;" class="wt-btn do-login-button">Login</a>
                                                <span class="wt-checkbox">
                                                    <input id="wt-login" type="checkbox" name="rememberme">
                                                    <label for="wt-login">Keep me logged in</label>
                                                </span>
                                            </div>
                                        </fieldset>
                                        <div class="wt-loginfooterinfo">
                                            <a href="javascript:;" class="wt-forgot-password">Forgot password?</a>
                                            <a href="{{ route('register') }}">Create account</a>
                                        </div>
                                    </form>
                                </div>
							</div>
						</div>
					</div>
				</div>
				<!--Register Form End-->
			</main>
			<!--Main End-->



@endsection
