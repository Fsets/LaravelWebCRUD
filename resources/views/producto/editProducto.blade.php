
<div class="modal fade" id="editProducto" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="card-header"><h5 class="color-blue" id="editModalLabel">Editar Producto</h5>
          <span class="color-muted mt-3 font-weight-bold font-size-sm">Edita el producto introduciendo datos.</span></div>
                        <form method="POST" action="{{ route('edit_product') }}" enctype="multipart/form-data">
                         <!--llama al update y le pasa el parametro para actualizar el registro-->
                            {{ csrf_field()}}

                              <div class="modal-body py-0">
                                <input type="hidden" name="id" id="ide">
                                  <div class="form-group mt-5">
                                    <label class="font-weight-bolder text-dark">Marca</label>
                                    <input class="form-control h-auto py-4 px-4 bg-light-brown" type="text" name="MARCA" id="MARCA"/>
                                  </div>
                                  <div class="form-group">
                                    <label class="font-weight-bolder text-dark">Linea</label>
                                    <input type="text" class="form-control h-auto py-4 px-4 bg-light-brown" type="text" name="LINEA" id="LINEA">
                                  </div>
                                  <div class="form-group">
                                    <label class="font-weight-bolder text-dark">Modelo</label>
                                    <input class="form-control h-auto py-4 px-4 bg-light-brown" type="text" name="MODELO" id="MODELO"/>
                                  </div>
                                  <div class="form-group">
                                    <label class="font-weight-bolder text-dark">Descripcion</label>
                                    <input class="form-control h-auto py-4 px-4 bg-light-brown" type="longtext" name="DESCRIPCION" id="DESCRIPCION"/>
                                  </div>
                                  <div class="form-group">
                                    <label class="font-weight-bolder text-dark">Precio</label>
                                    <input class="form-control h-auto py-4 px-4 bg-light-brown" type="text" name="PRECIO" id="PRECIO"/>
                                  </div>
                                  <div class="form-group">
                                    <label class="font-weight-bolder text-dark">Fecha de Salida</label>
                                    <input class="form-control h-auto py-4 px-4 bg-light-brown" type="text" name="FECHA_SALIDA" id="FECHA_SALIDA"/>
                                  </div>
                                  <div class="form-group">
                                    <label class="font-weight-bolder text-dark">Imagen del Producto <span class="text-muted">(opcional)</span></label>
                                    <input class="form-control h-auto py-4 px-4" type="file" accept="image/png, image/jpg, image/jpeg" name="IMAGEN" id="IMAGEN"/>
                                  </div>
                                  <div class="form-group">
                                    <span class="text-muted">Máximo 1 fichero.</span><br>
                                    <span class="text-muted">Peso máx. 16 MB.</span><br>
                                    <span class="text-muted">Tipos permitidos: png, jpg, jpeg.</span>
                                  </div>
                                </div>
                                <div class="modal-footer d-flex justify-content-between border-0">
                                    <button type="button" class="btn btn-brown font-weight-bold" data-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-blue font-weight-bold">Guardar cambios</button>
                                </div>
                        </form>
      </div>
    </div>
</div>
