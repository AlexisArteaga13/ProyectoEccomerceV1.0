<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-center">Iniciar sesión</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="{{ route('login') }}" method="post">
                        @csrf
						<div class="form-group">
							<label class="col-form-label">Correo electrónico</label>
                            <!--<input type="text" class="form-control" placeholder="Ingrese su correo electrónico" name="Name" required="">!-->
                            <div class="col-md-12">
                                <input id="email" type="email"  placeholder="Ingrese su correo electrónico" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
						</div>
						<div class="form-group">
							<label class="col-form-label">Contraseña</label>
							<!--<input type="password" class="form-control" placeholder="Contraseña" name="Password" required="">!-->
                            <div class="col-md-12">
                                <input id="password" type="password" placeholder="Ingrese su contraseña" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
						<div class="right-w3l" ALING = "center">
							<!--<input type="submit" class="form-control" value="Iniciar sesión">-->
							<!--<a class="form-control bg-primary" style="color: white;" href='../bs-siminta-admin/index.html'>Iniciar sesión</a>
                           !--> <button type="submit" class="form-control btn btn-primary">
                                    {{ __('Iniciar Sesión') }}
                                </button>
                        </div>
						<p style="font-size: small;" ALIGN="text-center">Tambien puedes iniciar sesión con alguna de estas redes sociales.</p>
						<div class="row " ALIGN=center>
							<div class="col-12 col-md-6">
								<!--<button type="button" class="btn btn-sm btn-fb"><i class="fab fa-facebook-f pr-1"></i> Facebook</button> !-->
											<a class="btn btn-primary" href="{{ route('social.auth', 'facebook') }}"><i class="fab fa-facebook-f pr-1"></i> Facebook</a>
							</div>
							<div class="col-12 col-md-6">
							<a class="btn btn-danger" href="{{ route('social.auth', 'google') }}"><i class="fab fa-google pr-1"></i> Google</a>
								<!--<button type="button" class="btn btn-sm btn-fb"><i class="fab fa-google pr-1"></i> Google</button>!-->
							</div>
						</div>
                        
						<!--<div class="sub-w3l">
							<div class="custom-control custom-checkbox mr-sm-2">
                           
								<input type="checkbox"  name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="custom-control-label" for="customControlAutosizing">Recordarme?</label>

							</div>
						</div>!-->
						<p class="text-center dont-do mt-3">No tienes una cuenta?
							<a href="#" data-toggle="modal" data-target="#exampleModal2">
								Registrar ahora</a>
                        </p>
                        @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Olvidaste tu contraseña?') }}
                                    </a>
                                @endif
					</form>
				</div>
			</div>
		</div>
	</div>