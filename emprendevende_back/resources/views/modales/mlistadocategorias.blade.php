<div class="modal fade" id="ModalCategoria" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header badge-primary">
					<h5 class="modal-title" style="color: white;"> Listado de Categorías </h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<ul class="list-group list-group-flush">
					<div class="row">	
						@foreach ($categorias as $c)
					<li class="list-group-item"><a href="{{route('tienda.categoria',$c->idCategoria)}}">{{$c->nombreCategoria}}</a></li>
					
						@endforeach
						

					</div>
								
					  </ul>
				</div>
			</div>
		</div>
	</div>