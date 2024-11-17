<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <ul> 
        <x-link href="/"> Home</x-link>
        <x-link href="/about"> About</x-link>
        <x-link href="/contact"> Contact us</x-link>
    </ul>
    
    {{$slot}}
</body>
</html>
