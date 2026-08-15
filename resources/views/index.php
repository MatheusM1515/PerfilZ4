<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Perfil Z4</title>
    <meta name="description" content="Thermo Predict monitora, em tempo real, a temperatura e a integridade de vacinas termolábeis durante o armazenamento e transporte." />
    <link rel="icon" type="image/png" href="/assets/img/logosite.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700;800&family=Open+Sans:wght@400;600&family=Poppins:wght@400;500;600&display=swap" />
    <link rel="stylesheet" href="/assets/css/style.css" />
    <script defer src="/assets/js/script.js"></script>
</head>

<body>

    <!-- LOADER -->
    <div id="loader" class="loader" aria-hidden="true">
        <svg viewBox="0 0 300 70" class="loader-logo">
            <image href="/assets/img/logosite.png" x="0" y="0" width="60" height="60" />
        </svg>
    </div>

    <!-- BARRA DE PROGRESSO DE SCROLL -->
    <div id="scroll-progress" class="scroll-progress"></div>

    <!-- HEADER -->
    <header id="header">
        <div class="header-shell">
            <div class="logo">
                <svg viewBox="0 0 300 70">
                    <image href="/assets/img/logosite.png" x="0" y="0" width="80" height="80"/>
                </svg>
            </div>

            <nav id="nav-menu">
                <a href="#inicio">Início</a>
                <a href="#produtos">Produtos</a>
                <a href="#sobre_nos">Sobre Nós</a>
                <span class="nav-divider" aria-hidden="true"></span>
                <a href="#contato" class="nav-cta">Fale Conosco</a>
            </nav>

            <button id="nav-toggle" class="nav-toggle" aria-label="Abrir menu" aria-expanded="false" aria-controls="nav-menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </header>

    <!-- HERO -->
    <section id="inicio" class="hero">

    <video autoplay muted loop playsinline class="video-banner">
        <source src="/assets/img/bannerloja.mp4" type="video/mp4">
    </video>

    <div class="hero-overlay"></div>

    <div class="hero-conteudo">

        <span class="hero-badge reveal" data-reveal="fade-up">
            <span class="pulse-dot"></span>
            ESTILO QUE VESTE VOCÊ
        </span>

        <h1 class="reveal" data-reveal="fade-up" data-delay="1">
            Seu estilo começa aqui.
            <span class="destaque">Perfil Z4</span>
        </h1>

        <p class="reveal" data-reveal="fade-up" data-delay="2">
            Moda masculina, qualidade e personalidade para quem sabe
            como quer se apresentar.
        </p>

        <div class="hero-botoes reveal" data-reveal="fade-up" data-delay="3">

            <a href="#produtos" class="hero-btn hero-btn-principal">
                Conheça nossos produtos
            </a>

            <a href="#sobre_nos" class="hero-btn hero-btn-secundario">
                Conheça a Perfil Z4
            </a>

        </div>

    </div>

</section>

    <!-- PRODUTOS -->
