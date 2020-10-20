<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Registrate</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="{{ route('crearvendedor') }}" method="post">
						@csrf
						<div class="form-group">
							<label class="col-form-label">Tu nombre</label>
							<div class="col-md-12">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
						</div>
						<div class="form-group">
							<label class="col-form-label">Tus Apellidos</label>
							<div class="col-md-12">
                                <input id="apellidos" type="text" class="form-control @error('apellidos') is-invalid @enderror" name="apellidos" value="{{ old('apellidos') }}" required autocomplete="apellidos" autofocus>

                                @error('apellidos')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
						</div>
						<div class="form-group">
							<label class="col-form-label">Correo electrónico</label>
							<div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
						</div>
						<div class="form-group">
							<label class="col-form-label">Contraseña</label>
							<div class="col-md-12">
                                <input id="clave" type="password" class="form-control @error('clave') is-invalid @enderror" name="clave" required autocomplete="new-password">

                                @error('clave')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
						</div>
						<div class="form-group">
							<label class="col-form-label">Confirmar contraseña</label>
							<div class="col-md-12">
                                <input id="clave-confirm" type="password" class="form-control" name="clave_confirmation" required autocomplete="new-password">
                            </div>
						</div>
						<div class="sub-w3l">
							<div class="custom-control custom-checkbox mr-sm-2">
								<input type="checkbox" class="custom-control-input" id="customControlAutosizing2">
								<label class="custom-control-label" for="customControlAutosizing2">Yo acepto términos y condiciones</label>
								<input type="checkbox" class="custom-control-input" id="customControlAutosizing3">
								<label class="custom-control-label" for="customControlAutosizing3">Acepto el uso de mi información para fines promocionales</label>
							
							</div>
						</div>
						<hr>
						<p style="font-size: small;" ALIGN="text-center">Tambien puedes registrarte con alguna de estas redes sociales.</p>
						<div class="row " ALIGN=center>
							<div class="col-12 col-md-6">
								<!--<button type="button" class="btn btn-sm btn-fb"><i class="fab fa-facebook-f pr-1"></i> Facebook</button> !-->
											<a class="btn btn-primary" href="{{ route('social.auth', 'facebook') }}">Facebook</a>
							</div>
							<div class="col-12 col-md-6">
						
								<button type="button" class="btn btn-sm btn-fb"><i class="fab fa-google pr-1"></i> Google</button>
							</div>
						</div>
						<div class="right-w3l">
							<input type="submit" class="form-control" value="Registrar">
						</div>
						
					</form>
				</div>
			</div>
		</div>
	</div>
