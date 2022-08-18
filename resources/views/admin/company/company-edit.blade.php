@extends('admin/layouts/default')
@section('title')
<title>Company</title>
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
    <li class="breadcrumb-item"><a href="#">Company </a></li>
    <li class="breadcrumb-item active" aria-current="page">Create</li>
</ol>
@stop

@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="main-content-label mg-b-5">Edit Company</div>
                                    <form id="submitForm"  method="post" action="{{route('admin.company-update', $company->id)}}" enctype="multipart/form-data">
                                            {{csrf_field()}}
                                            <div class="row">
                                                
                                                    <div class="form-group col-sm-12">
                                                        <label class="form-label">Name *</label>
                                                        <input type="text" class="form-control" name="name" id="name" value="{{$company->name}}">
                                                     </div>

                                                    <div class="form-group col-sm-12">
                                                        <label class="form-label">Email *</label>
                                                        <input type="email" class="form-control" name="email" id="email" value="{{ $company->email }}">
                            
                                                    </div>
                                                    <div class="form-group col-sm-12">
                                                        <label class="form-label">Logo *</label>
                                                        <input type="file" class="form-control" name="logo" id="fileUpload" onchange="Upload()">
                                                        <?php //echo "<pre>";print_r($company);die; ?>
                                                        @if($company->logo)
                                                        <img src="{{URL::to('/'.$company->logo)}}" style="width:200px">												
                                                        @endif
                                                    </div>
                                                    <div class="form-group col-sm-12">
                                                        <label class="form-label">Website Url *</label>
                                                        <input type="text" class="form-control" name="website_url" id="website_url" value="{{$company->website_url}}">                                            
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
                     var btn = '<a href="{{route('admin.company-list')}}" class="btn btn-info btn-sm">GoTo List</a>';
                     successMsg('Update Company', data.msg, btn);
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
                     errorMsg('Edit Company', 'Input Error');
                 }
                 buttonLoading('reset', $this);
                 
             },
             error: function() {
                 errorMsg('Update Company', 'There has been an error, please alert us immediately');
                 buttonLoading('reset', $this);
             }

         });

         return false;
        });

        });
      
  function Upload() {
    //Get reference of FileUpload.
    var fileUpload = document.getElementById("fileUpload");
 
    //Check whether the file is valid Image.
    var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(.jpg|.png|.gif)$");
    if (regex.test(fileUpload.value.toLowerCase())) {
 
        //Check whether HTML5 is supported.
        if (typeof (fileUpload.files) != "undefined") {
            //Initiate the FileReader object.
            var reader = new FileReader();
            //Read the contents of Image File.
            reader.readAsDataURL(fileUpload.files[0]);
            reader.onload = function (e) {
                //Initiate the JavaScript Image object.
                var image = new Image();
 
                //Set the Base64 string return from FileReader as source.
                image.src = e.target.result;
                       
                //Validate the File Height and Width.
                image.onload = function () {
                    var height = this.height;
                    var width = this.width;
                    if (height > 100 || width > 100) {
                        alert("Height and Width must not exceed 100px.");
                        return false;
                    }
                    alert("Uploaded image has valid Height and Width.");
                    return true;
                };
 
            }
        } else {
            alert("This browser does not support HTML5.");
            return false;
        }
    } else {
        alert("Please select a valid Image file.");
        return false;
    }
}
</script>   
        
      
    </script>

@stop