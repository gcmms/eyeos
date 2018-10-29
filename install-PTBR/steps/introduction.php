<?php

function toptext() {
    return 'Bem Vindo ao EyeOS';
}

function getContent() {
    echo '<center><h2 class="bigtitle">Instalando EyeOS</h2></center>';
    echo '<div class="explaintext">
        <p>Durante esta instalação, você será solicitado a responder algumas perguntas de configuração sobre seu servidor da Web e configurações preferenciais.</p>
        <p>Você precisará de algum conhecimento sobre seu servidor e acesso root, se possível. Se você estiver em uma hospedagem compartilhada, poderá concluir essa instalação, mas seu eyeOS não terá todos os recursos. Por favor, pressione instalar quando estiver pronto.</p>
        <p style="margin-top:40px;"><center><a href="index.php?step=requirements"><div><img border="0" src="install.png" /></div><div style="margin-top:20px;">Instalar EyeOS </div></a></center></p>
    </div>';
}

?>
