<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to the Berendina Official Website</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>
<style>
    .background {
        background-image: url("{{url('/images/background.jpg')}}");
        height:100vh;
        margin:0px;
        min-height:100%;
        max-height:100%;
        background-size:cover;
        box-shadow:inset 0 0 0 2000px rgba(255, 2550, 255, 0.3);
    }
    .overlay {
        position: absolute;
        left: 50%;
        top: 50%;

        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }
    
</style>
@livewireStyles
<body class="background">
    <div class="flex h-screen">
        <div class="m-auto">
            <div class="flex items-center justify-center mb-4">
                <h1 class="animate__animated animate__fadeInLeft text-2xl hover:text-base text-center">Welcome to Berendina Official Website </h1>
            </div>
            <div class="flex items-center justify-center">
                <img src="{{url('images/Logo-small.jpg')}}" alt="" class="img img-responsive animate__animated animate__fadeIn animate__delay-0.5s">
            </div>
            <div class="flex items-center justify-center mt-6">
                Select your language to visit out website
            </div>
            <div class="flex items-center justify-center">
                <livewire:client.home.select-language />
            </div>
        </div>
        
    </div>
    @livewireScripts
</body>
</html>