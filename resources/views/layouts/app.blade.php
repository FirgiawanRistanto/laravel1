<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title', 'CelestialUI Admin')</title>
    
    <!-- base:css -->
    <link rel="stylesheet" href="{{ url('assets/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/typicons.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
    
    <!-- CDN fallback for typicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/typicons/2.1.2/typicons.min.css">
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ url('assets/images/favicon.png') }}" />
    
    <!-- Additional styles -->
    @stack('styles')
    <link rel="stylesheet" href="{{ url('assets/css/custom.css') }}">
    <style>
        .popup-message {
            position: fixed;
            top: 20%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1050;
            width: auto;
            max-width: 90%;
            opacity: 1;
            transition: opacity 0.5s ease-in-out;
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        <!-- Navigation -->
        @include('layouts._partials.navbar')
        
        <div class="container-fluid page-body-wrapper">
            <!-- Settings Panel -->
            @include('layouts._partials.settings-panel')
            
            <!-- Sidebar -->
            @include('layouts._partials.sidebar')
            
            <!-- Main Content -->
            <div class="main-panel">
                <div class="content-wrapper">
                    @if ($message = Session::get('success'))
                    <div id="success-popup" class="popup-message">
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    </div>
                    @endif

                    @if ($errors->any())
                    <div id="error-popup" class="popup-message">
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    @endif

                    @yield('content')
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <!-- partial -->
            </div>
        </div>
        <!-- page-body-wrapper ends -->

    </div>

    <!-- Base Scripts -->
    <script src="{{ url('assets/js/vendor.bundle.base.js') }}"></script>
    
    <!-- Plugin scripts -->
    <script src="{{ url('assets/js/progressbar.min.js') }}"></script>
    <script src="{{ url('assets/js/Chart.min.js') }}"></script>
    
    <!-- Template scripts -->
    <script src="{{ url('assets/js/off-canvas.js') }}"></script>
    <script src="{{ url('assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ url('assets/js/template.js') }}"></script>
    <script src="{{ url('assets/js/settings.js') }}"></script>
    <script src="{{ url('assets/js/todolist.js') }}"></script>
    <script src="{{ url('assets/js/file-upload.js') }}"></script>
    
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- Page specific scripts -->
    @stack('scripts')

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const popup = document.getElementById('success-popup');
            if (popup) {
                setTimeout(() => {
                    popup.style.opacity = '0';
                    setTimeout(() => popup.style.display = 'none', 500); // Wait for fade out to complete
                }, 2000); // 2 seconds
            }

            const errorPopup = document.getElementById('error-popup');
            if (errorPopup) {
                setTimeout(() => {
                    errorPopup.style.opacity = '0';
                    setTimeout(() => errorPopup.style.display = 'none', 500); // Wait for fade out to complete
                }, 2000); // 2 seconds
            }
        });
    </script>
</body>

</html>

<style>
    .main-panel {
        display: flex !important;
        flex-direction: column !important;
        min-height: 100vh;
    }
    .content-wrapper {
        flex-grow: 1 !important;
    }
</style>