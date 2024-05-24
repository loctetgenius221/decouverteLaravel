<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            padding-top: 20px;
        }
        .article-card {
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            overflow: hidden;
            margin-bottom: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .article-card img {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }
        .article-card .card-body {
            padding: 15px;
        }
        .article-card .card-title {
            font-size: 1.25rem;
            font-weight: bold;
        }
        .article-card .card-text {
            font-size: 1rem;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1 class="text-center mb-4">Liste des articles</h1>
        <div class="row">
            @foreach ($mes_donnees_a_afficher as $item)
                <div class="col-md-4">
                    <div class="card article-card">
                        <img src="{{ $item->image_url }}" class="card-img-top" alt="{{ $item->nom }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->nom }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $item->categorie }}</h6>
                            <p class="card-text">{{ $item->description }}</p>
                            <a href="/article/{{ $item->id }}" class="btn btn-primary">Lire plus..</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
