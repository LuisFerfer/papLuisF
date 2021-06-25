var score=0;
var palavrasSaidas=[]; // array de palavras/strings
var lives=3;
var id;

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
    $('#banner').load('html'+number+'.php');
}

function atualiza(id) {

    stage+=id;
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
            $("#perdemoMsg").html("Ja tinha visto essa palavra! Terminou com: "  + (score) + ' pontos.');
            $("#perdemo").show();
            score=0;
            palavrasSaidas=[];
        }

    }

}


function repetidaPalavra(palavra){

    if(palavrasSaidas.includes(palavra)){ // ele diz que é repetida e ela existe na lista de palavras saídas
        score++;
        $('#scorePts').html(score);

    }

    else{
        if(!(palavrasSaidas.includes(palavra))){

                $("#perdemoMsg").html("Essa palavra nunca tinha aparecido! Terminou com: "  + (score) + ' pontos.');
            $("#perdemo").show();
            score=0;
            palavrasSaidas=[];
        }
    }
}

                                                //ingler treino

function atualizaingles(fator) {
    stage+=fator;
    swapingles(stage);

}

function swapingles(number){
    $('#banner').load('ingles'+number+'.php');
}



function geraPalavraingles(){
    var n;
    n=(Math.floor(Math.random()*nPalavras));
    return(sorteiaPalavraingles(n));

}

function sorteiaPalavraingles(){
    document.getElementById("palavra").innerHTML=geraPalavraingles();
}


function novaPalavraingles(palavra){
    if(!palavrasSaidas.includes(palavra)){ // se dizes que é nova e não existe na lista de palavras que saíram
        score++;
        $('#scorePts').html(score);
        palavrasSaidas.push(palavra);  // adiciona à lista e deixa de ser nova
    }
    else{
        if(palavrasSaidas.includes(palavra)){
            $("#perdemoMsg").html("You've seen that word before! You finished with a score of: "  + (score) + ".");
            $("#perdemoingles").show();
            score=0;
            palavrasSaidas=[];
        }

    }

}


function repetidaPalavraingles(palavra){

    if(palavrasSaidas.includes(palavra)){ // ele diz que é repetida e ela existe na lista de palavras saídas
        score++;
        $('#scorePts').html(score);

    }

    else{
        if(!(palavrasSaidas.includes(palavra))){

            $("#perdemoMsg").html("That word has never appeared! You finished with a score of: "  + (score) + ' .');
            $("#perdemoingles").show();
            score=0;
            palavrasSaidas=[];
        }
    }
}





















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
    $('#bannerinf').load('infinito'+number+'.php');
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
                $("#perdemoMsg").html("! Terminou com: "  + (score) + ' pontos.');
                $("#perdemo").show();
              $('#livestext').html(lives);


                


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

                $('#livestext').html(lives);
                await sleep(100);
                alert("PERDESTE");
              setTimeout(atualizainf(-1),3000);


            }
        }

    }

}

                                            //ingler infinito

function geraPalavrainfing(){
    var n;
    n=(Math.floor(Math.random()*nPalavras));
    return(sorteiaPalavrainfing(n));

}


function sorteiaPalavrainfing(){
    document.getElementById("palavra").innerHTML=geraPalavrainfing();
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

function swapinfing(number){
    $('#bannerinf').load('infinitoing'+number+'.php');
}

function atualizainfing(fator) {

    stage+=fator;
    swapinf(stage);
}


async function novaPalavrainfing(palavra){
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

                $('#livestext').html(lives);
                await sleep(100);
                alert("PERDESTE");
                setTimeout(atualizainfing(-1),3000);


            }
        }
    }

}
async function repetidaPalavrainfing(palavra){
    if(palavrasSaidas.includes(palavra)){ // ele diz que é repetida e ela existe na lista de palavras saídas
        score++;
        $('#scorePts').html(score);

    }
    else{
        if(!palavrasSaidas.includes(palavra)) {
            lives--;
            $('#livestext').html(lives);
            if(lives==0){

                $('#livestext').html(lives);
                await sleep(100);
                alert("PERDESTE");
                setTimeout(atualizainfing(-1),3000);


            }
        }

    }

}



                                            //    numeros    //


function swapnum(number){
    $('#bannernum').load('numeros'+number+'.php');
}

function getnum(id=0){

    $.ajax({
        url:"AJAX/AJAXnum3.php",
        type: "post",
        data: {
            id: id,
        },
        success:function (result){
            $('#tableContent').html(result);
        }
    })
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
    $('#bannerdue').load('duelo'+number+'.php');
}

function atualizaduelo(fator) {

    stage+=fator;
    swapduelo(stage);
}






                                            // SCOREBOARD? //

                                            // random numbers //
function numerorng() {
    $digits=3;
    rand(pow(10,$digits-1),pow(10,$digits)-1);
}
