<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Allan Rodrigues</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="assest/css/main.css">
    <link rel="icon" type="imagem/ico" href="assest/images/logo.jpg">
    <link rel="stylesheet" href="icofont/icofont.css">
</head>

<body>

    <header>
        <div class="menu-toggler">
            <div class="bar half start "></div>
            <div class="bar"></div>
            <div class="bar half end"></div>
        </div>
        <nav class="top-nav">
            <ul class="nav-list">
                <li>
                    <a href="#" class="nav-link">Home</a>
                </li>
                <li>
                    <a href="#sobre" class="nav-link">Sobre</a>
                </li>
                <li>
                    <a href="#carreira" class="nav-link">Carreira</a>
                </li>
                <!-- <li>
                    <a href="contato.html" class="nav-link">Contato</a>
                </li> -->
            </ul>
        </nav>

        <div class="landing-text">
            <h1>Allan Rodrigues</h1>
            <h6>Web Developer - PHP </h6>
        </div>
    </header>

    <section class="about" id="about">
        <div class="container">
            <div class="profile-img" style="border-radius: 30rem" data-aos="fade-right" data-aos-delay="300">
                <img class="border" src="./assest/images/bg-perfil.png" alt="">
            </div>
            <div class="about-details" data-aos="fade-left" data-aos-delay="600">
                <div class="about-heading">
                    <h1>Allan</h1>
                    <h6>Full Stack PHP</h6>
                </div>

                <div class="about-heading-p">
                    <p>Allan Rodrigues Machado - BACK-END Developer </p> <br>
                    <p>Possuo 25 anos, com uma carreira focada no mundo BACK-END </p> <br>
                    <p>Graduação: Ciência da Computação</p> <br>
                    <p> Habilidades: PHP, Laravel, Composer, HTML5, Sas, CSS3, JavaScript, MySql</p><br>
                    <p>Ferramentas: Visual Studio Code, PhpStorm, NetBeans, Git e GitHub, MySql workbench </p>
                </div>

                <div class="social-media">
                    <ul class="nav-list">
                        <li>
                            <a href="https://www.instagram.com/allan_rodrigues_14/" # class="icon-link">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/allanrodriguesmachado" # class="icon-link">
                                <i class="fab fa-github"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/in/allanrodriguesmachado/" # class="icon-link">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </section>

    <section class="experience" id="experience">
        <div class="container">
            <div class="section-heading">
                <h1>Experiencia</h1>
                <h6>Algumas Experiencias</h6>
            </div>
            <div class="timeline" data-aos="fade-down" data-aos-delay="300">
                <ul>
                    <li class="date" data-date="2015 - 2019">
                        <h1>Estagiário - Ensino Médio do Programa Acessa Escola </h1>
                        <h1>Acessa Escola </h1> <br>
                        <p>• Auxiliava crianças em trabalhos escolares </p> <br>
                        <p>• Organização de computadores e reparos </p> <br>
                        <p>• Auxiliava em proposta de estudo </p>
                    </li>
                </ul>
                <ul>
                    <li class="date" data-date="2015 - 2019">
                        <h1>Agente de atendimento ao cliente</h1>
                        <h1>TMKT</h1> <br>
                        <p>• Atendimento técnico </p> <br>
                        <p>• Gestão de cliente (atualização de dados) </p> <br>
                        <p>• Suporte ao departamento técnico </p> <br>
                        <p>• Detalhamento de fatura</p>
                    </li>
                </ul>
                <ul>
                    <li class="date" data-date="2019 - 2019">
                        <h1>Ajudante geral</h1>
                        <h1>Ecobrasil Indústria e Com. de Máquinas e Equipamentos</h1> <br>
                        <p>• Teste de estanqueidade de tanques verificar se estão com vazamento </p> <br>
                        <p>• Lixamento de peças em geral </p> <br>
                        <p>• Correção de peças em calandra</p> <br>
                    </li>
                </ul>
                <ul>
                    <li class="date" data-date="2020 - Presente">
                        <h1>Estagiário de TI</h1>
                        <h1>Cia Brap Treinamentos</h1> <br>
                        <p>• Ajustes básicos usando HTML e CSS, pois a plataforma em ead já esta pronta </p> <br>
                        <p>• Desenvolvimento de banner </p> <br>
                        <p>• Criação de vídeos e áudio</p> <br>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- <section class="contact" id="contact">
        <div class="container">
            <div class="section-heading">
                <h1>Contato</h1>
                <h6>Lorem Ipsum é simplesmente uma simulação de texto</h6>
            </div>
            <form action="" data-aos="fade-up" data-aos-delay="300">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" placeholder="Coloque Seu Nome" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Coloque seu E-mail" required>
                <label for="service">serviços:</label>
                <select name="services" id="services">
                    <option value="">Web Design</option>
                    <option value="">Web Developer</option>
                    <option value="">Web Design/Developer</option>
                </select>
                <label for="subject">subject:</label>
                <textarea name="subject" id="subject" cols="10" rows="10"></textarea>
                <input type="submit" value="submit">
            </form>
        </div>
    </section> -->

    <footer class="copyright">
        <div class="up" id="up">
            <i class="fa fa-angle-double-up"></i>
        </div>
        <p>&copy; Allan Rodrigues </p>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="assest/js/main.js"></script>
</body>

</html>