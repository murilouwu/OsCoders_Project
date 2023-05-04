<?php
    include('assets/php/funs.php');
    if(!isset($_SESSION['esp']) && $_SESSION['esport']){
        move('index.php');
    }
    HeaderEcho($_SESSION['esport'][$_SESSION['esp']],'assets/css/vetrin.css','assets/img/logo.png');
    $_SESSION['urlPdf'] = array(
        'assets/pdfs/Fut.pdf',
        'assets/pdfs/Volei.pdf',
        'assets/pdfs/Basquete',
        'Tênis de Mesa',
        'Atletismo',
        'assets/pdfs/Hendbol.pdf'
    );
    $on = "addBoll(this, '#ulEnvent')";
    $_SESSION['Events'] = array(
        /*Futsal events*/array(
            '<div class="ul" id="ulEnvent0" onclick="'.$on.'"> Interclasse de '.$_SESSION['esport'][$_SESSION['esp']].' mês 04 do ano de 2023 ●</div>',
            '<div class="ul" id="ulEnvent1" onclick="'.$on.'"> JEESP de '.$_SESSION['esport'][$_SESSION['esp']].' mês 07 do ano de 2022</div>',
            '<div class="ul" id="ulEnvent2" onclick="'.$on.'"> Interclasse de '.$_SESSION['esport'][$_SESSION['esp']].' mês 10 do ano de 2021</div>'
        ),
        /*Volei events*/array(
            '<div class="ul" id="ulEnvent0" onclick="'.$on.'"> JEESP de '.$_SESSION['esport'][$_SESSION['esp']].' mês 02 do ano de 2023 ●</div>',
            '<div class="ul" id="ulEnvent1" onclick="'.$on.'"> Interclasse de '.$_SESSION['esport'][$_SESSION['esp']].' mês 06 do ano de 2022 </div>',
            '<div class="ul" id="ulEnvent2" onclick="'.$on.'"> Interclasse de '.$_SESSION['esport'][$_SESSION['esp']].' mês 09 do ano de 2021</div>'
        ),
        /*Basquete events*/array(
            '<div class="ul" id="ulEnvent0" onclick="'.$on.'"> Interclasse de '.$_SESSION['esport'][$_SESSION['esp']].' mês 07 do ano de 2023 ●</div>',
            '<div class="ul" id="ulEnvent1" onclick="'.$on.'"> Interclasse de '.$_SESSION['esport'][$_SESSION['esp']].' mês 03 do ano de 2022</div>',
            '<div class="ul" id="ulEnvent2" onclick="'.$on.'"> JEESP de '.$_SESSION['esport'][$_SESSION['esp']].' mês 09 do ano de 2021</div>'
        ),
        /*Tênis events*/array(
            '<div class="ul" id="ulEnvent0" onclick="'.$on.'"> JEESP de '.$_SESSION['esport'][$_SESSION['esp']].' mês 04 do ano de 2023 ●</div>',
            '<div class="ul" id="ulEnvent1" onclick="'.$on.'"> Interclasse de '.$_SESSION['esport'][$_SESSION['esp']].' mês 03 do ano de 2022</div>',
            '<div class="ul" id="ulEnvent2" onclick="'.$on.'"> JEESP de '.$_SESSION['esport'][$_SESSION['esp']].' mês 02 do ano de 2021</div>'
        ),
        /*Atletismo events*/array(
            '<div class="ul" id="ulEnvent0" onclick="'.$on.'"> Interclasse de '.$_SESSION['esport'][$_SESSION['esp']].' mês 06 do ano de 2023 ●</div>',
            '<div class="ul" id="ulEnvent1" onclick="'.$on.'"> Interclasse de '.$_SESSION['esport'][$_SESSION['esp']].' mês 06 do ano de 2022</div>',
            '<div class="ul" id="ulEnvent2" onclick="'.$on.'"> JEESP de '.$_SESSION['esport'][$_SESSION['esp']].' mês 08 do ano de 2021</div>'
        ),
        /*Hendbol events*/array(
            '<div class="ul" id="ulEnvent0" onclick="'.$on.'"> JEESP de '.$_SESSION['esport'][$_SESSION['esp']].' mês 10 do ano de 2023 ●</div>',
            '<div class="ul" id="ulEnvent1" onclick="'.$on.'"> Interclasse de '.$_SESSION['esport'][$_SESSION['esp']].' mês 11 do ano de 2022</div>',
            '<div class="ul" id="ulEnvent2" onclick="'.$on.'"> Interclasse de '.$_SESSION['esport'][$_SESSION['esp']].' mês 6 do ano de 2021</div>'
        )
    );
    $on = "addBoll(this, '#ulTime')";
    $_SESSION['Times'] = array(
        /*Futsal events*/array(
            '<div class="ul" id="ulTime0" onclick="'.$on.'"> Time X do Interclasse de '.$_SESSION['esport'][$_SESSION['esp']].' mês 04 do ano de 2023 ●</div>',
            '<div class="ul" id="ulTime1" onclick="'.$on.'"> Time X do JEESP de '.$_SESSION['esport'][$_SESSION['esp']].' mês 07 do ano de 2022</div>'
        ),
        /*Volei events*/array(
            '<div class="ul" id="ulTime0" onclick="'.$on.'"> Time X do JEESP de '.$_SESSION['esport'][$_SESSION['esp']].' mês 02 do ano de 2023 ●</div>',
            '<div class="ul" id="ulTime1" onclick="'.$on.'"> Time X do Interclasse de '.$_SESSION['esport'][$_SESSION['esp']].' mês 06 do ano de 2022 </div>'
        ),
        /*Basquete events*/array(
            '<div class="ul" id="ulTime0" onclick="'.$on.'"> Time X do Interclasse de '.$_SESSION['esport'][$_SESSION['esp']].' mês 07 do ano de 2023 ●</div>',
            '<div class="ul" id="ulTime2" onclick="'.$on.'"> Time X do JEESP de '.$_SESSION['esport'][$_SESSION['esp']].' mês 09 do ano de 2021</div>'
        ),
        /*Tênis events*/array(
            '<div class="ul" id="ulTime0" onclick="'.$on.'"> Time X do JEESP de '.$_SESSION['esport'][$_SESSION['esp']].' mês 04 do ano de 2023 ●</div>',
            '<div class="ul" id="ulTime1" onclick="'.$on.'"> Time X do Interclasse de '.$_SESSION['esport'][$_SESSION['esp']].' mês 03 do ano de 2022</div>'
        ),
        /*Atletismo events*/array(
            '<div class="ul" id="ulTime0" onclick="'.$on.'"> Time X do Interclasse de '.$_SESSION['esport'][$_SESSION['esp']].' mês 06 do ano de 2023 ●</div>',
            '<div class="ul" id="ulTime2" onclick="'.$on.'"> Time X do JEESP de '.$_SESSION['esport'][$_SESSION['esp']].' mês 08 do ano de 2021</div>'
        ),
        /*Hendbol events*/array(
            '<div class="ul" id="ulTime0" onclick="'.$on.'"> Time X do JEESP de '.$_SESSION['esport'][$_SESSION['esp']].' mês 10 do ano de 2023 ●</div>',
            '<div class="ul" id="ulTime1" onclick="'.$on.'"> Time X do Interclasse de '.$_SESSION['esport'][$_SESSION['esp']].' mês 11 do ano de 2022</div>'
        )
    );
