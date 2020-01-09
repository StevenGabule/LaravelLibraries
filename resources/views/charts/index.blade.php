<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Add Coin Details</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<div class="container" id="app">
    <add-coin></add-coin>
    <chart-component></chart-component>
</div>
<script>
    window.Laravel = <?= json_encode([ 'csrfToken' => csrf_token()]); ?>
</script>
<script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
</body>
</html>
