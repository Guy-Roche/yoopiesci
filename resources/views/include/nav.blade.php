			<header id="wt-header" class="wt-header wt-haslayout">
				<div class="wt-navigationarea">
					<div class="container-fluid">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<strong class="wt-logo" style="margin-left: 20px;"><a href="{{ route('accueil') }}"><img src="{{ asset('web/images/logo/logo_small.png')}}" alt="company logo here" style="width: 80px"></a></strong>
								<div class="wt-rightarea" style="padding: 10px">
									<nav id="wt-nav" class="wt-nav navbar-expand-lg">
										<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
											<i class="lnr lnr-menu"></i>
										</button>
										<div class="collapse navbar-collapse wt-navigation" id="navbarNav">
											<ul class="navbar-nav">
                                                <li class="nav-item">
													<a href="{{ route('accueil') }}">Accueil</a>
												</li>
												<li class="nav-item">
													<a href="howitworks.html">Comment ça marche ?</a>
												</li>
												<li class="menu-item-has-children page_item_has_children"><span class="wt-dropdowarrow"><i class="lnr lnr-chevron-right"></i></span>
													<a href="javascript:void(0);">Intervenants</a>
													<ul class="sub-menu">
														<li>
															<a href="{{ route('userlisting') }}">Liste</a>
														</li>
													</ul>
												</li>
											</ul>
										</div>
									</nav>
									<div class="wt-userlogedin" style="margin-bottom: -8px;">
										<figure class="wt-userimg">
											<img src="{{ asset('web/images/user-login.png') }}" alt="image description">
										</figure>
                                        <div class="wt-loginoption" style="margin-bottom: 12px;">
											<a href="{{ route ('login') }}" id="wt-login" class="wt-loginbtn">Connexion</a>

										</div>
                                        <a href="{{route ('register') }}" class="wt-btn" style="margin-left: 12px;">Inscription</a>
                                    </div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
