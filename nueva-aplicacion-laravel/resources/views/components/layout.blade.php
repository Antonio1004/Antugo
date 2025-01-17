<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$metaTitle ?? 'Default title'}}</title>
    include
</head>
<body>
    @include('partials.navegation')
    {{$slot}}

    @if (isset($sidebar))
    <div id="sidebar">
        <h3>Sidebar</h3>
        <div>{{$sidebar}}</div>
    </div>    
    @endif
</body>
</html>
