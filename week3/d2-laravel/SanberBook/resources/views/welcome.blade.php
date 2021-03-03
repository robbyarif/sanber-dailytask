<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SanberBook | Day#1 HTML Sanbercode</title>
</head>

<body>
    <h1>SELAMAT DATANG, {{$nama_depan}} {{$nama_belakang}}!</h1>
    <h2>Terima kasih telah bergabung di SanberBook. Social Media kita bersama!</h2>
    <p>
        <a href="/">Kembali ke Home</a>
    </p>

    <p>
        Gender:
        @if ($gender_male == TRUE)
        Male
        @elseif ($gender_female == TRUE)
        Female
        @else
        other
        @endif
        <br>
        <!-- {{$gender_male}}, -->
        Nationality: {{$nationality}}
        <br>
        Language:
        @if ($lang_indonesian == TRUE)
        Indonesian
        @endif
        @if ($lang_english == TRUE)
        English
        @endif
        @if ($lang_other == TRUE)
        other
        @endif
        <br>
        Bio:
        <br>
        {{$bio}}
    </p>
</body>

</html>