var score=0;
var tabuleiro= [0];
var pause=false;
var nImagens=[37,20];
var nMaxImagens=[20,35];
var nivel=1;
var id;
var palavra=[49];
var j = 0;
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























function swap(number){
    $('#banner').load('html'+number+'.php');
}

function atualiza(fator) {

    stage+=fator;
    swap(stage);

}






