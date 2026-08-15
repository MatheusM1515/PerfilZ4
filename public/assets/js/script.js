/**
 * script.js — Thermo Predict (site institucional)
 *
 * Todo o comportamento interativo da landing page: esconder o loader
 * inicial, abrir/fechar o menu mobile, dar feedback visual de rolagem no
 * cabeçalho, destacar o item de menu da seção atual, animar o conteúdo ao
 * entrar na tela e enviar o formulário de contato. Não depende de nenhum
 * backend próprio — é tudo client-side.
 */

// =========================
// LOADER
// =========================
/**
 * Esconde a tela de carregamento inicial assim que a página termina de
 * carregar. Um pequeno atraso (250ms) evita que o loader pisque/some
 * bruscamente em conexões rápidas.
 */
window.addEventListener("load", () => {
    const loader = document.getElementById("loader");
    if (loader) {
        setTimeout(() => loader.classList.add("loader-hidden"), 250);
    }
});

// =========================
// MENU MOBILE
// =========================
/**
 * Controla a abertura/fechamento do menu de navegação no mobile: alterna
 * as classes que mostram o menu e animam o ícone de hambúrguer, e fecha o
 * menu automaticamente quando o usuário clica em algum link (útil porque
 * os links são âncoras da mesma página, então o menu não fecharia sozinho
 * por navegação).
 */
const navToggle = document.getElementById("nav-toggle");
const navMenu = document.getElementById("nav-menu");

if (navToggle && navMenu) {
    navToggle.addEventListener("click", () => {
        const isOpen = navMenu.classList.toggle("open");
        navToggle.classList.toggle("active", isOpen);
        navToggle.setAttribute("aria-expanded", isOpen ? "true" : "false");
    });

    navMenu.querySelectorAll("a").forEach((link) => {
        link.addEventListener("click", () => {
            navMenu.classList.remove("open");
            navToggle.classList.remove("active");
            navToggle.setAttribute("aria-expanded", "false");
        });
    });
}

// =========================
// HEADER: SOMBRA AO ROLAR + BARRA DE PROGRESSO
// =========================
const header = document.getElementById("header");
const scrollProgress = document.getElementById("scroll-progress");
const backToTop = document.getElementById("back-to-top");

/**
 * Atualiza a aparência do cabeçalho e outros elementos fixos conforme a
 * posição de rolagem da página:
 *  - adiciona a classe "scrolled" ao header (fundo mais opaco) depois de
 *    30px de rolagem;
 *  - atualiza a largura da barra de progresso de leitura no topo da tela,
 *    proporcional ao quanto já foi rolado da página;
 *  - mostra o botão "voltar ao topo" depois de 500px de rolagem.
 *
 * Chamada tanto pelo evento de "scroll" quanto uma vez no carregamento,
 * para já refletir a posição inicial (por exemplo, se a página abrir com
 * scroll restaurado pelo navegador).
 */
function onScrollUI() {
    const scrollY = window.scrollY || window.pageYOffset;

    if (header) {
        header.classList.toggle("scrolled", scrollY > 30);
    }

    if (scrollProgress) {
        const docHeight = document.documentElement.scrollHeight - window.innerHeight;
        const progress = docHeight > 0 ? (scrollY / docHeight) * 100 : 0;
        scrollProgress.style.width = progress + "%";
    }

    if (backToTop) {
        backToTop.classList.toggle("visible", scrollY > 500);
    }
}

window.addEventListener("scroll", onScrollUI, { passive: true });
onScrollUI();

if (backToTop) {
    // Rola suavemente até o topo da página ao clicar no botão flutuante.
    backToTop.addEventListener("click", () => {
        window.scrollTo({ top: 0, behavior: "smooth" });
    });
}

// =========================
// MENU ATIVO (SCROLL SPY)
// =========================
const sections = document.querySelectorAll("section[id]");
const navLinks = document.querySelectorAll("nav a[href^='#']");

/**
 * "Scroll spy": a cada rolagem, percorre todas as seções da página e
 * marca como ativo (classe "active") o link do menu cuja seção
 * correspondente está atualmente visível no topo da viewport. O deslocamento
 * de 140px compensa a altura do cabeçalho fixo, para a seção ser
 * considerada "atual" um pouco antes de encostar no topo real da tela.
 */
