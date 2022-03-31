
<div class="card-body">
    <!--begin: Datatable-->
    <div id="kt_datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12"><table class="table table-bordered table-checkable dataTable no-footer dtr-inline collapsed" id="kt_datatable" role="grid" aria-describedby="kt_datatable_info" style="width: 1234px;">
        <thead>
            <tr role="row">
<th class="sorting sorting_desc" tabindex="0" aria-controls="kt_datatable" rowspan="1" colspan="" style="width: 43px;" aria-sort="descending" aria-label="Order ID: activate to sort column ascending">Id Usuario</th>
<th class="sorting" tabindex="0" aria-controls="kt_datatable" rowspan="1" colspan="1" style="width: 68px;" aria-label="Country: activate to sort column ascending">Nombre</th>
<th class="sorting" tabindex="0" aria-controls="kt_datatable" rowspan="1" colspan="1" style="width: 65px;" aria-label="Ship City: activate to sort column ascending">Email</th>
            </tr>
        </thead>
        <tbody>
        <tr class="odd">
              
            @foreach($users as $user)
                <tr>
                    <td ><a href="">{{$user->id}}</a></td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                </tr>
            @endforeach
            </tr>
        </tbody>
    </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="kt_datatable_info" role="status" aria-live="polite">Showing 1 to 50 of 50 entries</div></div><div class="col-sm-12 col-md-7 dataTables_pager"><div class="dataTables_length" id="kt_datatable_length"><label>Display <select name="kt_datatable_length" aria-controls="kt_datatable" class="custom-select custom-select-sm form-control form-control-sm"><option value="5">5</option><option value="10">10</option><option value="25">25</option><option value="50">50</option></select></label></div><div class="dataTables_paginate paging_simple_numbers" id="kt_datatable_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="kt_datatable_previous"><a href="#" aria-controls="kt_datatable" data-dt-idx="0" tabindex="0" class="page-link"><i class="ki ki-arrow-back"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="kt_datatable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="kt_datatable_next"><a href="#" aria-controls="kt_datatable" data-dt-idx="2" tabindex="0" class="page-link"><i class="ki ki-arrow-next"></i></a></li></ul></div></div></div></div>
    <!--end: Datatable-->
</div>
