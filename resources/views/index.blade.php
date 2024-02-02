@extends('home')

@section('content')
    <h1 class="mb-3 fw-bold">{{ __('messages.welcome') }}</h1>

    <form class="mb-3 col-6" action="{{ route('link.store') }}" method="post">
        @csrf
        <div class="input-group">
            <input class="form-control" type="text" name="url" placeholder="URL" required>
            <button class="btn btn-primary" type="submit">Encurtar</button>
        </div>
    </form>

    {{-- FEATURES --}}
    <div class="container px-4 py-5" id="features">
        <h2 class="pb-2 border-bottom fw-bold">Features</h2>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-2 g-4 py-5">
            <div class="col d-flex align-items-start">
                <div class="text-bg-primary p-2 me-3 rounded  h-100">
                    <i class="fa-solid fa-check"></i>
                </div>
                <div>
                    <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Gratuito</h3>
                    <p>Nossa plataforma oferece um plano de encurtamento de links gratuito. Crie quantos
                        links desejar e aproveite o acesso às estatísticas de cada link, sem nenhum compromisso
                        financeiro.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div class="text-bg-primary p-2 me-3 rounded  h-100">
                    <i class="fa-solid fa-shield-halved"></i>
                </div>
                <div>
                    <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Segurança</h3>
                    <p>A segurança dos seus links é nossa prioridade máxima. Utilizamos protocolos HTTPS e um robusto
                        firewall para garantir a proteção dos seus dados e a segurança das suas informações online.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div class="text-bg-primary p-2 me-3 rounded  h-100">
                    <i class="fa-solid fa-minimize"></i>
                </div>
                <div>
                    <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Curtas</h3>
                    <p>Desfrute de URLs encurtadas de forma excepcionalmente compacta e concisa. Nossa plataforma
                        oferece links simplificados, ocupando um espaço mínimo e fornecendo uma experiência de
                        compartilhamento eficiente e elegante para os seus usuários.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div class="text-bg-primary p-2 me-3 rounded  h-100">
                    <i class="fa-regular fa-handshake"></i>
                </div>
                <div>
                    <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Facilitador</h3>
                    <p>Com o propósito principal de encurtar URLs, nosso serviço prioriza uma experiência de usuário
                        otimizada, garantindo que você possa realizar essa tarefa de forma simples e rápida.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div class="text-bg-primary p-2 me-3 rounded  h-100">
                    <i class="fa-solid fa-code"></i>
                </div>
                <div>
                    <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">API</h3>
                    <p>Facilitamos a integração com nossos serviços através de uma API REST extremamente descomplicada.
                        Integre suas aplicações e sistemas em poucos minutos, sem custo adicional e com total suporte
                        técnico.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start border-primary">
                <div class="text-bg-primary p-2 me-3 rounded  h-100">
                    <i class="fa-solid fa-square-poll-vertical"></i>
                </div>
                <div>
                    <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Estatísticas</h3>
                    <p>Fornecemos também acesso completo às estatísticas detalhadas de seus links. Monitorize com
                        precisão o número de cliques, origens geográficas, tempo médio de visualização e até mesmo a
                        referência do site de onde os cliques originaram-se, tudo isso sem nenhum custo adicional
                        e com total suporte técnico.
                    </p>
                </div>
            </div>
        </div>
    </div>

    {{-- PRICING --}}
    <div class="pricing-header p-3 pb-md-4 mx-auto text-center" id="pricing">
        <h1 class="display-4 fw-normal text-body-emphasis fw-bold">Pricing</h1>
        <p class="fs-5 text-body-secondary">Quickly build an effective pricing table for your potential customers with this
            Bootstrap example. It’s built with default Bootstrap components and utilities with little customization.</p>
    </div>

    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">Free</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">$0<small class="text-body-secondary fw-light">/mo</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>10 users included</li>
                        <li>2 GB of storage</li>
                        <li>Email support</li>
                        <li>Help center access</li>
                    </ul>
                    <a href="{{ route('view.auth.register') }}" type="button"
                        class="w-100 btn btn-lg btn-outline-primary">Sign up for free</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">Pro</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">$15<small class="text-body-secondary fw-light">/mo</small>
                    </h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>20 users included</li>
                        <li>10 GB of storage</li>
                        <li>Priority email support</li>
                        <li>Help center access</li>
                    </ul>
                    <a href="{{ route('view.auth.register') }}" type="button" class="w-100 btn btn-lg btn-primary">Get
                        started</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm border-primary">
                <div class="card-header py-3 text-bg-primary border-primary">
                    <h4 class="my-0 fw-normal">Enterprise</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">$29<small class="text-body-secondary fw-light">/mo</small>
                    </h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>30 users included</li>
                        <li>15 GB of storage</li>
                        <li>Phone and email support</li>
                        <li>Help center access</li>
                    </ul>
                    <a href="#contact" type="button" class="w-100 btn btn-lg btn-primary">Contact us</a>
                </div>
            </div>
        </div>
    </div>
@endsection
