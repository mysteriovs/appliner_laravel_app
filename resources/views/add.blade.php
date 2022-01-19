<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <title>Document</title>
</head>


<body style="background-color:#393939">
<x-nav logo="false"/>
<div class="float-left w-4/5">
  <section class="bg-white relative" style="height:1124px;font-family: 'Ubuntu', sans-serif;">
    <div class="w-full h-52 text-center">
    <div class="float-right">
      <form method="POST" action="{{ route('logout') }}">
        @csrf

        <x-dropdown-link :href="route('logout')"
                onclick="event.preventDefault();
                            this.closest('form').submit();">
            {{ __('Log Out') }}
        </x-dropdown-link>
    </form>
  </div>
  <div style="clear:both"></div>
  </div>
    <div class="ml-auto mr-auto" style="width:592px;padding-top:80px;">
      <form class="" action="{{ route('add') }}" method="POST">
        @csrf
        <h2 style="font-size:30px;">Opisz zgłoszenie</h2>
        <textarea name="description" rows="8" cols="50"></textarea>
        <x-button class="mt-4 bg-gradient-to-r from-mylogo to-mylogo">
            {{ __('Dodaj zgłoszenie') }}
        </x-button>
      </form>
    </div>


  </section>
  <x-footer />
</div>

</body>
</html>