<section id="produtos" class="produtos-loja">
    <div class="topo-secao reveal" data-reveal="fade-up">
        <span class="eyebrow">Nossa coleção</span>
        <h2>Produtos</h2>
    </div>
    <div class="subtitulo reveal" data-reveal="fade-up">
        <p>
            Uma seleção de peças masculinas para quem valoriza estilo, qualidade e personalidade.
        </p>
    </div>

    <div class="busca-produtos reveal" data-reveal="fade-up">
        <input type="text" id="buscaProduto" placeholder="Buscar produto... (ex: camisa social)" onkeyup="filtrarProdutos()">
        <svg class="icon-busca" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24" width="20" height="20">
            <circle cx="11" cy="11" r="7" />
            <path d="M21 21l-4.35-4.35" />
        </svg>
    </div>

    <div class="filtros-categoria reveal" data-reveal="fade-up">
        <button class="filtro-btn ativo" data-categoria="todos" onclick="filtrarCategoria('todos', this)">Todos</button>
        <button class="filtro-btn" data-categoria="camisas" onclick="filtrarCategoria('camisas', this)">Camisas</button>
        <button class="filtro-btn" data-categoria="calcas" onclick="filtrarCategoria('calcas', this)">Calças</button>
        <button class="filtro-btn" data-categoria="bermudas" onclick="filtrarCategoria('bermudas', this)">Bermudas</button>
    </div>

    <!-- CAMISAS -->
    <div class="cards cards-produtos" id="gridProdutos">

        <div class="card produto-card reveal" data-reveal="fade-up" data-delay="0" data-categoria="camisas" data-nome="camisa social">
            <div class="produto-img">
                <img src="assets/img/camisas/camisa1.png" alt="Camisa Social">
                <div class="produto-overlay">
                    <span class="produto-categoria-label">Camisas</span>
                    <h4>Camisa Social</h4>
                </div>
            </div>
        </div>

        <div class="card produto-card reveal" data-reveal="fade-up" data-delay="1" data-categoria="camisas" data-nome="camisa gola padre canelada">
            <div class="produto-img">
                <img src="assets/img/camisas/camisa2.png" alt="Camisa Gola Padre Canelada">
                <div class="produto-overlay">
                    <span class="produto-categoria-label">Camisas</span>
                    <h4>Camisa Gola Padre Canelada</h4>
                </div>
            </div>
        </div>

        <div class="card produto-card reveal" data-reveal="fade-up" data-delay="1" data-categoria="camisas" data-nome="camisa social manga curta">
            <div class="produto-img">
                <img src="assets/img/camisas/camisa5.png" alt="Camisa Social Manga Curta">
                <div class="produto-overlay">
                    <span class="produto-categoria-label">Camisas</span>
                    <h4>Camisa Social Manga Curta</h4>
                </div>
            </div>
        </div>

        <div class="card produto-card reveal" data-reveal="fade-up" data-delay="1" data-categoria="camisas" data-nome="camisa slim">
            <div class="produto-img">
                <img src="assets/img/camisas/camisa4.png" alt="Camisa Slim">
                <div class="produto-overlay">
                    <span class="produto-categoria-label">Camisas</span>
                    <h4>Camisa Slim</h4>
                </div>
            </div>
        </div>

        <div class="card produto-card reveal" data-reveal="fade-up" data-delay="1" data-categoria="camisas" data-nome="camisa oversized">
            <div class="produto-img">
                <img src="assets/img/camisas/camisa3.png" alt="Camisa Oversized">
                <div class="produto-overlay">
                    <span class="produto-categoria-label">Camisas</span>
                    <h4>Camisa Oversized</h4>
                </div>
            </div>
        </div>

        <div class="card produto-card reveal" data-reveal="fade-up" data-delay="1" data-categoria="camisas" data-nome="camisa social">
            <div class="produto-img">
                <img src="assets/img/camisas/camisa6.png" alt="Camisa Social">
                <div class="produto-overlay">
                    <span class="produto-categoria-label">Camisas</span>
                    <h4>Camisa Social</h4>
                </div>
            </div>
        </div>

        <div class="card produto-card reveal" data-reveal="fade-up" data-delay="1" data-categoria="camisas" data-nome="camisa polo">
            <div class="produto-img">
                <img src="assets/img/camisas/camisa7.png" alt="Camisa Polo">
                <div class="produto-overlay">
                    <span class="produto-categoria-label">Camisas</span>
                    <h4>Camisa Polo</h4>
                </div>
            </div>
        </div>

        <div class="card produto-card reveal" data-reveal="fade-up" data-delay="1" data-categoria="camisas" data-nome="camisa polo">
            <div class="produto-img">
                <img src="assets/img/camisas/camisa8.png" alt="Camisa Polo">
                <div class="produto-overlay">
                    <span class="produto-categoria-label">Camisas</span>
                    <h4>Camisa Polo</h4>
                </div>
            </div>
        </div>

        <div class="card produto-card reveal" data-reveal="fade-up" data-delay="1" data-categoria="camisas" data-nome="suéter manga longa">
            <div class="produto-img">
                <img src="assets/img/camisas/camisa9.png" alt="Suéter Manga Longa">
                <div class="produto-overlay">
                    <span class="produto-categoria-label">Camisas</span>
                    <h4>Suéter Manga Longa</h4>
                </div>
            </div>
        </div>

        <div class="card produto-card reveal" data-reveal="fade-up" data-delay="1" data-categoria="camisas" data-nome="jaqueta de couro">
            <div class="produto-img">
                <img src="assets/img/camisas/camisa10.png" alt="Jaqueta De Couro">
                <div class="produto-overlay">
                    <span class="produto-categoria-label">Camisas</span>
                    <h4>Jaqueta De Couro</h4>
                </div>
            </div>
        </div>

        <div class="card produto-card reveal" data-reveal="fade-up" data-delay="1" data-categoria="camisas" data-nome="camisa polo slim">
            <div class="produto-img">
                <img src="assets/img/camisas/camisa11.png" alt="Camisa Polo Slim">
                <div class="produto-overlay">
                    <span class="produto-categoria-label">Camisas</span>
                    <h4>Camisa Polo Slim</h4>
                </div>
            </div>
        </div>

        <div class="card produto-card reveal" data-reveal="fade-up" data-delay="1" data-categoria="camisas" data-nome="jaqueta varsity">
            <div class="produto-img">
                <img src="assets/img/camisas/camisa12.png" alt="Jaqueta Varsity">
                <div class="produto-overlay">
                    <span class="produto-categoria-label">Camisas</span>
                    <h4>Jaqueta Varsity</h4>
                </div>
            </div>
        </div>

        <!-- CALÇAS -->
        <div class="card produto-card reveal" data-reveal="fade-up" data-delay="2" data-categoria="calcas" data-nome="calça slim">
            <div class="produto-img">
                <img src="assets/img/calcas/calca1.png" alt="Calça Slim">
                <div class="produto-overlay">
                    <span class="produto-categoria-label">Calças</span>
                    <h4>Calça Slim</h4>
                </div>
            </div>
        </div>

        <div class="card produto-card reveal" data-reveal="fade-up" data-delay="0" data-categoria="calcas" data-nome="calça jeans">
            <div class="produto-img">
                <img src="assets/img/calcas/calca2.png" alt="Calça Jeans">
                <div class="produto-overlay">
                    <span class="produto-categoria-label">Calças</span>
                    <h4>Calça Jeans</h4>
                </div>
            </div>
        </div>

        <div class="card produto-card reveal" data-reveal="fade-up" data-delay="0" data-categoria="calcas" data-nome="calça jeans">
            <div class="produto-img">
                <img src="assets/img/calcas/calca3.png" alt="Calça Jeans">
                <div class="produto-overlay">
                    <span class="produto-categoria-label">Calças</span>
                    <h4>Calça Jeans</h4>
                </div>
            </div>
        </div>

        <div class="card produto-card reveal" data-reveal="fade-up" data-delay="0" data-categoria="calcas" data-nome="calça slim">
            <div class="produto-img">
                <img src="assets/img/calcas/calca4.png" alt="Calça Slim">
                <div class="produto-overlay">
                    <span class="produto-categoria-label">Calças</span>
                    <h4>Calça Slim</h4>
                </div>
            </div>
        </div>

        <div class="card produto-card reveal" data-reveal="fade-up" data-delay="0" data-categoria="calcas" data-nome="calça jeans">
            <div class="produto-img">
                <img src="assets/img/calcas/calca5.png" alt="Calça Jeans">
                <div class="produto-overlay">
                    <span class="produto-categoria-label">Calças</span>
                    <h4>Calça Jeans</h4>
                </div>
            </div>
        </div>

        <div class="card produto-card reveal" data-reveal="fade-up" data-delay="0" data-categoria="calcas" data-nome="calça jeans">
            <div class="produto-img">
                <img src="assets/img/calcas/calca8.png" alt="Calça Jeans">
                <div class="produto-overlay">
                    <span class="produto-categoria-label">Calças</span>
                    <h4>Calça Jeans</h4>
                </div>
            </div>
        </div>

        <div class="card produto-card reveal" data-reveal="fade-up" data-delay="0" data-categoria="calcas" data-nome="calça slim">
            <div class="produto-img">
                <img src="assets/img/calcas/calca6.png" alt="Calça Slim">
                <div class="produto-overlay">
                    <span class="produto-categoria-label">Calças</span>
                    <h4>Calça Slim</h4>
                </div>
            </div>
        </div>

        <div class="card produto-card reveal" data-reveal="fade-up" data-delay="0" data-categoria="calcas" data-nome="calça slim">
            <div class="produto-img">
                <img src="assets/img/calcas/calca7.png" alt="Calça Slim">
                <div class="produto-overlay">
                    <span class="produto-categoria-label">Calças</span>
                    <h4>Calça Slim</h4>
                </div>
            </div>
        </div>

        <!-- BERMUDAS -->
        <div class="card produto-card reveal" data-reveal="fade-up" data-delay="1" data-categoria="bermudas" data-nome="bermuda jeans">
            <div class="produto-img">
                <img src="assets/img/bermudas/bermuda1.png" alt="Bermuda Jeans">
                <div class="produto-overlay">
                    <span class="produto-categoria-label">Bermudas</span>
                    <h4>Bermuda Jeans</h4>
                </div>
            </div>
        </div>

        <div class="card produto-card reveal" data-reveal="fade-up" data-delay="2" data-categoria="bermudas" data-nome="bermuda jeans">
            <div class="produto-img">
                <img src="assets/img/bermudas/bermuda2.png" alt="Bermuda Jeans">
                <div class="produto-overlay">
                    <span class="produto-categoria-label">Bermudas</span>
                    <h4>Bermuda Jeans</h4>
                </div>
            </div>
        </div>

        <div class="card produto-card reveal" data-reveal="fade-up" data-delay="2" data-categoria="bermudas" data-nome="bermuda social">
            <div class="produto-img">
                <img src="assets/img/bermudas/bermuda3.png" alt="Bermuda Social">
                <div class="produto-overlay">
                    <span class="produto-categoria-label">Bermudas</span>
                    <h4>Bermuda Social</h4>
                </div>
            </div>
        </div>

        <div class="card produto-card reveal" data-reveal="fade-up" data-delay="2" data-categoria="bermudas" data-nome="bermuda social">
            <div class="produto-img">
                <img src="assets/img/bermudas/bermuda4.png" alt="Bermuda Social">
                <div class="produto-overlay">
                    <span class="produto-categoria-label">Bermudas</span>
                    <h4>Bermuda Social</h4>
                </div>
            </div>
        </div>

    </div>

    <p id="mensagemVazia" class="mensagem-vazia" style="display:none;">Nenhum produto encontrado.</p>
