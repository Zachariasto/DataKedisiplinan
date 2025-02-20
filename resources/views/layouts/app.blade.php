<!doctype html>
<html lang="en">
 <head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Aplikasi kedisiplinan siswa</title>
 <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
 <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
 <script src="{{ asset('js/bootstrap.min.js') }}"></script>
 <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" ></script>
 </head>
 <body style="background-color: hsl(192, 84.30%, 70.00%)">
 <div id ="app">
 <div class="main-wrapper">
 <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
 <a class="navbar-brand ps-3" href="/">Aplikasi Kedisiplinan Siswa</a>
 </nav>
 <div class="main-content"> @yield('content') </div>
 <div class="container-fluid px-4" >
 <footer class="d-flex flex-wrap justify-content-between
 align-items-center py-3 my-4 border-top" >
 <p class="col-md-4 mb-0 text-muted">Copyright &copy; RPL 2025</p>
 </footer>
 </div>
 </div>
 </div>
 </body>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js">
 </script>
 <script src="{{ asset('js/scripts.js') }}"></script>
</html>
