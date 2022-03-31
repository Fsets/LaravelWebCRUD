@extends('layouts.app')

<form method="POST" action="{{ route('editarUsuario') }}" class="form" id="kt_form">
    {{ csrf_field() }}
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
                    <!--begin::Group-->
                    <div class="form-group row">
                        <label class="col-form-label col-3 text-lg-right text-left">Avatar</label>
                        <div class="col-9">
                            <div class="image-input image-input-empty image-input-outline" id="kt_user_edit_avatar" style="background-image: url(/metronic/theme/html/demo1/dist/assets/media/users/blank.png)">
                                <div class="image-input-wrapper"></div>
                                <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                    <i class="fa fa-pen icon-sm text-muted"></i>
                                    <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg">
                                    <input type="hidden" name="profile_avatar_remove">
                                </label>
                                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="" data-original-title="Cancel avatar">
                                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                                </span>
                                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="" data-original-title="Remove avatar">
                                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!--end::Group-->
                    <!--begin::Group-->
                    <div class="form-group row">
                        <label class="col-form-label col-3 text-lg-right text-left">Nombre del Usuario</label>
                        <div class="col-9">
                            <input class="form-control form-control-lg form-control-solid" type="text" name="name" id="namee">
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
                    <!--end::Group-->

                    <div class="modal-footer d-flex justify-content-between border-0">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-secondary">Guardar cambios</button>
                      </div>
                </div>
            </div>
        </div>
    </div>
</form>