</section>

    <!-- SOBRE NÓS -->
<section id="sobre_nos" class="sobrenos-detalhado">

    <div class="sobre-conteudo">
        <div class="sobre-texto reveal" data-reveal="fade-left">
            <div class="topo-secao topo-secao-esquerda">
                <span class="eyebrow">Nossa história</span>
                <h2>Sobre Nós</h2>
            </div>
            <p>
                <strong>A Perfil Z4 nasceu com o propósito de oferecer mais do que roupas: uma identidade.</strong>
            </p>
            <p>
                Localizada no bairro Goiânia, em Belo Horizonte – MG, a Perfil Z4 tem como proposta unir estilo, qualidade e personalidade, 
                oferecendo aos seus clientes peças que acompanham diferentes estilos e formas de se expressar. 
            </p>
            <p>
                A marca busca acompanhar as tendências da moda sem abrir mão de sua identidade, 
                valorizando uma experiência de compra diferenciada e um atendimento próximo aos seus clientes.
            </p>
            <p>
                Mais do que oferecer roupas, a Perfil Z4 busca ajudar cada pessoa a encontrar peças que representem <strong>seu estilo, sua personalidade e sua identidade.</strong>
            </p>
            <p>
                <strong>Mais do que vestir, queremos fazer parte do seu estilo.</strong>
            </p>
        </div>

        <div class="sobre-imagem reveal" data-reveal="fade-right">
            <img src="/assets/img/lojasite.png" loading="lazy"/>
        </div>
    </div>

    <h3 class="titulo-equipe reveal" data-reveal="fade-up">O que nos move</h3>

    <div class="cards-equipe">
        <div class="card-membro reveal" data-reveal="fade-up" data-delay="0">
            <div class="valor-icone">
                <svg fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24" width="26" height="26">
                    <path d="M12 2l2.9 6.26L22 9.27l-5 4.87L18.2 21 12 17.6 5.8 21 7 14.14l-5-4.87 7.1-1.01L12 2z" />
                </svg>
            </div>
            <div class="membro-info">
                <h4>Qualidade em primeiro lugar</h4>
                <p class="valor-texto">Peças selecionadas com atenção a tecido, caimento e acabamento.</p>
            </div>
        </div>

        <div class="card-membro reveal" data-reveal="fade-up" data-delay="1">
            <div class="valor-icone">
                <svg fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24" width="26" height="26">
                    <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 1 0-7.78 7.78L12 21.23l8.84-8.84a5.5 5.5 0 0 0 0-7.78z" />
                </svg>
            </div>
            <div class="membro-info">
                <h4>Feito com atenção</h4>
                <p class="valor-texto">Cada peça é escolhida a dedo, pensando em quem vai vestir.</p>
            </div>
        </div>

        <div class="card-membro reveal" data-reveal="fade-up" data-delay="2">
            <div class="valor-icone">
                <svg fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24" width="26" height="26">
                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                    <circle cx="9" cy="7" r="4" />
                    <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                    <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                </svg>
            </div>
            <div class="membro-info">
                <h4>Atendimento próximo</h4>
                <p class="valor-texto">Falamos de igual pra igual, sem forçar a venda e sem enrolação.</p>
            </div>
        </div>

        <div class="card-membro reveal" data-reveal="fade-up" data-delay="0">
            <div class="valor-icone">
                <svg fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24" width="26" height="26">
                    <path d="M3 6h18M3 12h18M3 18h18" />
                </svg>
            </div>
            <div class="membro-info">
                <h4>Estilo para todo dia</h4>
                <p class="valor-texto">Do casual ao social, peças versáteis pra qualquer ocasião.</p>
            </div>
        </div>
    </div>
