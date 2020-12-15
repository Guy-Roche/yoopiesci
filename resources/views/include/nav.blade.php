			<header id="wt-header" class="wt-header wt-haslayout">
				<div class="wt-navigationarea">
					<div class="container-fluid">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<strong class="wt-logo"><a href="{{ route('accueil') }}"><img src="{{ asset('web/images/logo/logo_small.png')}}" alt="company logo here" width="100px" height="100px"></a></strong>
								<div class="wt-rightarea" style="padding: 20px">
									<nav id="wt-nav" class="wt-nav navbar-expand-lg">
										<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
											<i class="lnr lnr-menu"></i>
										</button>
										<div class="collapse navbar-collapse wt-navigation" id="navbarNav">
											<ul class="navbar-nav">
												<li class="menu-item-has-children page_item_has_children"><span class="wt-dropdowarrow"><i class="lnr lnr-chevron-right"></i></span>
													<a href="javascript:void(0);">Main</a>
													<ul class="sub-menu">
														<li class="menu-item-has-children page_item_has_children wt-notificationicon"><span class="wt-dropdowarrow"><i class="lnr lnr-chevron-right"></i></span><span class="wt-dropdowarrow"><i class="lnr lnr-chevron-right"></i></span>
															<a href="javascript:void(0);">Home</a>
															<ul class="sub-menu">
																<li><a href="index-2.html">Home v1</a></li>
																<li class="wt-newnoti"><a href="indexvtwo.html">Home v2<em>without login</em></a></li>
															</ul>
														</li>
														<li class="menu-item-has-children page_item_has_children"><span class="wt-dropdowarrow"><i class="lnr lnr-chevron-right"></i></span><span class="wt-dropdowarrow"><i class="lnr lnr-chevron-right"></i></span>
															<a href="javascript:void(0);">Article</a>
															<ul class="sub-menu">
																<li><a href="articlelist.html">Article List</a></li>
																<li><a href="articlegrid.html">Article Grid</a></li>
																<li><a href="articlesingle.html">Article Single</a></li>
																<li><a href="articleclassic.html">Article Classic</a></li>
															</ul>
														</li>
														<li class="menu-item-has-children page_item_has_children"><span class="wt-dropdowarrow"><i class="lnr lnr-chevron-right"></i></span><span class="wt-dropdowarrow"><i class="lnr lnr-chevron-right"></i></span>
															<a href="javascript:void(0);">Company</a>
															<ul class="sub-menu">
																<li><a href="companygrid.html">Company Grid</a></li>
																<li><a href="companysigle.html">Company Sigle</a></li>
															</ul>
														</li>
														<li>
															<a href="about.html">About</a>
														</li>
														<li>
															<a href="privacypolicy.html">Privacy Policy</a>
														</li>
														<li>
															<a href="comingsoon.html">Coming Soon</a>
														</li>
														<li>
															<a href="404page.html">404page</a>
														</li>
													</ul>
												</li>
												<li class="nav-item">
													<a href="howitworks.html">How It Works</a>
												</li>
												<li class="menu-item-has-children page_item_has_children"><span class="wt-dropdowarrow"><i class="lnr lnr-chevron-right"></i></span>
													<a href="javascript:void(0);">Browse Jobs</a>
													<ul class="sub-menu">
														<li>
															<a href="{{ route('joblisting') }}">Job Listing</a>
														</li>
														<li class="current-menu-item">
															<a href="{{ route('jobsingle') }}">Job Single</a>
														</li>
														<li>
															<a href="{{ route('jobproposal') }}">Job Proposal</a>
														</li>
													</ul>
												</li>
												<li class="menu-item-has-children page_item_has_children"><span class="wt-dropdowarrow"><i class="lnr lnr-chevron-right"></i></span>
													<a href="javascript:void(0);">View Freelancers</a>
													<ul class="sub-menu">
														<li>
															<a href="{{ route('userlisting') }}">User Listing</a>
														</li>
														<li class="current-menu-item">
															<a href="{{ route('usersingle') }}">User Single</a>
														</li>
													</ul>
												</li>
											</ul>
										</div>
									</nav>
									<div class="wt-userlogedin">
										<figure class="wt-userimg">
											<img src="{{ asset('web/images/user-login.png') }}" alt="image description">
										</figure>
                                        <div class="wt-loginoption">
											<a href="javascript:void(0);" id="wt-loginbtn" class="wt-loginbtn">Login</a>
											<div class="wt-loginformhold">
												<div class="wt-loginheader">
													<span>Login</span>
													<a href="javascript:;"><i class="fa fa-times"></i></a>
												</div>
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
														<a href="register.html">Create account</a>
													</div>
												</form>
											    <form class="wt-formtheme wt-loginform do-forgot-password-form wt-hide-form">
											        <fieldset>
											            <div class="form-group">
											                <input type="email" name="email" class="form-control get_password" placeholder="Email">
											            </div>

											            <div class="wt-logininfo">
											                <a href="javascript:;" class="wt-btn do-get-password">Get Pasword</a>
											            </div>
											        </fieldset>
											        <div class="wt-loginfooterinfo">
											            <a href="javascript:void(0);" class="wt-show-login">Login</a>
											            <a href="register.html">Create account</a>
											        </div>
											    </form>
											</div>
										</div>
										<a href="register.html" class="wt-btn">Join Now</a>
                                    </div>
                                    <div class="wt-loginarea">
										<figure class="wt-userimg">
											<img src="{{ asset('web/images/user-login.png') }}" alt="img description">
										</figure>
										<div class="wt-loginoption">
											<a href="javascript:void(0);" id="wt-loginbtn" class="wt-loginbtn">Login</a>
											<div class="wt-loginformhold">
												<div class="wt-loginheader">
													<span>Login</span>
													<a href="javascript:;"><i class="fa fa-times"></i></a>
												</div>
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
											    <form class="wt-formtheme wt-loginform do-forgot-password-form wt-hide-form">
											        <fieldset>
											            <div class="form-group">
											                <input type="email" name="email" class="form-control get_password" placeholder="Email">
											            </div>

											            <div class="wt-logininfo">
											                <a href="javascript:;" class="wt-btn do-get-password">Get Pasword</a>
											            </div>
											        </fieldset>
											        <div class="wt-loginfooterinfo">
											            <a href="javascript:void(0);" class="wt-show-login">Login</a>
											            <a href="{{ route('register') }}">Create account</a>
											        </div>
											    </form>
											</div>
										</div>
										<a href="{{ route('register') }}" class="wt-btn" >Join Now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
