var score=0;
var palavrasSaidas=[]; // array de palavras/strings
var pause=false;
var nMaxPalavras=[20,35];
var nivel=1;
var id;
var palavra=[49];
var j = 0;


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

function novaPalavra(palavra){
    if(!palavrasSaidas.includes(palavra)){ // se dizes que é nova e não existe na lista de palavras que saíram
        score++;
        $('#scorePts').html(score);
        palavrasSaidas.push(palavra);  // adiciona à lista e deixa de ser nova
    }
    else{
        if(palavrasSaidas.includes(palavra)){
            $('#scorePts').html("PERDESTE");
        }

    }

}
function repetidaPalavra(palavra){
    if(palavrasSaidas.includes(palavra)){ // ele diz que é repetida e ela existe na lista de palavras saídas
        score++;
        $('#scorePts').html(score);

    }
    else{
        if(!palavrasSaidas.includes(palavra)){
            $('#scorePts').html("PERDESTE");

        }
    }

}


function debug(t){
    n=t.length;
    document.getElementById('debug').innerHTML="";
    for(i=0;i<n;i++)
        document.getElementById('debug').innerHTML+=t[i]+" ";
}