</section>

    <!-- CONTATO -->
    <section id="contato" class="contato-detalhado">
        <div class="topo-secao reveal" data-reveal="fade-up">
            <span class="eyebrow">Entre em contato</span>
            <h2>Contato</h2>
        </div>
    <div class="subtitulo reveal" data-reveal="fade-up">
        <p>
            Tem alguma dúvida sobre uma peça, quer saber se temos seu tamanho ou deseja fazer uma encomenda?
            <strong>Fale com a gente direto pelo WhatsApp — atendimento rápido e sem burocracia.</strong>
        </p>
    </div>

    <div class="contato-grid">
        <div class="contato-info reveal" data-reveal="fade-right">
            <div class="contato-info-item">
                <span class="card-icon">
                    <svg fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24" width="22" height="22">
                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                        <circle cx="12" cy="10" r="3" />
                    </svg>
                </span>
                <div>
                    <h4>Onde estamos</h4>
                    <p>Rua Pomba, 485 - Goiânia, Belo Horizonte - MG</p>
                </div>
            </div>
            <div class="contato-info-item">
                <span class="card-icon">
                    <svg fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24" width="22" height="22">
                        <circle cx="12" cy="12" r="10" />
                        <path d="M12 6v6l4 2" />
                    </svg>
                </span>
                <div>
                    <h4>Horário de funcionamento</h4>
                    <p>Segunda a sexta: 9h às 20h · Sábado: 9h às 19h</p>
                </div>
            </div>
            <div class="contato-info-item">
                <span class="card-icon">
                    <svg fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24" width="22" height="22">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                        <circle cx="9" cy="7" r="4" />
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                        <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                    </svg>
                </span>
                <div>
                    <h4>Atendimento personalizado</h4>
                    <p>Fale diretamente com a equipe da loja, com atendimento rápido e personalizado.</p>
                </div>
            </div>
        </div>

        <div class="whatsapp-card reveal" data-reveal="fade-left">
            <div class="whatsapp-icone">
                <svg width="30" height="30" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z" />
                    <path d="M20.52 3.449C18.24 1.245 15.24 0 12.045 0 5.463 0 .104 5.36.101 11.943c0 2.105.549 4.16 1.595 5.976L0 24l6.223-1.632a11.9 11.9 0 0 0 5.816 1.482h.005c6.58 0 11.938-5.36 11.941-11.944 0-3.19-1.24-6.19-3.465-8.457zm-8.475 18.354h-.004a9.906 9.906 0 0 1-5.045-1.382l-.362-.215-3.694.969.986-3.604-.236-.37a9.897 9.897 0 0 1-1.516-5.271c.003-5.462 4.448-9.905 9.876-9.905 2.637 0 5.116 1.03 6.982 2.898a9.825 9.825 0 0 1 2.887 6.994c-.003 5.462-4.448 9.906-9.874 9.906z" />
                </svg>
            </div>
            <h3>Fale com a gente agora</h3>
            <p>Clique no botão abaixo e converse direto com a nossa equipe pelo WhatsApp.</p>

            <a class="whatsapp-btn" href="https://wa.me/5531993440905?text=Ol%C3%A1!%20Vim%20pelo%20site%20e%20gostaria%20de%20saber%20mais%20sobre%20os%20produtos." target="_blank" rel="noopener">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z" />
                    <path d="M20.52 3.449C18.24 1.245 15.24 0 12.045 0 5.463 0 .104 5.36.101 11.943c0 2.105.549 4.16 1.595 5.976L0 24l6.223-1.632a11.9 11.9 0 0 0 5.816 1.482h.005c6.58 0 11.938-5.36 11.941-11.944 0-3.19-1.24-6.19-3.465-8.457zm-8.475 18.354h-.004a9.906 9.906 0 0 1-5.045-1.382l-.362-.215-3.694.969.986-3.604-.236-.37a9.897 9.897 0 0 1-1.516-5.271c.003-5.462 4.448-9.905 9.876-9.905 2.637 0 5.116 1.03 6.982 2.898a9.825 9.825 0 0 1 2.887 6.994c-.003 5.462-4.448 9.906-9.874 9.906z" />
                </svg>
                Chamar no WhatsApp
            </a>

            <span class="whatsapp-numero">(31) 99344-0905</span>
        </div>
    </div>
