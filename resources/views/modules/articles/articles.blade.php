@extends('layouts/main')

@section('links')
<style>
    .container {
        max-width: 1200px;
    }
    .filter-buttons button {
        margin: 5px;
    }
    .article-card {
        background: rgba(255, 255, 255, 0.1);
        border: 2px solid white;
        border-radius: 10px;
        padding: 15px;
        text-align: center;
        color: white;
        transition: transform 0.3s, box-shadow 0.3s;
        box-shadow: 0 4px 8px rgba(255, 255, 255, 0.2);
    }
    .article-card:hover {
        transform: scale(1.1);
        box-shadow: 0 6px 12px rgba(255, 255, 255, 0.3);
    }
    .article-card img {
        width: 100%;
        border-radius: 10px;
    }
    hr {
        height: 4px;
        border: none;
        background: linear-gradient(to right, transparent, white, transparent);
        margin: 30px 0;
    }
    .btn-custom {
        background-color: #004e92;
        color: white;
        border: 2px solid white;
        transition: background 0.3s, transform 0.3s;
    }
    .btn-custom:hover {
        background-color: white;
        color: #004e92;
        transform: scale(1.1);
    }
</style>
@endsection
@section('contenido')
<header class="text-center py-5">
    <h1><i class="fa-solid fa-newspaper"></i> Artículos</h1>
    <p class="mt-3">Explora nuestras publicaciones más recientes</p>
</header>

<hr class="hr-gradient">

<section class="container py-4 mb-5">
    <div class="text-center filter-buttons mb-5">
        <button class="btn btn-custom" onclick="filterArticles('all')">Todos</button>
        <button class="btn btn-custom" onclick="filterArticles('sap')">SAP</button>
        <button class="btn btn-custom" onclick="filterArticles('tech')">Tecnología</button>
        <button class="btn btn-custom" onclick="filterArticles('business')">Negocios</button>
    </div>
    <div class="row mt-4" id="articles-container">
        <div class="col-md-4">
            <div class="card">
                <a href="" class="text-decoration-none text-white">
                    <div class="card-header text-center">
                        <img src="https://images.unsplash.com/photo-1561154464-82e9adf32764?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60" class="card-img-top img-thumbnail img-fluid" style="height: 200px; width: 300px" alt="...">
                    </div>
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-center"><i class="fa-solid fa-user-tag"></i> Optimización en Sap</h6>
                        <p class="card-text">Mejora el rendimiento de tu sistema SAP Business One.</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
@section('js')
<script>
    function filterArticles(category) {
        let articles = document.querySelectorAll('.article-card');
        articles.forEach(article => {
            if (category === 'all' || article.getAttribute('data-category') === category) {
                article.style.display = 'block';
            } else {
                article.style.display = 'none';
            }
        });
    }
</script>
@endsection
