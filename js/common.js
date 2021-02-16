var score=0;
var tabuleiro= [0];
var pause=false;
var nImagens=[37,20];
var nMaxImagens=[20,35];
var nivel=1;
var id;
function novaImagem(){
    if(!tabuleiro.includes(id)){
        score++;
        $('#scorePts').html(score);
        tabuleiro.push(id);
    }
    else{
        if(score>nMaxImagens[nivel-1]){
            nivel++;
            $('#novoNivel').html("Mudou de nÃ­vel!");
        }
        else{
            $('#novoNivel').html("Tente outra vez...");
        }
        $('#msgPts').html(score);
        $('#mensagem').modal('toggle');
    }

    sorteiaImagem();
}
function repetidaImagem(){
    if(tabuleiro.includes(id)){
        score++;
        $('#scorePts').html(score);
    }
    else{
        if(score>nMaxImagens[nivel-1]){
            nivel++;
            $('#novoNivel').html("Mudou de nÃ­vel!");
            score=0;
        }
        else{
            $('#novoNivel').html("Tente outra vez...");
        }
        $('#msgPts').html(score);
        $('#mensagem').modal('toggle');
    }
    sorteiaImagem();
}
function sorteiaPalavra(){

    if(pause==false){
        $('#picture').css('background-image','url(images/'+0+'.jpg)');
        setTimeout('sorteiaImagem()',100);

    }
    else{
        id=(nivel-1)*100+1+parseInt(Math.random()*nImagens[nivel-1]);

        //   alert(id);
        $('#picture').css('background-image','url(images/'+id+'.jpg)');
    }

    pause=!pause;
}
function playGame(state){
    score=0;
    tabuleiro=[];
    $('#scorePts').html(score);
    $('#nivelNum').html(nivel);
    sorteiaImagem();
}










function readTextFile("C:\wamp64\www\pap2021\images\palavras.txt")
{
    var rawFile = new XMLHttpRequest();
    rawFile.open("GET", file, false);
    rawFile.onreadystatechange = function ()
    {
        if(rawFile.readyState === 4)
        {
            if(rawFile.status === 200 || rawFile.status == 0)
            {
                var allText = rawFile.responseText;
                alert(allText);
            }
        }
    }
    rawFile.send(null);
}
















function swap(number){
    $('#banner').load('html'+number+'.html');
}

function atualiza(fator) {

    stage+=fator;
    swap(stage);

}






