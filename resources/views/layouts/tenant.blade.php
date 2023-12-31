<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- CSRF Token -->
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<title>Eclipse Scheduling</title>
		<link rel="stylesheet" href="/css/all.min.css"/>
		<link rel="stylesheet" href="/css/font-awesome.min.css" type="text/css"/>
		<link rel="stylesheet" href="/css/bootstrap.min.css">
		<link rel="stylesheet" href="/css/perfect-scrollbar.css">
			<link rel="stylesheet" href="/css/colors.css">
		<link rel="stylesheet" href="/css/components.css">
		<link rel="stylesheet" href="/css/bootstrap-extended.css">
		<link rel="stylesheet" href="/css/vertical-menu.css">
		<link rel="stylesheet" href="/css/daterangepicker.css">
		<link rel="stylesheet" href="/css/select2.min.css"/>
		<link rel="stylesheet" href="/css/pikaday.css">
		<link rel="stylesheet" href="/css/dark-layout.css">
		<link rel="stylesheet" href="/css/style.css">
		<link rel="stylesheet" href='/css/bootstrap-icons.css'/>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
		<style>
		[x-cloak]
		{
		display: none !important;
		}
		</style>
		@stack('head')
		@livewireStyles
		@powerGridStyles
	</head>
	<body class="vertical-layout vertical-menu-modern navbar-floating footer-static" data-open="click" data-menu="vertical-menu-modern" data-col="" x-data="{offcanvasOpen: false}">
		
		{{-- BEGIN: Content --}}
		<div class="content-overlay"></div>
		<div class="app-content content">
			<div class="content-wrapper container-xxl p-0">
				@yield('content')
			</div>
		</div>
		{{-- End: Content --}}
		<div class="sidenav-overlay"></div>
		<div class="drag-target"></div>
		{{-- BEGIN: Footer --}}
		<footer class="footer footer-light  footer-static">
			<p class="clearfix mb-0">
				<span class="float-md-start d-block d-md-inline-block mt-25">
					Copyright &copy;
					<a class="ms-25" href="" target="_blank">Eclipse Scheduling</a>,
					<span class="d-none d-sm-inline-block">All rights Reserved</span>
				</span>
			</p>
		</footer>
		<button class="btn btn-primary btn-icon scroll-top" type="button">
			<i data-feather="arrow-up"></i>
		</button>
		{{-- END: Footer --}}
		{{-- Updated by Sohail Asghar to comment out un-useful panels and modals file --}}
		{{-- @include('partials/panels') --}}
		{{-- @include('partials/modals') --}}
		{{-- End of update by Sohail Asghar --}}


		<script src="/js/jquery-3.6.3.min.js"></script>
		<script src="/js/bootstrap.bundle.min.js"></script>
		<script src="/js/moment.min.js"></script>
		<script src="/js/daterangepicker.min.js"></script>
		<script src="/js/unison-js.min.js"></script>
		<script src="/js/perfect-scrollbar.min.js"></script>
		<script src="/js/feather-icons.min.js"></script>
		<script src="/js/app.js"></script>
		<script src="/js/app-menu.js"></script>
		<script src="/js/app-new.js"></script>
		<script src="/js/select2.min.js"></script>
		<script src="/js/sweetalert.min.js"></script>
		<script src="/js/common.js"></script>

		@auth
		@if(!request()->cookie('savedBrowser'))

			<script>
			//openSaveBrowserPopup();
			</script>
		@endif
		@endauth
		@livewireScripts
		@powerGridScripts
		<script src="/js/alpinejs-3.11.1.js" defer></script>
		@stack('scripts')
		<script>
    window.addEventListener('update-url', function(event) {
      pushStateToUrl(event.detail.url);
    });
	document.addEventListener('refreshSelects', function(event) {
		
		let el = $('.select2')
		initSelect()
		
		Livewire.hook('message.processed', (message, component) => {
			initSelect()
		})


		function initSelect () {
			
			
			el.select2({
				placeholder: '{{__('Select your option')}}',
				allowClear: !el.attr('required'),
			});
			el.on('change', function (e) {
                let attrName = $(this).attr('id');
				
				updateVal(attrName,  $(this).select2("val"));
            });
		}
		$('.js-single-date').daterangepicker({
			singleDatePicker: true,
			showDropdowns: true,
			autoApply: true
		});
		$('.js-single-date').val('');
		$('.js-single-date').attr("placeholder","MM/DD/YYYY");
		$('.js-single-date').on('apply.daterangepicker', function(ev, picker) {
        console.log($(this).val());
        updateVal($(this).attr('id'),  $(this).val());

    });
		$('.js-select-day').daterangepicker({
			singleDatePicker: true,
			showDropdowns: true,
			autoApply: true
		});
		$('.js-select-day').val('');
		$('.js-select-day').attr("placeholder","Select Day");

			
	});
	function pushStateToUrl(url) {
  history.pushState(null, null, url);
}
       

        
window.addEventListener("livewire:load", () => {
	
		let el = $('.select2')
		initSelect()

		Livewire.hook('message.processed', (message, component) => {
			initSelect()
		})


		function initSelect () {
			
			el.select2({
				placeholder: '{{__('Select your options')}}',
				allowClear: !el.attr('required'),
			})
			el.on('change', function (e) {
				
                let attrName = $(this).attr('id');
				
				updateVal(attrName,  $(this).select2("val"));
            });
		}
		
	})
	$('.js-select-date').on('apply.daterangepicker', function(ev, picker) {
    alert ('hello');
});
</script>
<script>

	$(document).on("keypress", "input.js-search-by-keyword", function(e){
        if(e.which == 13){
            $('#searchByKeywordModal').modal('show');
        }
      });
      $(document).on("keypress", "input.js-search-by-no", function(e){
        if(e.which == 13){
            $('#searchByNoModal').modal('show');
        }
      });
</script>
	</body>
</html>
