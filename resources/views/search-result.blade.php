@extends('base.layout')

@section('content')

    <!-- about section -->
    <section class="w3l-aboutblock1 pt-lg-5 pt-5 my-5 pb-5" id="about">


        <div class="container py-md-5 py-4">
            <h5 class="title-small mb-1">Resultado de pesquisa</h5>
            <h3 class="title-style">{{ count($foundUsers) }} encontrados</h3>

            <div style="height: 60px"></div>

            @if(count($foundUsers) > 0)

                @foreach($foundUsers as $user)
                    <div class="row align-items-center mt-3">
                        <div class="col-lg-4">
                            <div class="position-relative">
                                <img
                                    src="{{ asset("storage/" . $user->avatar) }}"
                                    alt=""
                                    class="radius-image img-fluid"
                                    style="height: 300px;width: 300px"
                                >
                            </div>
                        </div>
                        <div class="col-lg-8 ps-lg-5 mt-lg-0 mt-5">
                            <div class="mt-5">
                                <p class="mt-3">
                                    -
                                </p>
                                <div class="my-info mt-md-5 mt-4">
                                    <ul class="single-info">
                                        <li class="name-style">Name</li>
                                        <li>:</li>
                                        <li>
                                            <p>{{ $user->name }}</p>
                                        </li>
                                    </ul>
                                    <ul class="single-info">
                                        <li class="name-style">Cadastro aos</li>
                                        <li>:</li>
                                        <li>
                                            <p>{{ $user->created_at }}</p>
                                        </li>
                                    </ul>
                                    <ul class="single-info">
                                        <li class="name-style">Nivel</li>
                                        <li>:</li>
                                        <li>
                                            <p>{{ $user->level }}</p>
                                        </li>
                                    </ul>
                                    <ul class="single-info">
                                        <li class="name-style">Email</li>
                                        <li>:</li>
                                        <li>
                                            <p><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></p>
                                        </li>
                                    </ul>
                                </div>
                                {{--                        <a href="#download" class="btn btn-style mt-5">Download CV</a>--}}
                            </div>

                        </div>
                    </div>
                @endforeach

            @elseif($sText)
                <span style="font-size: 14pt;color: red">Nenhum estudante ou utilizador foi encontrado com o nome ou email: <b>{{ $sText }}</b></span>
            @else
                <div>Insira um texto para iniciar a pesquisa</div>
            @endif
        </div>
    </section>
    <!-- //about section -->

@endsection
