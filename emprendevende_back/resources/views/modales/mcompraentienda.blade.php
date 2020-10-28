<div class="modal fade" id="ModalCompraEnTienda" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header badge-primary">
                <h5 class="modal-title" style="color: white;"> Compra por tienda </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <ul class="list-group list-group-flush">
                    <div class="row">
                        @foreach ($empresas as $e)
                            <li class="list-group-item"><a href="faqs.html"><img src="{{asset('../storage/app/'.$e->logo_img_empresa)}}"
                                        width="100px" height="100px" class="rounded"></a></li>

						@endforeach
						
                        <div class="col-xs-6">
                            <li class="list-group-item"><a href="faqs.html"><img src="images/logo2.png" alt="img-fluid"
                                        class="rounded"></a></li>
                            <li class="list-group-item"><a href="faqs.html"><img src="images/logo2.png" alt="img-fluid"
                                        class="rounded"></a></li>

                        </div>
                        <div class="col-xs-6">
                            <li class="list-group-item"><a href="faqs.html"><img src="images/logo2.png" alt="img-fluid"
                                        class="rounded"></a></li>
                            <li class="list-group-item"><a href="faqs.html"><img src="images/logo2.png" alt="img-fluid"
                                        class="rounded"></a></li>


                        </div>
                        <div class="col-xs-6">
                            <li class="list-group-item"><a href="faqs.html"><img src="images/logo2.png" alt="img-fluid"
                                        class="rounded"></a></li>
                            <li class="list-group-item"><a href="faqs.html"><img src="images/logo2.png" alt="img-fluid"
                                        class="rounded"></a></li>


                        </div>
                        <div class="col-xs-6">
                            <li class="list-group-item"><a href="./about.html"><img src="images/logo2.png"
                                        alt="img-fluid" class="rounded"></a></li>
                            <li class="list-group-item"><a href="./about.html"><img src="images/logo2.png"
                                        alt="img-fluid" class="rounded"></a></li>


                        </div>
                        <div class="col-xs-6">
                            <li class="list-group-item"><a href="./about.html"><img src="images/logo2.png"
                                        alt="img-fluid" class="rounded"></a></li>
                            <li class="list-group-item"><a href="./about.html"><img src="images/logo2.png"
                                        alt="img-fluid" class="rounded"></a></li>


                        </div>
                        <div class="col-xs-6">
                            <li class="list-group-item"><a href="./about.html"><img src="images/logo2.png"
                                        alt="img-fluid" class="rounded"></a></li>
                            <li class="list-group-item"><a href="./about.html"><img src="images/logo2.png"
                                        alt="img-fluid" class="rounded"></a></li>


                        </div>
                        <div class="col-xs-6">
                            <li class="list-group-item"><a href="./about.html"><img src="images/logo2.png"
                                        alt="img-fluid" class="rounded"></a></li>
                            <li class="list-group-item"><a href="./about.html"><img src="images/logo2.png"
                                        alt="img-fluid" class="rounded"></a></li>

                        </div>
                        <div class="col-xs-6">
                            <li class="list-group-item"><a href="./about.html"><img src="images/logo2.png"
                                        alt="img-fluid" class="rounded"></a></li>
                            <li class="list-group-item"><a href="./about.html"><img src="images/logo2.png"
                                        alt="img-fluid" class="rounded"></a></li>


                        </div>
                        <div class="col-xs-6">
                            <li class="list-group-item"><a href="./about.html"><img src="images/logo2.png"
                                        alt="img-fluid" class="rounded"></a></li>
                            <li class="list-group-item"><a href="./about.html"><img src="images/logo2.png"
                                        alt="img-fluid" class="rounded"></a></li>

                        </div>

                    </div>

                </ul>
            </div>
        </div>
    </div>
</div>
