<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link rel="preload" as="image" href="/storage/images/background/trees-min.jpg">
    <link href="{{ asset('/css/all.css') }}" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@6.x/css/materialdesignicons.min.css" rel="stylesheet"> 
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
    {{-- <script src="{{'/js/all.js'}}"></script> <!--load all styles --> --}}
    <script src="{{ mix('/js/app.js') }}" defer></script>
    <link href="{{ mix('/css/custom.css') }}" rel="stylesheet" />
  </head>
  <body>
    @inertia
  </body>
</html>