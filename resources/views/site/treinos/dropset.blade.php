@extends('layout.layout')

@section('title', 'Drop Set')

@section('conteudo')

    {{-- ÁREA DE SERVIÇO --}}
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('img/bg/fundoTreino.png') }}">
        <!-- bg animated image/ -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">@yield('title')</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="{{ url('/home') }}">HOME</a></li>
                            <li><a href="{{ url('/treino') }}">TREINOS</a></li>
                            <li class="active"><a href="{{ url('/treino/dropset') }}" style="text-transform: uppercase;">@yield('title')</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
    {{-- --------------- --}}

    {{--  --}}
    <div class="service-details-area space-top space-extra-bottom overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-lg-7">
                    <div class="service-page-single">
                        <div class="page-img mb-50">
                            <img src="{{ asset('img/normal/service-details1-1.png') }}" alt="img">
                        </div>
                        <div class="page-content">
                            <h2 class="page-title">Drop Set</h2>
                            <p class="mb-30">

                                O treinamento drop set é uma técnica de intensidade usada em musculação e treinamento de
                                resistência. Essa técnica envolve a execução de um exercício até a fadiga muscular e, em
                                seguida, a redução imediata do peso (ou resistência) para permitir que o praticante continue
                                realizando mais repetições sem descanso significativo. O processo pode ser repetido várias
                                vezes, com quedas subsequentes de peso, daí o termo "drop set" ou "série descendente".
                            </p>

                            <p class="mb-50">
                                Como em qualquer técnica de treinamento, a aplicação do treinamento drop set deve ser
                                adaptada às necessidades e metas individuais, e é recomendável buscar a orientação de um
                                profissional de fitness para garantir uma abordagem segura e eficaz.
                            </p>

                            <h3 class="page-subtitle mb-0">Por que Nos Escolher?</h3>

                            <p style="color: #DBDBDB;">Existem várias razões pelas quais você deveria nos escolher:</p>

                            <div class="row">
                                <div class="col-sm-6">

                                    <div class="service-wrap">

                                        <h6><i class="far fa-check me-2"></i> Variedade de Serviços:</h6>
                                        <p>
                                            Oferecemos uma ampla gama de serviços e programas de fitness para atender a
                                            diferentes níveis de condicionamento físico, interesses e objetivos.
                                        </p>
                                    </div>

                                </div>

                                <div class="col-sm-6">

                                    <div class="service-wrap">

                                        <h6><i class="far fa-check me-2"></i> Expertise e Experiência:</h6>
                                        <p>
                                            Contamos com uma equipe de profissionais de fitness altamente qualificados e
                                            experientes, dedicados a ajudar você.</p>
                                    </div>

                                </div>

                            </div>

                            <p class="mt-25 mb-50">
                                Nós oferecemos uma ampla variedade de serviços e programas de fitness
                                para atender a diferentes níveis de condicionamento físico, interesses e objetivos. Se você
                                procura treinamento personalizado, aulas de fitness em grupo, exercícios especializados ou
                                orientação nutricional, temos opções para atender às suas necessidades
                            </p>

                            <h3 class="page-subtitle mb-0">Nossas Características</h3>

                            <div class="service-page-list checklist mb-50"
                                data-bg-src="{{ asset('img/normal/service-details1-2.png') }}">

                                <ul>
                                    <li><i class="far fa-check-circle"></i>Elaborar programa de exercícios.</li>
                                    <li><i class="far fa-check-circle"></i>Sobrecarga progressiva.</li>
                                    <li><i class="far fa-check-circle"></i>Focar na forma adequada.</li>
                                    <li><i class="far fa-check-circle"></i>Ser consistente com o treinamento.</li>
                                    <li><i class="far fa-check-circle"></i>Ajustar a ingestão de calorias conforme
                                        necessário.</li>
                                </ul>
                            </div>
                            <div class="accordion-area mb-30 accordion" id="faqAccordion">

                                <div class="accordion-card style2 active">

                                    <div class="accordion-header" id="collapse-item-1">

                                        <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">

                                            What are your gym's operating hours?</button>
                                    </div>

                                    <div id="collapse-1" class="accordion-collapse collapse show"
                                        aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            <p class="faq-text">
                                                Progressively communicate flexible human capital with
                                                best-of-breed schemas. Completely develop 2.0 infrastructures via
                                                bleeding-edge opportunities. Completely initiate world-class leadership
                                                skills via fully tested applications.
                                            </p>
                                        </div>
                                    </div>
                                </div>


                                <div class="accordion-card style2">
                                    <div class="accordion-header" id="collapse-item-2">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                                            What amenities and facilities does your gym
                                            offer?</button>
                                    </div>
                                    <div id="collapse-2" class="accordion-collapse collapse "
                                        aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            <p class="faq-text">Progressively communicate flexible human capital with
                                                best-of-breed schemas. Completely develop 2.0 infrastructures via
                                                bleeding-edge opportunities. Completely initiate world-class leadership
                                                skills via fully tested applications. </p>
                                        </div>
                                    </div>
                                </div>


                                <div class="accordion-card style2">
                                    <div class="accordion-header" id="collapse-item-3">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                                            Do you provide personal training services?</button>
                                    </div>
                                    <div id="collapse-3" class="accordion-collapse collapse "
                                        aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            <p class="faq-text">Progressively communicate flexible human capital with
                                                best-of-breed schemas. Completely develop 2.0 infrastructures via
                                                bleeding-edge opportunities. Completely initiate world-class leadership
                                                skills via fully tested applications. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-5">
                    <aside class="sidebar-area">
                        <div class="widget widget_categories">
                            <h3 class="widget_title">Todos os treinos</h3>
                            <ul>
                                <li>
                                    <a href="/treino/hiit"><i class="fa-solid fa-arrow-right"></i>HIIT</a>
                                </li>
                                <li>
                                    <a href="/treino/emagrecimento"><i class="fa-solid fa-arrow-right"></i>Emagrecimento</a>
                                </li>
                                <li>
                                    <a href="/treino/flexibilidade"><i class="fa-solid fa-arrow-right"></i>Flexibilidade</a>
                                </li>
                                <li>
                                    <a href="/treino/reabilitacao"><i class="fa-solid fa-arrow-right"></i>Reabilitação</a>
                                </li>
                                <li>
                                    <a href="/treino/dropset"><i class="fa-solid fa-arrow-right"></i>Drop Set</a>
                                </li>
                                <li>
                                    <a href="/treino/emom"><i class="fa-solid fa-arrow-right"></i>EMOM</a>
                                </li>
                            </ul>
                        </div>
                        <div class="widget widget_schedule">
                            <h3 class="widget_title">Horário da aulas</h3>
                            <ul>
                                <li>
                                    <i class="far fa-clock"></i>
                                    Segunda – Sexta 13hr – 14hr PM
                                </li>
                                <li>
                                    <i class="far fa-clock"></i>
                                    Sábado 20hrs – 12:00 PM
                                </li>
                                <li class="unavailable">
                                    <i class="far fa-clock"></i>
                                    Domingo fechado
                                </li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>

@endsection
