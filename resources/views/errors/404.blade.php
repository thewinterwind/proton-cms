<!DOCTYPE html>
<html>
<head>
    <title>Page Not Found</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {{-- Fonts --}}
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    {{-- Styles --}}
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ mix('css/global.css') }}" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <style type="text/css">
        h1 {
            font-size: 144px;
            font-weight: 500;
        }
        .btn-back {
            width: 24.3456%;
            height: 56px;
            margin-top: 30px;
            border: 1px solid rgba(0, 0, 0, 0.3);
            background-color: transparent;
            font-weight: 600;
            font-size: 16px;
            color: black;
        }
        .container-error {
            padding: 80px 23px;
            text-align: center;

        }
        .container-error p {
            font-weight: 600;
            font-size: 24px;
            padding: 0 80px;
            color: rgba(0, 0, 0, 0.3);
        }
        @media only screen
          and (min-device-width: 768px)
          and (max-device-width: 1024px)
          and (-webkit-min-device-pixel-ratio: 1) {
            .container-error {
                min-height: 631px;
            }
            .btn-back {
                width: 24.3456% !important;
            }
        }
        @media(max-width: 1023px) {
            h1 {
                font-size: 80px;
            }
            .btn-back {
                width: 100%;
            }
            .container p {
                font-size: 16px;
            }
        }
    </style>

</head>
    <body>
        @include('includes.navbar')
        <div class="container-error mb-large">
            <h1>404</h1>
            <p>Sorry, it looks like that page doesn't exist.</p>
            <button class="btn-back">Go Back</button>
        </div>
        @include('includes.footer')
    </body>
</html>