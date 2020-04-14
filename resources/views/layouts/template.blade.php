<!DOCTYPE html>
<html>
<head>
	<title>@yield('titulo','Mi Tienda')</title>

	    <!-- Bootstrap Core CSS -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet"  type="text/css">

    <!-- Custom CSS -->
 
    <link href="{{asset('css/sb-admin-2.css')}}" rel="stylesheet" type="text/css">

       <!-- Custom Fonts -->
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/babylongrid-default.css')}}">



 
</head>
<body>
	@include('partials.nav')
    
	@yield('contenido')

	@include('partials.footer')




<!-- jQuery -->
    <script src="{{asset('js/jquery.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('js/holder.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/jquery-slim.min.js')}}"></script>
    <script src="{{asset('js/sb-admin-2.js')}}"></script>
    
    <script src="{{asset('js/jquery.babylongrid.js')}}"></script>


<script type="text/javascript">
        <script>
            (function($){

                $('#babylongrid').babylongrid({
                    firstToRight: true
                });

                $('#babylongrid2').babylongrid({
                    scheme: [
                        {
                            minWidth: 960,
                            columns: 3
                        },
                        {
                            minWidth: 500,
                            columns: 2
                        },
                        {
                            minWidth: 0,
                            columns: 1
                        }
                    ],
                    afterRender: function() {
                        console.log('rendered');
                    }
                });

                $('#babylongrid3').babylongrid({
                    display: 'tower'
                });

                $('#babylongrid4').babylongrid({
                    display: 'city'
                });

            }(jQuery));


</script>

</body>
</html>