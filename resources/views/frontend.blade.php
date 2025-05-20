<!DOCTYPE html>
<html>
<head>
    <title>✎ᝰTugas Frontend dan ETS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 4.6 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Jost:ital,wght@0,100..900;1,100..900&family=Raleway:ital,wght@0,100..900;1,100..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <!--CSS -->
    <style>
        body {
            background: linear-gradient(to bottom right, #f8f9fa, #e0e0e0);
            font-family: "Jost", sans-serif;
            text-align: center;
            padding-top: 50px;
        }

        h1 {
            font-weight: bold;
            margin-bottom: 40px;
        }

        .linktree-btn {
            display: block;
            width: 80%;
            max-width: 400px;
            margin: 10px auto;
            padding: 15px 25px;
            border: 2px solid #6c757d;
            border-radius: 30px;
            text-decoration: none;
            color: #212529;
            font-size: 16px;
            transition: 0.3s ease;

        }

        .linktree-btn:hover {
            background-color: #343a40;
            color: white;
            text-decoration: none;
        }

        .divider {
            width: 30%;
            height: 2px;
            background: linear-gradient(to right, #6c757d, transparent);
            margin: 20px auto;
            border: none;
        }


    </style>
</head>
<body>

    <h2 >Tugas Frontend dan ETS</h2>
    <hr class="divider">

    <p class="mb-4">~shahnazariqahs 087</p>

    <a href="{{ url('pertama') }}" class="linktree-btn">Week 1 - Html Pertama</a>
    <a href="{{ url('bootsrap1') }}" class="linktree-btn">Week 2 - Bootsrap 1</a>
    <a href="{{ url('bootsrap2') }}" class="linktree-btn">Week 2 - Bootsrap 2</a>
    <a href="{{ url('latihan') }}" class="linktree-btn">Week 4 - Latihan Soal 6</a>
    <a href="{{ url('indahkus') }}" class="linktree-btn">Week 5 - Tugas Linktree : IndahKus</a>
    <a href="{{ url('js1') }}" class="linktree-btn">Week 7 - Javascript1</a>
    <a href="{{ url('js2') }}" class="linktree-btn">Week 7 - Javascript2</a>
    <a href="{{ url('index') }}" class="linktree-btn">ETS : Profile Naela Ali</a>

</body>
</html>
