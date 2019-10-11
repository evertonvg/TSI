<html>
    <head>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>

    <body>
        

        <header>
            <nav class="container"> 
                <div class="row">

                    <div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 text-left esquerda d-flex flex-row justify-content-start align-items-center">
                        <a href="/"><img src="{{asset('assets/images/TSI-icon.png')}}" alt="icone TSI"></a>
                    </div>

                    <div class="col-sm-10 col-md-10 col-lg-10 col-xl-10 text-right direita d-flex flex-row justify-content-end align-items-center">
{{--                        <ul>--}}
{{--                            <li>home</li>--}}
{{--                            <li>pesquisa</li>--}}
{{--                            <li>outros</li>--}}
{{--                        </ul>--}}

                        <form action="">
                            <input type="search" class="form-control input-sm" placeholder="Pesquisa" aria-label="Search">
                        </form>
                        você ainda não esta logado <a href="#" class="login"> conectar </a>
                    </div>

                </div>
            </nav>
        </header>
        <section class="conteudo container"></section>

        <div class="modalll  flex-row justify-content-center align-items-center">
            <div class="modal-centerr">
                <div class="xis d-flex flex-row justify-content-center align-items-center">X</div>
            </div>
        </div>

        <script src="{{asset('js/jQuery.js')}}"></script>
        <script src="{{mix('js/app.js')}}"></script>
    </body>
</html>
