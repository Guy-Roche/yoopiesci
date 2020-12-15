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
									<div class="wt-registerformmain">
										<div class="wt-registerhead">
											<div class="wt-title">
												<h3>Join For a Good Start</h3>
											</div>
											<div class="wt-description">
												<p>Consectetur adipisicing elit sed dotem eiusmod tempor incune utnaem labore etdolore maigna aliqua enim poskina</p>
											</div>
										</div>
										<div class="wt-joinforms">
											<ul class="wt-joinsteps">
												<li><a href="javascrip:void(0);">01</a></li>
												<li><a href="javascrip:void(0);">02</a></li>
												<li ><a href="javascrip:void(0);">03</a></li>
												<li class="wt-active"><a href="javascrip:void(0);">04</a></li>
											</ul>
											<form class="wt-formtheme wt-formregister">
												<fieldset class="wt-registerformgroup">

                                                    <div class="form-group  form-group-half">
														<span class="wt-select">
															<select>
                                                                <option>Langue parlée </option>
                                                                <option>Français</option>
                                                                <option>Anglais</option>
                                                                <option>Mandarin</option>
                                                                <option>Arabe</option>
                                                                <option>si autre préciser</option>
															</select>
														</span>
                                                    </div>
                                                    <div class="form-group form-group-half">
														<input type="text" name="LangAntre" class="form-control" placeholder="Chinois">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="formFileLg" class="form-label">Télécharger votre CV</label>
                                                        <input class="form-control form-control-lg" id="formFileLg" type="file">
                                                    </div>

                                                    <div class="form-group ">
														<input type="text" name="FonctAct class="form-control" placeholder="Professeur">
                                                    </div>

													<div class="form-group">
														<a href="{{ route ('register4') }}" class="wt-btn">Valider</a>
													</div>
												</fieldset>
											</form>

									<div class="wt-registerformfooter">
										<span>Already Have an Account? <a href="javascript:void(0);">Login Now</a></span>
									</div></br>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--Register Form End-->
			</main>
			<!--Main End-->



@endsection
