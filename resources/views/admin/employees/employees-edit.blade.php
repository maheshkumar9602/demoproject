@extends('admin/layouts/default')
@section('title')
<title>Employer</title>
@stop

@section('inlinecss')

<!-- WYSIWYG EDITOR CSS -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@stop
<style>
.feesdiv {
    padding: 0px 15px;
    width: 100%;
}
</style>
@section('breadcrum')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Employer</a></li>
    <li class="breadcrumb-item active" aria-current="page">Create</li>
</ol>
@stop

@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="main-content-label mg-b-5">Edit Employer</div>
                                    <form id="submitForm"  method="post" action="{{route('admin.employees-update', $employees->id)}}" enctype="multipart/form-data">
                                            {{csrf_field()}}
                                            <div class="row">
                                                <?php //echo "<pre>";print_r($employees);die; ?>
                                                <div class="form-group col-sm-12">
                                                    <label class="form-label">First Name *</label>
                                                    <input type="text" class="form-control" name="first_name" id="first_name" value="{{ $employees->first_name }}">
                                                </div>

                                                <div class="form-group col-sm-12">
                                                    <label class="form-label">First Name *</label>
                                                    <input type="text" class="form-control" name="last_name" id="last_name" value="{{ $employees->last_name }}">
                                                </div>

                                                 <div class="form-group col-sm-12">
                                                        <label class="form-label">Company</label>
                                                        <select name="company_id" id="company_id" class="form-control custom-select">
                                                    <option>Select A Category</option>
                                                            @foreach($company as $comp)
                                                            <option value="{{ $comp->id }}" {{$comp->id==$employees->company_id ? 'selected' : '' }}>{{ $comp->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="form-group col-sm-12">
                                                        <label class="form-label">Email *</label>
                                                        <input type="email" class="form-control" name="email" id="email" value="{{ $employees->email }}">
                            
                                                    </div>

                                                <div class="form-group col-sm-12">
                                                    <label class="form-label">Phone *</label>
                                                    <input type="number" class="form-control" name="phone" id="phone" value="{{ $employees->phone }}">
                                                    
                                                </div>
                                            </div>
                                            <div class="card-footer"></div>
                                                <button type="submit" id="submitButton" class="btn btn-primary float-right"  data-loading-text="<i class='fa fa-spinner fa-spin '></i> Sending..." data-rest-text="Create">Update</button>
                                            
                                            </div>
                                    </form>
        </div>
                                    
								</div>
							</div><!-- COL END -->
        
        <!--  End Content -->

    </div>
</div>

@stop
@section('inlinejs')
           
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script type="text/javascript">
    function convertToSlug(TextObj){ $("#slug").val(TextObj.value.toLowerCase().replace(/[^\w ]+/g,'').replace(/ +/g,'-'));}
    
    
    
    $(function () { 
		
        $('#submitForm').submit(function(){
         var $this = $('#submitButton');
         buttonLoading('loading', $this);
         $('.is-invalid').removeClass('is-invalid state-invalid');
         $('.invalid-feedback').remove();
         $.ajax({
             url: $('#submitForm').attr('action'),
             type: "POST",
             processData: false,  // Important!
             contentType: false,
             cache: false,
             data: new FormData($('#submitForm')[0]),
             success: function(data) {
                 if(data.status){
                     var btn = '<a href="{{route('admin.employees-list')}}" class="btn btn-info btn-sm">GoTo List</a>';
                     successMsg('Update Employer', data.msg, btn);
                     window.location.reload();
                     //$('#submitForm')[0].reset();

                 }else{
                     $.each(data.errors, function(fieldName, field){
                         $.each(field, function(index, msg){
                             $('#'+fieldName).addClass('is-invalid state-invalid');
                            errorDiv = $('#'+fieldName).parent('div');
                            errorDiv.append('<div class="invalid-feedback">'+msg+'</div>');
                         });
                     });
                     errorMsg('Edit Employer', 'Input Error');
                 }
                 buttonLoading('reset', $this);
                 
             },
             error: function() {
                 errorMsg('Update Employer', 'There has been an error, please alert us immediately');
                 buttonLoading('reset', $this);
             }

         });

         return false;
        });

        });
      
    </script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
            $('#link').summernote();
        });
      </script>
@stop