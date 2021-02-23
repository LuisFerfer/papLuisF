var score=0;
var tabuleiro= [0];
var pause=false;
var nPalavras=[37,20];
var nMaxPalavras=[20,35];
var nivel=1;
var id;
var palavra=[49];
var j = 0;
function novaPalavra(){
    if(!tabuleiro.includes(id)){ // se dizes que é nova e não existe na lista de palavras que saíram
        score++;
        $('#scorePts').html(score);
        tabuleiro.push(id);  // adiciona à lista e deixa de ser nova
    }
    else{
        if(tabuleiro.includes(id)){
            $('#scorePts').html("PERDESTE");
        }

    }
    sorteiaPalavra();
    geraPalavra();
}
function repetidaPalavra(){
    if(tabuleiro.includes(id)){ // ele diz que é repetida e ela existe na lista de palavras saídas
        score++;
        $('#scorePts').html(score);

    }
    else{
        if(!tabuleiro.includes(id)){
            $('#scorePts').html("PERDESTE");

        }
    }
    sorteiaPalavra();
    geraPalavra();
}


function geraPalavra(){
var n;
    n=(Math.floor(Math.random()*nPalavras));
    return(sorteiaPalavra(n));

}

function sorteiaPalavra(){
        document.getElementById("palavra").innerHTML=geraPalavra();
}

function swap(number){
    $('#banner').load('html'+number+'.php');
}

function atualiza(fator) {

    stage+=fator;
    swap(stage);

}