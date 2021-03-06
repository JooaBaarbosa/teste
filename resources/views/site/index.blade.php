<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="background-color: red;">
        <ol class="carousel-indicators">
		<?php foreach ( $slides as $k => $slide ) : ?>
        	<li data-target="#carouselExampleIndicators" data-slide-to="{{ $k }}" class="{{ $k == 0 ?  'active' : '' }}"></li>
        <?php endforeach ?>
        </ol>
        <div class="carousel-inner">
            <?php foreach ( $slides as $k => $slide ) : ?>
            <div class="carousel-item {{ $k == 0 ?  'active' : '' }}">
                <div class="row">
                    <div class="col col-6 d-flex align-items-center flex-column">
                        <h1>{{ $slide->titulo }}</h1>
                        <h3>{{ $slide->categoria}}</h3>
                        <a href="{{ $slide->link }}" target="_blank">Clique aqui</a>
                    </div>
                    <div class="col col-6">
                        <img src="{{ asset('/uploads/slide/' . $slide->imagem) }}" class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" > </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"> </script>
</body>

</html>
