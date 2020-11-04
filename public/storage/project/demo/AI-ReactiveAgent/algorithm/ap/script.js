$(".demo-step").html(
    "<h1>Introdução</h1>"+
    "<p>Um agente é uma entidade autônoma capaz de <b>observar um ambiente</b> através de sensores e <b>atuar sobre este</b> através de atuadores.</p>"+
    "<br/><center>"+
    "<img src='/assets/demo/img/image01.png' /></center>"+
    "<br/><br/>"+
    "<code>função Agente-Reativo (percepção) {<br/>"+
    "&nbsp; //devolve ação estática: regras, um conjunto de regras condição-ação<br/>"+
    "&nbsp; estado ← INTERPRETA-ENTRADA(percepção);<br/>"+
    "&nbsp; regra ← CASA-REGRA (estado, regras); // actualiza a regra<br/>"+
    "&nbsp; ação ← AÇÃO-DA-REGRA(regra);<br/>"+
    "devolve ação;"+
    "<br/>}</code>"
);

Cookies.remove('pl.tb_arr');
Cookies.remove('tb_size');