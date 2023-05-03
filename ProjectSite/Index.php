<?php
    include('assets/php/funs.php');
    HeaderEcho('Home','assets/css/index.css','assets/img/logo.png');
?>
    <button onclick="subir()" class="irTop" id="irTop"></button>
    <header class="cabe">
        <div class="drop">
            <div class="btnDrop" onclick="drop(this, '#blockDrop', 0, '#textDrop', ['Esportes v','Esportes ᴧ'])">
                <div class="logo"></div>
                <label class="title" id="textDrop">Esportes ᴧ</label>
            </div>
            <div class="block" id="blockDrop">
                <div class="ul" onclick="frmEnv(0)">Futsal</div>
                <div class="ul" onclick="frmEnv(1)">Volei</div>
                <div class="ul" onclick="frmEnv(2)">Basquete</div>
                <div class="ul" onclick="frmEnv(3)">Tenis de Mesa</div>
                <div class="ul" onclick="frmEnv(4)">Atletismo</div>
                <div class="ul" onclick="frmEnv(5)">Handebol</div>
                <div class="ul" id="ul5" onclick="drop(this, '#blockExtern', 0, '#ul5', ['Mini Game <','Mini Game >'])">Mini Game ></div>
                <div class="blockExtern" id="blockExtern">
                    <div class="ul">Mini Game 1</div>
                    <div class="ul">Mini Game 2</div>
                </div>
            </div>
        </div>
        <div class="TitleName">
            <label class="name">SKY DEVS</label>
        </div>
        <div class="seep">
            <div class="search">
                <i class="icon fa-solid fa-magnifying-glass"></i>
                <input type="text" id="pesquisa" class="pes">
            </div>
        </div>
    </header>
    <main class="meio">
        <div class="linha">
            <div class="text">
                <h1 class="title">ETEC SPORT</h1>
                <div class="textAdd">
                    <img src="assets/img/Voleiball.png" class="item">
                    <fieldset class="bolckTextAdd">
                        <legend class="legenda">Volei</legend>
                        <p class="palgrayAdd">Texto de anuncio Volei</p>
                    </fieldset>
                </div>
                <div class="textAdd addBlock2">
                    <img src="assets/img/futsalball.png" class="item">
                    <fieldset class="bolckTextAdd">
                        <legend class="legenda">Futsal</legend>
                        <p class="palgrayAdd">Texto de anuncio futsal</p>
                    </fieldset>
                </div>
            </div>
            <div class="imageAdd">
                <div class="gradient"></div>
            </div>
            <div class="rede"></div>
        </div>
        
        <div class="linhaB">
            <div class="mostCard">
                <div class="TipeCompeticion">
                    <div class="divssoria">
                        <div class="texts">
                            <div class="title">Interclasse</div>
                            <div class="text">
                                O que é o interclass
                            </div>
                        </div>
                        <img src="assets/img/run.png" class="jogador" id="jogador1">
                    </div>
                    <div class="dateDoJogo">
                        12/05/2023 a 31/06/2023
                    </div>
                </div>
                <div class="TipeCompeticion" style="border: none; transform: scaleX(-1);">
                    <div class="divssoria">
                        <div class="texts" style="transform: scaleX(-1);">
                            <div class="title">JEESP</div>
                            <div class="text">
                                O que é o JEESP
                            </div>
                        </div>
                        <img src="assets/img/voleimanII.png" class="jogador" style="transform: scaleX(-1); animation: 10s nave2 linear infinite alternate-reverse backwards;">
                    </div>
                    <div class="dateDoJogo" style="transform: scaleX(-1);">
                        12/05/2023 a 31/06/2023
                    </div>
                </div>
            </div>
        </div>
        
        <div class="linha">
            <div class="text Lin3prop2">
                <h1 class="title">SKY DEVS</h1>
                <div class="textAdd">
                    <img src="assets/img/Voleiball.png" class="item">
                    <fieldset class="bolckTextAdd">
                        <legend class="legenda">add 1</legend>
                        <p class="palgrayAdd"> ... </p>
                    </fieldset>
                </div>
                <div class="textAdd addBlock2">
                    <img src="assets/img/futsalball.png" class="item">
                    <fieldset class="bolckTextAdd">
                        <legend class="legenda">add 2</legend>
                        <p class="palgrayAdd"> ... </p>
                    </fieldset>
                </div>
            </div>
            <div class="text Lin3prop2">
                <div class="textAdd">
                    <img src="assets/img/Voleiball.png" class="item">
                    <fieldset class="bolckTextAdd">
                        <legend class="legenda">add 3</legend>
                        <p class="palgrayAdd"> ... </p>
                    </fieldset>
                </div>
                <div class="textAdd addBlock2">
                    <img src="assets/img/futsalball.png" class="item">
                    <fieldset class="bolckTextAdd">
                        <legend class="legenda">add 4</legend>
                        <p class="palgrayAdd"> ... </p>
                    </fieldset>
                </div>
            </div>
            <div class="rede"></div>
        </div>
        
        <div class="linhaB">
            <div class="Biglogo"></div>
                <fieldset class="text">
                    <legend class="leng">Quem nós somos:</legend>
                        A "Sky Dev's" foi criada com o propósito de solucionar o problema proposto no Hackathon 2023. Somos uma equipe composta por 9 membros, das turmas do 1°, 2° e 3° DES em harmonia com o 3° JODI.
                </fieldset>
            </div>
    </main>
    <footer class="pe">
        <div class="etec" onclick="red('//etecperuibe.com.br/')">
            <img src="assets/img/etecLogo.png" class="logoEtec">
        </div>
        <div class="div">
            <label><i class="icon fa-solid fa-face-grin-tongue-squint"></i>Ana Beatriz Sodré</label>
            <label><i class="icon fa-solid fa-face-grin-stars"></i>Anna Beatriz</label> 
            <label><i class="icon fa-solid fa-face-tired"></i>Geovanna Maria</label>
            <label><i class="icon fa-solid fa-face-angry"></i>Leandro Gilioli</label>
            <label><i class="icon fa-regular fa-face-surprise"></i>Lucas Máximo</label>
            <label><i class="icon fa-regular fa-face-tired"></i>Luiz Pedro Sesti</label>
            <label><i class="icon fa-solid fa-face-sad-cry"></i>Matheus Pereira</label>
            <label><i class="icon fa-solid fa-face-grimace"></i>Murilo Gimenez</label>
            <label><i class="icon fa-solid fa-face-flushed"></i>Pedro Henrique Ferrari</label>
        </div>
        <div class="div2">
            <i class="tel fa-solid fa-phone"></i>
            <div class="boxText">Contato com o grupo:<br>skydevs2023@outlook.com</div>
        </div>
    </footer>
    <form method="post" class="ocultar">
        <input type="text" name="esport" id="esport">
        <input type="submit" value="Enviar" name="env" id="env">
    </form>
    <script>
        function frmEnv(fun){
            let divs = [ document.querySelector('#esport') , document.querySelector('#env')];
            let esports = [
                'Futsal',
                'Volei',
                'Basquete',
                'Tênis de Mesa',
                'Atletismo',
                'Handebol'
            ];
            divs[0].value = esports[fun];
            divs[1].click();
        }
    </script>
<?php
    if(isset($_POST['env'])){
        $_SESSION['esp'] = $_POST['esport'];
        move('Vetrine.php');
    }
    footEcho();
?>