window.addEventListener("scroll", () => {
    let current = "";

    sections.forEach((section) => {
        const sectionTop = section.offsetTop - 140;

        if (scrollY >= sectionTop) {
            current = section.getAttribute("id");
        }
    });

    navLinks.forEach((link) => {
        link.classList.remove("active");

        if (link.getAttribute("href") === "#" + current) {
            link.classList.add("active");
        }
    });
}, { passive: true });

// =========================
// REVEAL ON SCROLL
// =========================
/**
 * Anima a entrada de elementos marcados com a classe "reveal" assim que
 * eles ficam visíveis na tela, usando IntersectionObserver (mais leve que
 * calcular posição de scroll manualmente). Cada elemento é observado só
 * até aparecer uma vez — depois disso, para de ser monitorado. Em
 * navegadores sem suporte a IntersectionObserver, todos os elementos já
 * aparecem visíveis de imediato, para não deixar o conteúdo escondido.
 */
const revealEls = document.querySelectorAll(".reveal");

if ("IntersectionObserver" in window && revealEls.length) {
    const revealObserver = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("in-view");
                    revealObserver.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.15, rootMargin: "0px 0px -40px 0px" }
    );

    revealEls.forEach((el) => revealObserver.observe(el));
} else {
    revealEls.forEach((el) => el.classList.add("in-view"));
}

// =========================
// FORMULÁRIO CONTATO
// =========================
/**
 * Envia o formulário de contato de forma assíncrona (sem recarregar a
 * página). O formulário aponta (via atributo "action" no HTML) para o
 * Formspree, um serviço externo de recebimento de formulários — este
 * backend Laravel não processa nem armazena as mensagens.
 *
 * Fluxo:
 *  1. Impede o envio padrão do navegador e mostra o botão em estado de
 *     carregamento;
 *  2. Envia os dados via fetch como multipart/form-data, pedindo resposta
 *     em JSON;
 *  3. Em caso de sucesso, mostra a mensagem de confirmação e limpa o
 *     formulário; em caso de erro (resposta não-ok ou falha de rede),
 *     avisa o usuário para tentar novamente;
 *  4. Sempre restaura o botão ao estado normal ao final.
 */
window.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("form-contato");
    const msg = document.getElementById("msg-sucesso");
    const btnEnviar = document.getElementById("btn-enviar");

    if (!form) return;

    form.addEventListener("submit", async function (e) {
        e.preventDefault();

        const data = new FormData(form);

        if (btnEnviar) {
            btnEnviar.classList.add("is-loading");
            btnEnviar.disabled = true;
        }

        try {
            const response = await fetch(form.action, {
                method: "POST",
                body: data,
                headers: {
                    Accept: "application/json",
                },
            });

            if (response.ok) {
                if (msg) {
                    msg.style.display = "block";
                    setTimeout(() => {
                        msg.style.display = "none";
                    }, 5000);
                }
                form.reset();
            } else {
                alert("Erro ao enviar. Tente novamente em instantes.");
            }
        } catch (error) {
            alert("Erro ao enviar. Verifique sua conexão e tente novamente.");
        } finally {
            if (btnEnviar) {
                btnEnviar.classList.remove("is-loading");
                btnEnviar.disabled = false;
            }
        }
    });
});

// =========================
// BUSCA DOS PRODUTOS
// =========================
function filtrarProdutos() {
    const termo = document.getElementById('buscaProduto').value.toLowerCase();
    const cards = document.querySelectorAll('.produto-card');
    const categoriaAtiva = document.querySelector('.filtro-btn.ativo').dataset.categoria;
    let algumVisivel = false;

    cards.forEach(card => {
        const nome = card.dataset.nome;
        const categoria = card.dataset.categoria;
        const combinaBusca = nome.includes(termo);
        const combinaCategoria = categoriaAtiva === 'todos' || categoria === categoriaAtiva;

        if (combinaBusca && combinaCategoria) {
            card.style.display = 'flex';
            algumVisivel = true;
        } else {
            card.style.display = 'none';
        }
    });

    document.getElementById('mensagemVazia').style.display = algumVisivel ? 'none' : 'block';
}

function filtrarCategoria(categoria, botao) {
    document.querySelectorAll('.filtro-btn').forEach(btn => btn.classList.remove('ativo'));
    botao.classList.add('ativo');
    filtrarProdutos();
}