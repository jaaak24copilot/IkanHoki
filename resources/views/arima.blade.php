<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARIMA Forecast</title>
</head>

<body>
    <h1>ARIMA Forecast</h1>
    <p>Prediksi untuk 30 nilai berikutnya:</p>
    <ul>
        @foreach($forecast as $value)
        <li>{{ $value }}</li>
        @endforeach
    </ul>
</body>

</html>