<!-- resources/views/components/layout.blade.php -->
 
<html>
    <head>
        <title>{{ $title ?? 'Todo Manager' }}</title>
    </head>

    <body>
        <h1>hello</h1>
        <hr/>
        {{ $slot }}
    </body>
</html>