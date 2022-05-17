<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            input {
                width: 100%;
                padding: 8px 20px;
                margin: 8px 0;
                box-sizing: border-box;
            }
        </style>
    </head>
    <body class="antialiased">
        {{-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0"> --}}
            <h1>Send notifications</h1>
        {{-- </div> --}}
    </body>
</html>
