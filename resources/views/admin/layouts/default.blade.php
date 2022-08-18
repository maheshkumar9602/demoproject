
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
        @yield('title')
		<link rel="icon" href="{{ asset('/assets/img/brand/favicon.png')}}" type="image/x-icon"/>
		<link href="{{ asset('/assets/css/icons.css')}}" rel="stylesheet">
		<!--- FONT-ICONS CSS -->
		{{-- <link href="http://androidhiker.com/emitra/public/admin/assets/css/icons.css" rel="stylesheet" /> --}}
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="{{ asset('/assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet" />
		<link href="{{ asset('/assets/plugins/sidebar/sidebar.css')}}" rel="stylesheet">
		<link href="{{ asset('/assets/css/style.css')}}" rel="stylesheet">
		<link href="{{ asset('/assets/css/skin-modes.css')}}" rel="stylesheet">
		<link href="{{ asset('/assets/css/sidemenu.css')}}" rel="stylesheet">
		<link href="{{ asset('/assets/css/animate.css')}}" rel="stylesheet">
		<!--- Internal Sweet-Alert css --->
		<link href="{{ asset('/assets/plugins/sweet-alert/sweetalert.css')}}" rel="stylesheet">
		@yield('inlinecss')
	</head>

	<body class="main-body app sidebar-mini">
		<div id="global-loader">
			<img src="{{ asset('/assets/img/loaders/loader-4.svg')}}" class="loader-img" alt="Loader">
		</div>

		<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
            @include('admin.layouts.sidebar')
		<div class="main-content">

			<div class="container-fluid">
				<!-- breadcrumb -->
				<div class="breadcrumb-header ">
                    @yield('breadcrum')
				</div>
                <!-- /breadcrumb -->
                @include('admin.layouts.pagehead')
				<!-- main-content-body -->
				@yield('content')
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /main-content -->


		<!-- Footer opened -->
			{{--<div class="main-footer ht-40">
			<div class="container-fluid pd-t-0-f ht-100p">
			 <span>Copyright © 2020 <a href="#">Aamod</a>.All rights reserved.</span> 
			</div>
		</div>--}}
		<!-- Footer closed -->

		<!--- Back-to-top --->
		<a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>

		
		<!--- JQuery min js --->
		<script src="{{ asset('/assets/plugins/jquery/jquery.min.js')}}"></script>

				<!--- Perfect-scrollbar js --->
				<script src="{{ asset('/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
				<script src="{{ asset('/assets/plugins/perfect-scrollbar/p-scroll.js')}}"></script>
				
		<script src="{{ asset('/assets/plugins/sweet-alert/sweetalert.min.js')}}"></script>

		<!--- Datepicker js --->
		<script src="{{ asset('/assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>

		<!--- Bootstrap Bundle js --->
		<script src="{{ asset('/assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

		<!--- Ionicons js --->
		<script src="{{ asset('/assets/plugins/ionicons/ionicons.js')}}"></script>

		<!--- Chart bundle min js --->
		<script src="{{ asset('/assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>

		<!--- JQuery sparkline js --->
		<script src="{{ asset('/assets/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

		<!--- Internal Sampledata js --->
		<script src="{{ asset('/assets/js/chart.flot.sampledata.js')}}"></script>

		<!--- Rating js --->
		<script src="{{ asset('/assets/plugins/rating/jquery.rating-stars.js')}}"></script>
		<script src="{{ asset('/assets/plugins/rating/jquery.barrating.js')}}"></script>

		<!--- Eva-icons js --->
		<script src="{{ asset('/assets/js/eva-icons.min.js')}}"></script>

		<!--- Moment js --->
		<script src="{{ asset('/assets/plugins/moment/moment.js')}}"></script>



		<!--- Sidebar js --->
		<script src="{{ asset('/assets/plugins/side-menu/sidemenu.js')}}"></script>

		<!-- right-sidebar js -->
		<script src="{{ asset('/assets/plugins/sidebar/sidebar.js')}}"></script>
		<script src="{{ asset('/assets/plugins/sidebar/sidebar-custom.js')}}"></script>

		<!-- Morris js -->
		<script src="{{ asset('/assets/plugins/raphael/raphael.min.js')}}"></script>
		<script src="{{ asset('/assets/plugins/morris.js/morris.min.js')}}"></script>

		<!--- Scripts js --->
		<script src="{{ asset('/assets/js/script.js')}}"></script>

		<!--- Index js --->
		<script src="{{ asset('/assets/js/index.js')}}"></script>

		<!--- Custom js --->
		<script src="{{ asset('/assets/js/custom.js')}}"></script>


		@yield('inlinejs')
		
		
	</body>
</html>
<script>
	    function buttonLoading(processType, ele){
        if(processType == 'loading'){
            ele.html(ele.attr('data-loading-text'));
            ele.attr('disabled', true);
        }else{
            ele.html(ele.attr('data-rest-text'));
            ele.attr('disabled', false);
        }
    }

	function successMsg(heading,message, html = "")
	{
		swal({
				title: heading,
				text: message,
				type: 'success',
			})
    }
    function errorMsg(heading,message){
		swal(
			{
				title: heading,
				text: message,
				type: "warning",
			}
		)
        box = $('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><strong>'+heading+'</strong><hr class="message-inner-separator"><p>'+message+'</p></div>');
        $('.alert-messages-box').append(box);
    }
    


</script>