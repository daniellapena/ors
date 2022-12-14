<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!--Regular Datatables CSS-->
	    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
		
		<!-- forda crud table-->
		<link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.1/dist/flowbite.min.css" />

        <!--Responsive Extension Datatables CSS-->
        <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">
		
	
		<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
        <!-- Styles -->
        @livewireStyles

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])


		<!-- jQuery -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

	<!--Datatables -->
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
	<script>
		$(document).ready(function() {

			var table = $('#example').DataTable({
					responsive: true
				})
				.columns.adjust()
				.responsive.recalc();
		});
	</script>

        
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

		<script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>

        @stack('modals')

        @livewireScripts
    </body>
</html>
