@extends('admin/layouts/default')
@section('title')
<title>Employer</title>
@stop
@section('inlinecss')

@stop
@section('breadcrum')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Employer</a></li>
    <li class="breadcrumb-item active" aria-current="page">List</li>
</ol>
@stop
@section('content')
<!-- row opened -->
<div class="row row-sm">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header pb-0">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title mg-b-0 mt-2">Employer List</h4>
                    <i class="mdi mdi-dots-horizontal text-gray"></i>
                </div>
            <p class="tx-12 text-muted mb-2 float-right"><i class="fa fa-user"></i><a class="btn btn-success" href="{{route('admin.employees-create')}}">Add Employer</a></p>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                        
                    <table class="table table-bordered data-table">
                      <thead>
                          <tr>
                              <th>No</th>
                              <th>First Name</th>
                              <th>Last Name</th>
                              <th>Company Name</th>
                              <th>Email</th>
                              <th>Phone</th>
                              <th>Created_at</th>
                              <!-- <th>Email</th> -->
                              <th width="150px">Action</th>
                          </tr>
                      </thead>
                      <tbody>
                      </tbody>
                  </table>
 </div>
                </div><!-- bd -->
            </div><!-- bd -->
        </div>
    </div>
    <!-- /row -->
<div class="modal fade" id="viewDetail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Details</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
			
            </div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				
			</div>
		</div>
	</div>
</div>

@stop
@section('inlinejs')
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
        
    <script type="text/javascript">
      $(function () {
            
            
            var table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('admin.employees-list') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'first_name', name: 'first_name'},
                    {data: 'last_name', name: 'last_name'},
                    {data: 'company_id', name: 'company_id'},
                    {data: 'email', name: 'email'},
                    {data: 'phone', name: 'phone'},
                    {data: 'created_at', name: 'created_at'},                    
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });

           
			
			$(document).on('click','.deleteButton', function(){
				row = $(this).closest('tr');
                url = $(this).attr('data-url');
				var $this = $(this);
				buttonLoading('loading', $this);
                $.ajax({
                    url: url,
                    type: 'GET',
                    success: function(data){
						row.remove();
                    }
                });
            });
            
        });
    </script>
@stop