</section>

    <!-- RODAPÉ -->
    <footer>
        <div class="footer-conteudo">
            <div class="footer-logo">
                <svg viewBox="0 0 300 70" width="230">
                    <image href="/assets/img/logosite.png" x="0" y="0" width="110" height="110"/>
                </svg>
                <p>Vista confiança. Peças criadas para destacar seu estilo com autenticidade e presença.</p>
            </div>

            <div class="footer-info">
                <span class="footer-info-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M4 4l4-2 4 2 4-2 4 2v6l-2 1v9H6v-9l-2-1z"/>
                    </svg>
                </span>
                <h4>Qualidade Premium</h4>
                <p>Trabalhamos com tecidos selecionados e acabamento impecável para garantir durabilidade e estilo em cada peça.</p>
            </div>

            <div class="footer-info">
                <span class="footer-info-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="7" r="4"/>
                        <path d="M5.5 21a6.5 6.5 0 0 1 13 0"/>
                    </svg>
                </span>
                <h4>Atendimento Personalizado</h4>
                <p>Oferecemos suporte para ajudar você a encontrar o look ideal para qualquer ocasião.</p>
            </div>
        </div>

        <div class="footer-linha"></div>
        <p class="footer-copy">© 2026 Perfil Z4 — Todos os direitos reservados.</p>
    </footer>

    <button id="back-to-top" class="back-to-top" aria-label="Voltar ao topo">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M12 19V5"/><path d="M5 12l7-7 7 7"/></svg>
    </button>

</body>
</html>