?>
    <button onclick="subir()" class="irTop" id="irTop"></button>
    <header class="cabe">
        <div class="drop">
            <div class="btnDrop" onclick="drop(this, '#blockDrop', 0, '#textDrop', ['Esportes v','Esportes ᴧ'])">
                <div class="logo"></div>
                <label class="title" id="textDrop">Esportes ᴧ</label>
            </div>
            <div class="block" id="blockDrop">
                <?php
                    if(isset($_SESSION['esport'])){
                        for($i=0; $i < count($_SESSION['esport']); $i++){
                            if($_SESSION['esp'] == $i){
                                $oncl = "'index.php'";
                                echo '<div class="ul" onclick="red('.$oncl.')">Home</div>';
                            }else{
                                echo '<div class="ul" onclick="frmEnv('.$i.')">'.$_SESSION['esport'][$i].'</div>';
                            }
                        }
                    }
                ?>
                <div class="ul" id="ul5" onclick="drop(this, '#blockExtern', 0, '#ul5', ['Mini Game <','Mini Game >'])">Mini Game ></div>
                <div class="blockExtern" id="blockExtern">
                    <div class="ul">Mini Game 1</div>
                </div>
            </div>
        </div>
        <div class="TitleName">
            <label class="name">SKY DEVS</label>
        </div>
        <div class="seep">
            <label class="name" onclick="red('index.php')">H o m e</label>
        </div>
    </header>
    <main class="meio">
        <div class="linha">
            <div class="text">
                <h1 class="title">ETEC <?php echo $_SESSION['esport'][$_SESSION['esp']]?></h1>
                <div class="textAdd">
                    <img src="assets/img/<?php echo $_SESSION['esport'][$_SESSION['esp']]?>ball.png" class="item">
                    <fieldset class="bolckTextAdd">
                        <legend class="legenda"><?php echo $_SESSION['esport'][$_SESSION['esp']]?></legend>
                        <p class="palgrayAdd"><?php echo $_SESSION['adds'][$_SESSION['esp']]?></p>
                    </fieldset>
                </div>
            </div>
            <div class="imageAdd" style="background-image: url('assets/img/<?php echo $_SESSION['esport'][$_SESSION['esp']]?>man.png');">
                <div class="gradient"></div>
            </div>
            <div class="rede"></div>
        </div>
        <div class="chaveamento">
            <div class="headerChave">
                <div class="logoChaveDiv">
                    <img src="assets/img/logo.png" class="logoChave">
                    <h3 class="title" id="tabTitle">C H A V E A M E N T O</h3>
                </div>
                <div class="headerBtns">
                    <div class="btnHeaderChave" id="BtnTabs1" onclick="frmTabOp([['#Tab4','#Tab2','#Tab3','#Tab1'], 3], [this, '#iconA', '0'], ['#BtnTabs4','#BtnTabs2','#BtnTabs3','#iconB','#iconC','#iconD','#Line'])"><i class="iconChave fa-solid fa-trophy" id="iconA"></i></div>
                    <div class="btnHeaderChave" id="BtnTabs2" onclick="frmTabOp([['#Tab1','#Tab4','#Tab3','#Tab2'], 3], [this, '#iconB', '0'], ['#BtnTabs1','#BtnTabs4','#BtnTabs3','#iconA','#iconC','#iconD','#Line'])"><i class="iconChave fa-solid fa-hand" id="iconB"></i></div>
                    <div class="btnHeaderChave" id="BtnTabs3" onclick="frmTabOp([['#Tab1','#Tab2','#Tab4','#Tab3'], 3], [this, '#iconC', '0'], ['#BtnTabs1','#BtnTabs2','#BtnTabs4','#iconA','#iconB','#iconD','#Line'])"><i class="iconChave fa-solid fa-calendar-days" id="iconC"></i></div>
                    <div class="btnHeaderChave" id="BtnTabs4" onclick="frmTabOp([['#Tab1','#Tab2','#Tab3','#Tab4'], 3], [this, '#iconD', '#Line']), ['#BtnTabs1','#BtnTabs2','#BtnTabs3','#iconA','#iconB','#iconC', 'nulo']">
                        <div class="linhaPdfIncon" id="Line">
                            <label class="namePdf" id="iconD">PDF</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tabs">
                <div class="tab" id="Tab1">
                    <div class="ulDivChave">
                        <div class="ul" id="ul" onclick="drop(this, '#blockExternII', 0, '#ul', ['Chaves v','Chaves ᴧ'])">Chaves v</div>
                        <div class="blockExtern" id="blockExternII">
                            <?php
                                if(isset($_SESSION['Events'][$_SESSION['esp']])){
                                    for($i=0; $i < count($_SESSION['Events'][$_SESSION['esp']]); $i++){
                                        echo $_SESSION['Events'][$_SESSION['esp']][$i];
                                    }
                                }
                            ?>
                        </div>
                    </div>
                    <div class="blockChaveament">
                        <div class="rodada">
                            <div class="lineV2"></div>
                            <div class="boxA">
                                <div class="minBox">
                                    <div class="retangue">
                                        <img src="assets/img/brasao.png" class="brasao">
                                        <h4 class="nameTime">Time A</h4>
                                    </div>
                                    <div class="lineV"></div>
                                </div>
                                <div class="lineH"></div>
                                <div class="minBox">
                                    <div class="retangue">
                                        <img src="assets/img/brasao.png" class="brasao">
                                        <h4 class="nameTime">Time B</h4>
                                    </div>
                                    <div class="lineV"></div>
                                </div>
                            </div>
                            <div class="lineV2"></div>
                            <div class="boxA">
                                <div class="minBox">
                                    <div class="retangue">
                                        <img src="assets/img/brasao.png" class="brasao">
                                        <h4 class="nameTime">Time C</h4>
                                    </div>
                                    <div class="lineV"></div>
                                </div>
                                <div class="lineH"></div>
                                <div class="minBox">
                                    <div class="retangue">
                                        <img src="assets/img/brasao.png" class="brasao">
                                        <h4 class="nameTime">Time D</h4>
                                    </div>
                                    <div class="lineV"></div>
                                </div>
                            </div>
                        </div>
                        <div class="rodada">
                            <div class="lineVFin"></div>
                            <div class="boxA">
                                <div class="minBox">
                                    <div class="retangue">
                                        <img src="assets/img/brasao.png" class="brasao">
                                        <h4 class="nameTime">Time A</h4>
                                    </div>
                                    <div class="lineV"></div>
                                </div>
                            </div>
                            <div class="boxA">
                                <div class="minBox">
                                    <div class="retangue">
                                        <img src="assets/img/brasao.png" class="brasao">
                                        <h4 class="nameTime">Time C</h4>
                                    </div>
                                    <div class="lineV"></div>
                                </div>
                            </div>
                            <div class="lineHFin"></div>
                        </div>
                        <div class="rodada">
                            <div class="boxC">
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab" id="Tab2">
                    <div class="ulDivChave">
                        <div class="ul" id="ul" onclick="drop(this, '#blockExternIII', 0, '#ul', ['Times v','Times ᴧ'])">Times v</div>
                        <div class="blockExtern" id="blockExternIII">
                            <?php
                                if(isset($_SESSION['Times'][$_SESSION['esp']])){
                                    for($i=0; $i < count($_SESSION['Times'][$_SESSION['esp']]); $i++){
                                        echo $_SESSION['Times'][$_SESSION['esp']][$i];
                                    }
                                }
                            ?>
                        </div>
                    </div>
                    <div class="blockChaveament">

                    </div>
                </div>
                <div class="tab" id="Tab3">
                    <!--calendario-->
                </div>
                <div class="tab" id="Tab4">
                    <embed src="<?php echo $_SESSION['urlPdf'][$_SESSION['esp']]?>" type="application/pdf">
                </div>
            </div>
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
            divs[0].value = fun;
            divs[1].click();
        }
    </script>
<?php
    footEcho();
    if(isset($_POST['env'])){
        $_SESSION['esp'] = $_POST['esport'];
        move('Vetrine.php');
    }
?>