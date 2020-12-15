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
												<li class="wt-active"><a href="javascrip:void(0);">01</a></li>
												<li><a href="javascrip:void(0);">02</a></li>
												<li><a href="javascrip:void(0);">03</a></li>
												<li><a href="javascrip:void(0);">04</a></li>
											</ul>
											<form class="wt-formtheme wt-formregister">
												<fieldset class="wt-registerformgroup">

													<div class="form-group ">
														<input type="text" name="Name" class="form-control" placeholder="Nom">
                                                    </div>
                                                    <div class="form-group ">
														<input type="text" name="LastName" class="form-control" placeholder="Prenom">
                                                    </div>

													<div class="form-group">
														<input type="text" name="Email" class="form-control" placeholder="Email">
                                                    </div>
                                                    <div class="form-group  ">
														<span class="wt-select">
															<select>
                                                                <option>Adresse de résidence</option>
                                                                <option>Ville</option>
                                                                <option>Commune</option>
                                                                <option>Quartier</option>
															</select>
														</span>
													</div>
                                                    <div class="form-group">
														<input type="text" name="text" class="form-control" placeholder="Nationalité">
                                                    </div>
                                                    <div class="form-group">
                                                        <h5 style="color: red;">Numéro OM MM MOMO (obligatoire pour payement) </h5>
                                                    </div>
                                                    <div class="form-group form-group-half">
														<input type="text" name="Tel1" class="form-control" placeholder="Téléphone 1">
                                                    </div>
                                                    <div class="form-group form-group-half">
														<input type="text" name="Tel2" class="form-control" placeholder="Téléphone 2">
                                                    </div>

                                                    <div class="form-group ">
														<input type="date" name="DateNais" class="form-control" placeholder="">
                                                    </div>

                                                    <div class="form-group form-group-half ">
														<span class="wt-select">
															<select>
                                                                <option>Pièces d’identités disponible </option>
                                                                <option>CNI</option>
                                                                <option>Passeport</option>
                                                                <option>Autre à préciser</option>
															</select>
														</span>
                                                    </div>
                                                    <div class="form-group form-group-half">
														<input type="text" name="PieceAutre" class="form-control" placeholder="permis">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="formFileLg" class="form-label">Télécharger votre pièce valide</label>
                                                        <input class="form-control form-control-lg" id="formFileLg" type="file">
                                                    </div>


                                                    <div class="form-group">
                                                        <label for="formFileLg" class="form-label">Télécharger autre pièce 2</label>
                                                        <input class="form-control form-control-lg" id="formFileLg" type="file">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="formFileLg" class="form-label">Télécharger autre pièce 3</label>
                                                        <input class="form-control form-control-lg" id="formFileLg" type="file">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="formFileLg" class="form-label">Télécharger votre photo</label>
                                                        <input class="form-control form-control-lg" id="formFileLg" type="file">
                                                    </div>
													<div class="form-group">
														<a href="{{ route ('register2') }}" class="wt-btn">Valider</a>
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
