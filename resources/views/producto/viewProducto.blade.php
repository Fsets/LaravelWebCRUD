@extends('layouts.app')
@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="d-flex flex-column-fluid">
        <div class="container">
            
            <div class="row">
                <!--begin::Col-->
                @foreach ($productos as $producto)
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <!--begin::Card-->
                    <div class="card card-custom gutter-b card-stretch">
                        <!--begin::Body-->
                        <div class="card-body pt-4">
                            <!--begin::User-->
                            <div class="d-flex align-items-end mb-7">
                                <!--begin::Pic-->
                                <div class="d-flex align-items-center mb-7">

                                    <!--begin::Pic-->
                                    <div class="flex-shrink-0 mr-4 mt-lg-0 mt-3">
                                        <div class="symbol symbol-50 symbol-lg-100">
                                            <img src="assets/media/products/{{$producto->img}}" >
                                        </div>

                                    </div>
                                    <!--end::Pic-->

                                    <!--begin::Title-->
                                    <div class="d-flex flex-column">
                                        <a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">{{$producto->titulo}}</a>
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::User-->
                            <!--begin::Desc-->
                            <div class="mb-7">
                                <div class="align-items-center ">
                                    <span class="text-dark-75 font-weight-bolder mr-2">Descripcion:</span>
                                    <p class="mb-7">{{$producto->descripcion}}</p>
                                </div>
                            </div>
                            <!--end::Desc-->
                            <!--begin::Info-->
                            <div class="mb-7">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="text-dark-75 font-weight-bolder mr-2">Precio:</span>
                                    <span class="text-muted font-weight-bold">{{$producto->precio}}</span>
                                </div>
                            </div>
                            <!--end::Info-->
                            <a href="#" class="btn btn-block btn-sm btn-light-warning font-weight-bolder text-uppercase py-4">Comprar Producto</a>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Card-->
                </div>
                @endforeach
                <!--end::Col-->
            </div>
        </div>
    </div>
</div>
@endsection