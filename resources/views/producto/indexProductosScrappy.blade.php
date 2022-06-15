<div class="card card-custom card-stretch gutter-b">
    <div class="card-body">
        <!--begin::Section-->
        <div class="mb-11">
            <!--begin::Heading-->
            <div class="d-flex justify-content-between align-items-center mb-7">
                <h2 class="font-weight-bolder text-dark font-size-h3 mb-0">Productos Mas Baratos</h2>
                <a href="{!! route('view_producto') !!}" class="btn btn-light-primary btn-sm font-weight-bolder">Ver Todos</a>
            </div>
            <!--end::Heading-->
            <!--begin::Products-->
            <div class="row">
                <!--begin::Product-->
                @foreach ($productos as $producto)
                
                <div class="col-md-4 col-xxl-4 col-lg-12">
                    <!--begin::Card-->
                    <div class="card card-custom card-shadowless">
                        <div class="card-body p-0">
                            <!--begin::Image-->
                            <div class="overlay">
                                <div class="overlay-wrapper rounded bg-light text-center">
                                    <img src="assets/media/products/{{$producto->IMAGEN}}" alt="" class="mw-100 w-200px">
                                </div>
                                <div class="overlay-layer">
                                    <button type="button" id="bt1" class="btn font-weight-bolder btn-sm btn-primary mr-2" data-toggle="modal" data-target="#modal_ver_producto-{{$producto->id}}">Detalles</button>
                                    
                                    <a href="{!! route('verWeb',['id'=>$producto->ID_PAGINA]) !!}" class="btn font-weight-bolder btn-sm btn-light-primary">Ver en la Web</a>
                                </div>
                            </div>
                            <!--end::Image-->
                            <!--begin::Details-->
                            <div class="text-center mt-5 mb-md-0 mb-lg-5 mb-md-0 mb-lg-5 mb-lg-0 mb-5 d-flex flex-column">
                                <a href="#" class="font-size-h5 font-weight-bolder text-dark-75 text-hover-primary mb-1">{{$producto->LINEA}}</a>
                                <span class="font-size-lg">{{$producto->MODELO}}</span>
                            </div>
                            <!--end::Details-->
                        </div>
                    </div>
                    <!--end::Card-->
                </div>
                @endforeach
            
                <!--end::Product-->
            </div>
            <!--end::Products-->
        </div>
        <!--end::Section-->
        <!--begin::Section-->
        <div class="mb-11">
            <!--begin::Heading-->
            <div class="d-flex justify-content-between align-items-center mb-7">
                <h2 class="font-weight-bolder text-dark font-size-h3 mb-0">Fecha Salida Cercana</h2>
                <a href="{!! route('view_producto') !!}" class="btn btn-light-primary btn-sm font-weight-bolder">Ver Todos</a>
            </div>
            <!--end::Heading-->
            <!--begin::Products-->
            <div class="row">
                <!--begin::Product-->
                @foreach ($productosCercanos as $prodCerc)
                <div class="col-md-4 col-xxl-4 col-lg-12">
                    <!--begin::Card-->
                    <div class="card card-custom card-shadowless">
                        <div class="card-body p-0">
                            <!--begin::Image-->
                            <div class="overlay">
                                <div class="overlay-wrapper rounded bg-light text-center">
                                    <img src="assets/media/products/{{$prodCerc->IMAGEN}}" alt="" class="mw-100 w-200px">
                                </div>
                                <div class="overlay-layer">
                                    <a href="#" class="btn font-weight-bolder btn-sm btn-primary mr-2" data-toggle="modal" data-target="#modal_ver_producto-{{$prodCerc->id}}">Detalles</a>
                                    <a href="{!! route('verWeb',['id'=>$prodCerc->ID_PAGINA]) !!}" class="btn font-weight-bolder btn-sm btn-light-primary">Ver en la Web</a>
                                </div>
                            </div>
                            <!--end::Image-->
                            <!--begin::Details-->
                            <div class="text-center mt-5 mb-md-0 mb-lg-5 mb-md-0 mb-lg-5 mb-lg-0 mb-5 d-flex flex-column">
                                <a href="#" class="font-size-h5 font-weight-bolder text-dark-75 text-hover-primary mb-1">{{$prodCerc->LINEA}}</a>
                                <span class="font-size-lg">{{$prodCerc->MODELO}}</span>
                            </div>
                            <!--end::Details-->
                        </div>
                    </div>
                    <!--end::Card-->
                </div>
                @endforeach
                <!--end::Product-->
            
            </div>
            <!--end::Products-->
        </div>
        <!--end::Section-->
        <!--begin::Section-->
        <div>
            <!--begin::Heading-->
            <div class="d-flex justify-content-between align-items-center mb-7">
                <h2 class="font-weight-bolder text-dark font-size-h3 mb-0">Ultimas Novedades</h2>
                <a href="{!! route('view_producto') !!}" class="btn btn-light-primary btn-sm font-weight-bolder">Ver Todos</a>
            </div>
            <!--end::Heading-->
            <!--begin::Products-->
            <div class="row">
                @foreach ($lastProductos as $lastProd)
                <!--begin::Product-->
                <div class="col-md-4 col-xxl-4 col-lg-12">
                    <!--begin::Card-->
                    <div class="card card-custom card-shadowless">
                        <div class="card-body p-0">
                            <!--begin::Image-->
                            <div class="overlay">
                                <div class="overlay-wrapper rounded bg-light text-center">
                                    <img src="/assets/media/products/{{$lastProd->IMAGEN}}" alt="" class="mw-100 w-200px">
                                </div>
                                <div class="overlay-layer">
                                    <a href="#" class="btn font-weight-bolder btn-sm btn-primary mr-2" data-toggle="modal" data-target="#modal_ver_producto-{{$lastProd->id}}">Detalles</a>
                                    <a href="{!! route('verWeb',['id'=>$lastProd->ID_PAGINA]) !!}" class="btn font-weight-bolder btn-sm btn-light-primary">Ver en la Web</a>
                                </div>
                            </div>
                            <!--end::Image-->
                            <!--begin::Details-->
                            <div class="text-center mt-5 mb-md-0 mb-lg-5 mb-md-0 mb-lg-5 mb-lg-0 mb-5 d-flex flex-column">
                                <a href="#" class="font-size-h5 font-weight-bolder text-dark-75 text-hover-primary mb-1">{{$lastProd->LINEA}}</a>
                                <span class="font-size-lg">{{$lastProd->MODELO}}</span>
                            </div>
                            <!--end::Details-->
                        </div>
                    </div>
                    <!--end::Card-->
                </div>
                @endforeach
                <!--end::Product-->
            </div>
            <!--end::Products-->
        </div>
        <!--end::Section-->
    </div>
</div>
@include('modals.modalDetalles')
@include('modals.modalDetallesCercanos')
@include('modals.modalDetallesNovedades')