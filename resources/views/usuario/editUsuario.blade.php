@extends('layouts.app')
@section('contente')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                {!! Form::open(['route' => ['usuario.update', $user], 'method' => 'PUT', 'files' => true, 'enctype' => 'multipart/form-data'])!!} <!--llama al update y le pasa el parametro para actualizar el registro-->
                    {{ csrf_field()}}
                    <div class="tab-content">
                        <!--begin::Tab-->
                        <div class="tab-pane show px-7 active" id="kt_user_edit_tab_1" role="tabpanel">
                            <!--begin::Row-->
                            <div class="row">
                                <div class="col-xl-2"></div>
                                <div class="col-xl-7 my-2">
                                    <!--begin::Row-->
                                    <div class="row">
                                        <label class="col-3"></label>
                                        <div class="col-9">
                                            <h6 class="text-dark font-weight-bold mb-10">Edita la Informacion del Usuario:</h6>
                                        </div>
                                    </div>
                                    <!--end::Row-->
                                    <!--begin::Group avatar-->
                                    <div class="form-group row">
                                        <label class="col-form-label col-3 text-lg-right text-left">Avatar</label>
                                        <div class="col-9">
                                            <div class="modal-body py-0">
                                                <div class="form-group">
                                                  <label class="font-weight-bolder text-dark"><img src="/images/{{$user->foto ? $user->foto->ruta_foto : 'generica.jpg'}}" width="150"/></label>
                                                  <input type="file" name="foto_id" class="form-control form-control-lg form-control-solid" placeholder="image"/>
                                              </div>
                                        </div>
                                    </div>
                                    <!--end::Group-->
                                    <!--begin::Group-->
                                    <div class="modal-body py-0">
                                        <input type="hidden" name="id" id="ide">
                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left">Nombre del Usuario</label>
                                            <div class="col-9">
                                                <input class="form-control form-control-lg form-control-solid" type="text" name="name" id="namee" value="{{$user->name}}">
                                            </div>
                                        </div>
                                        <!--end::Group-->
                                        <!--begin::Group-->
                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left">Email Address</label>
                                            <div class="col-9">
                                                <div class="input-group input-group-lg input-group-solid">
                                                    <input type="text" class="form-control form-control-lg form-control-solid" type="email" name="email" id="emaile">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left">Asignar Rol</label>
                                            <div class="col-9">
                                                <div class="input-group input-group-lg input-group-solid">
                                                    <select name="role_id" class="form-control form-control-lg form-control-solid">
                                                        <option value="1">Administrador</option>
                                                        <option value="2">Usuario</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Group-->
                                    <div class="modal-footer d-flex justify-content-between border-0">
                                        <button type="submit" class="btn btn-secondary">Guardar cambios</button>
                                        <a href="{{route('home')}}" class="btn btn-secondary">Cancelar</a>
                                    </div>                     
                                </div>
                            </div>
                        </div>
                    </div>
                {!! Form::close() !!}

                <div class="modal-footer d-flex justify-content-between border-0"> <!-- llama al destroy para eliminar el objeto-->             
                    {!! Form::open(['method' => 'DELETE', 'action'=> [[App\Http\Controllers\webController::class, 'destroy'], $user->id]]) !!}
                    {{ csrf_field() }}
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="submit" class="btn btn-secondary" value="Eliminar Registro">
                    <!--</form>-->
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

