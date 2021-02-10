
function swap(number){
    $('#banner').load('treino/html'+number+'.html');
}

function atualiza(fator) {

    stage+=fator;
    swap(stage);

}
