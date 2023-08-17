<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .error {
            color: red;
        }

        .custom-skeleton .skeleton-item {
            background-color: #ccc;
            border-radius: 8px;
            position: relative;
            overflow: hidden;
            height: 15px;
        }

        .custom-skeleton .skeleton-item:after {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            transform: translateX(-100%);
            background: rgb(214, 214, 214);
            background: linear-gradient(90deg, rgba(214, 214, 214, 1) 0%, rgba(255, 255, 255, 1) 35%, rgba(245, 245, 245, 1) 100%);
            animation: shadowAnm 2s infinite;
            content: "";
        }

        @keyframes shadowAnm {
            100% {
                transform: translateX(100%);
            }
        }

    </style>
</head>
<body>

    @livewire('navbar')

    <div class="container-fluid">
        {{ $slot }}
    </div>

    {{-- @persist('player')
        <audio src="{{ asset('uploads/sample.mp3') }}" controls></audio>
    @endpersist --}}
    
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
