
<div class="card-body">
    <!--begin: Datatable-->
    <div id="kt_datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
        <div class="row">
            <div class="col-sm-12">
                <table class="table table-bordered table-checkable dataTable no-footer dtr-inline collapsed" id="kt_datatable" role="grid" aria-describedby="kt_datatable_info" style="width: 1234px;">
                    <thead>
                        <tr role="row">
                            <th class="sorting sorting_desc" tabindex="0" aria-controls="kt_datatable" rowspan="1" colspan="" style="width: 43px;" aria-sort="descending" aria-label="Order ID: activate to sort column ascending">Id Usuario</th>
                            <th class="sorting" tabindex="0" aria-controls="kt_datatable" rowspan="1" colspan="1" style="width: 68px;">Nombre</th>
                            <th class="sorting" tabindex="0" aria-controls="kt_datatable" rowspan="1" colspan="1" style="width: 65px;">Email</th>
                            <th class="sorting" tabindex="0" aria-controls="kt_datatable" rowspan="1" colspan="1" style="width: 65px;">Imagen</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="odd">
                        @foreach($users as $user)
                            <tr>
                                <td ><a href="">{{$user->id}}</a></td>
                                <td><a href="{{route('usuario.edit', $user->id)}}">{{$user->name}}</a></td>
                                <td>{{$user->email}}</td>
                                @if($user->foto)
                                <td><img src="/images/{{$user->foto->ruta_foto}}" width="150px"/></td> 
                                @else
                                <td><img src="/images/generica.jpg" width="150px"/></td> <!-- inserta una imagen generica-->
                                @endif  
                            </tr>
                        @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
