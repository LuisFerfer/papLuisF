var score=0;
var palavrasSaidas=[]; // array de palavras/strings
var pause=false;
var nMaxPalavras=[20,35];
var lives=3;
var id;
var palavra=[49];
var j = 0;

                                            //    treino    //
function geraPalavra(){
    var n;
    n=(Math.floor(Math.random()*nPalavras));
    return(sorteiaPalavra(n));

}

function sorteiaPalavra(){
    document.getElementById("palavra").innerHTML=geraPalavra();
}

function swap(number){
    $('#banner').load('index/html'+number+'.php');
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
            alert("PERDESTE");
            setTimeout(atualiza(-1),3000);

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
            alert("PERDESTE");
            setTimeout(atualiza(-1),3000);

        }
    }

}


/*function debug(t){
    n=t.length;
    document.getElementById('debug').innerHTML="";
    for(i=0;i<n;i++)
        document.getElementById('debug').innerHTML+=t[i]+" ";
}
*/


                                                //   infinito   //


function geraPalavrainf(){
    var n;
    n=(Math.floor(Math.random()*nPalavras));
    return(sorteiaPalavrainf(n));

}

function sorteiaPalavrainf(){
    document.getElementById("palavra").innerHTML=geraPalavrainf();
}

                                //kikkkik

function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

async function demo() {
    console.log('Taking a break...');
    await sleep(2000);
    console.log('Two seconds later, showing sleep in a loop...');

    // Sleep in loop
    for (let i = 0; i < 5; i++) {
        if (i === 3)
            await sleep(2000);
        console.log(i);
    }
}

demo();

//kokokoko

function swapinf(number){
    $('#bannerinf').load('infinito/infinito'+number+'.php');
}

function atualizainf(fator) {

    stage+=fator;
    swapinf(stage);
}


async function novaPalavrainf(palavra){
    if(!palavrasSaidas.includes(palavra)){ // se dizes que é nova e não existe na lista de palavras que saíram
        score++;
        $('#scorePts').html(score);
        palavrasSaidas.push(palavra);  // adiciona à lista e deixa de ser nova
    }
    else{
        if(palavrasSaidas.includes(palavra)) {
            lives--;
            $('#livestext').html(lives);
            if(lives==0){
                return(score);
                $('#livestext').html(lives);
                await sleep(100);
                alert("PERDESTE");
                setTimeout(atualizainf(-1),3000);


            }
        }
    }

}
async function repetidaPalavrainf(palavra){
    if(palavrasSaidas.includes(palavra)){ // ele diz que é repetida e ela existe na lista de palavras saídas
        score++;
        $('#scorePts').html(score);

    }
    else{
        if(!palavrasSaidas.includes(palavra)) {
            lives--;
            $('#livestext').html(lives);
            if(lives==0){
                return(score);
                $('#livestext').html(lives);
                await sleep(100);
                alert("PERDESTE");
                setTimeout(atualizainf(-1),3000);


            }
        }

    }

}




                                            //    numeros    //


function swapnum(number){
    $('#bannernum').load('numeros/numeros'+number+'.php');
}

function atualizanum(fator) {

    stage+=fator;
    swapnum(stage);
}

function geraNumero(){
    var n="";
    n+=(Math.floor(Math.random()*10));
    return(n);
}



















                                            // duelo //


function swapduelo(number){
    $('#bannerdue').load('duelo/duelo'+number+'.php');
}

function atualizaduelo(fator) {

    stage+=fator;
    swapduelo(stage);
}






                                            // SCOREBOARD? //


