<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>

    <h3>
        Hi, have a good car!
    </h3>

    <div class="container mt-3">
        <div class="row mt5">
            <div class="col"><a href="{{route('cars.f1')}}" class="btn btn-primary">F1</a></div>
        </div>
        <div class="row mt5">
            <div class="col"><a href="{{route('cars.f2')}}" class="btn btn-secondary">F2</a></div>
        </div>
        <div class="row mt5">
            <div class="col"><a href="{{route('cars.f3')}}" class="btn btn-success">F3</a></div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <img width="101vw" src="./image/fiat-500-4322521_1920.jpg" alt="">
            </div>
        </div>
    </div>


</body>

</html>
