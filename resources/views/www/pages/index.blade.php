@extends('www.layouts.layout')

@section('logo-variant')
    <img class="enowledge-logo hidden-xs" src="{{ asset('assets/www/images/logo-light.png') }}">
    <img class="enowledge-logo visible-xs-inline-block" src="{{ asset('assets/www/images/logo-dark.png') }}">
@endsection

@section('content')

    <section class="home-intro">

        <div class="home-intro__bgc"></div>

        <div class="home-intro__title">
            <div class="title-wrapper">
                <h1 class="base-title home-title title-yellow-dark">
                    <span class="xbig-title">Acercate al</span>
                    <br>
                    <span class="big-title">mundo del vino</span>
                </h1>
                <h2 class="base-text home-text text-gray-dark title-quote">
                    <span class="big-text">De manera rápida, amena y plural</span>
                </h2>
            </div>
        </div>

        <div class="home-intro__panel white-panel">
            <p class="base-text home-text text-redwine">
                Enowledge ofrece los <strong>mejores</strong>
                <br class="hidden-xs">
                <strong>cursos y experiencias enológicas,</strong>
                <br class="hidden-xs">
                tanto presenciales como en línea,
                <br class="hidden-xs">
                para acercarte al mundo del vino.
            </p>

            <div class="text-center mt20">
                <a class="btn-enowledge btn-enowledge-lg">Ver Catálogo</a>
            </div>
        </div>

    </section>

    <section class="home-post-intro">
        <div class="home-post-intro__wrapper">
            <h1 class="base-title home-title title-gray">
                <span class="big-title">
                    Hay quienes
                    <br>
                    todavía piensan
                    <br>
                    que el vino es elitista
                </span>
            </h1>
            <br>
            <p class="base-text home-text text-gray-dark">
                En Enowledge democratizamos el conocimiento
                <br class="hidden-xs">
                y lo ponemos al alcance detodas las personas, brindándoles
                <br class="hidden-xs">
                tanto un elemento de convivencia social como
                <br class="hidden-xs">
                una herramienta académica de conocimiento.
            </p>
        </div>
    </section>

    <section class="home-paulina">

        <div class="paulina__bgc"></div>

        <div class="home-paulina__content">

            <div class="home-paulina__title">
                <h1 class="base-title home-title title-red-wine">
                    <span class="big-title">Paulina</span>
                    <br class="hidden-xs">
                    <span class="big-title">Granados</span>
                </h1>
            </div>

            <br>

            <div class="home-paulina__text">
                <p class="base-text home-text text-gray-dark mb10">
                    Emprendedora que eligió seguir su pasión e interés por el mundo del vino para transmitir su conocimiento adquirido a través de la enseñanza.
                </p>
                <br>
                <p class="base-text home-text text-gray-dark">
                    Su ímpetu, preparación y conocimiento la han posicionado como una de las caras más visibles de la industria del vino. Fundadora de este fascinante proyecto enológico que busca compartir esa sabiduría con el resto del mundo.
                </p>
            </div>

            <div class="text-center mt20">
                <a href="{{ route('web.about') }}" class="btn-enowledge btn-enowledge-lg">Ver más</a>
            </div>
        </div>

    </section>

    <section class="home-learning">
        <div class="home-learning__wrapper">
            <div class="home-learning__title">
                <h1 class="base-title home-title text-gray-dark">
                    <span class="big-title">Enseñar</span>
                </h1>
                <h2 class="base-text home-text text-gray-dark title-quote">
                    <span class="big-text">empleando la tecnología</span>
                    <br>
                    <span class="big-text">como principal herramienta</span>
                </h2>
            </div>

            <div class="home-learning__options">
                <ul class="home-learning__list">
                    <li class="home-learning__item disabled">
                        <a class="home-learning__item-text base-title text-gray-dark">Cursos</a>
                    </li>
                    <li class="home-learning__item disabled">
                        <a class="home-learning__item-text base-title text-gray-dark">Cátedras</a>
                    </li>
                    <li class="home-learning__item disabled">
                        <a class="home-learning__item-text base-title text-gray-dark">Catas</a>
                    </li>
                    <li class="home-learning__item disabled">
                        <a class="home-learning__item-text base-title text-gray-dark">Zona de estudiantes</a>
                    </li>
                    <li class="home-learning__item disabled">
                        <a class="home-learning__item-text base-title text-gray-dark">Blog</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="home-blog-intro">

        <div class="home-blog__content text-center">

            <div class="home-blog__title">
                <h1 class="base-title home-title title-yellow-dark">
                    <span class="big-title">No necesitarás</span>
                    <br>
                    <span class="big-title">hablar francés</span>
                </h1>
                <h2 class="base-text home-text text-gray-dark title-quote">
                    <span class="big-text">Para ordernar una copa de Cabernet</span>
                    <br>
                    <span class="big-text">Sauvignon sin complejos</span>
                </h2>
                <br>
                <p class="base-text home-text text-gray-dark">
                    Disfruta todo el conocimiento
                    <br class="hidden-xs">
                    que compartimos en nuestro Blog
                </p>

                <div class="text-center mt20">
                    <a class="btn-enowledge btn-enowledge-lg">Ir al Blog</a>
                </div>
            </div>

        </div>

        <div class="home-blog-bgc hidden-xs"></div>

    </section>

    <section class="contact-section">
        <div class="contact-wrapper">
            <div class="contact__title">
                <h1 class="base-title home-title title-yellow-dark">
                    <span class="big-title">Suscríbete a nuestra lista</span>
                </h1>
                <h2 class="base-text home-text text-gray-dark title-quote">
                    <span class="big-text">y acércate al mundo del vino</span>
                </h2>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
                    <form id="contact-form" class="contact-form" method="POST" action="">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <div class="group">
                                    <input type="text" class="input-field input-primary" required>
                                    <span class="input-highlight"></span>
                                    <span class="input-bar"></span>
                                    <label>Nombre</label>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="group">
                                    <input type="email" class="input-field input-primary" required>
                                    <span class="input-highlight"></span>
                                    <span class="input-bar"></span>
                                    <label>Email</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="group">
                                    <textarea class="input-field input-primary" name="message" rows="3" required></textarea>
                                    <span class="input-highlight"></span>
                                    <span class="input-bar"></span>
                                    <label>Asunto</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt20">
                            <div class="col-xs-12 text-center">
                                <a class="btn-enowledge btn-enowledge-lg">Enviar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>

@endsection