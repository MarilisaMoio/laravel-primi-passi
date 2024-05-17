<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello Laravel</title>
</head>
<body>
    <div class="container" style="margin: 0 auto; max-width: fit-content">
        <h2 style="text-align: center;">
            @foreach ($teachers as $teacher)
                Ciao {{ $teacher }},&nbsp; <!-- ...perché gli spazi finali vengono trimmati ad ogni salvataggio - e non uso Prettier!-->
            @endforeach
            funziona!
        </h2>
        <img style="height: 90vh" src="https://miro.medium.com/v2/resize:fit:998/format:webp/1*5djtVTN9PhSUwM97WT8-TA.jpeg" alt="">
    </div>
</body>
</html>
