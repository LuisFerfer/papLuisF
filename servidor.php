<?php
$ip='127.0.0.1';
$port=5006;
set_time_limit(0);


if(($sock=socket_create(AF_INET,SOCK_STREAM,SOL_TCP))<0){
echo "Nao foi possivel conectar!";
exit(1);

}else{
    echo "Conexуo efetuada";
}


if(($ret=socket_bind($sock,$ip,$port))<0){
    echo "Nao foi possivel conectar!".socket_strerror($ret);
    exit(1);
}else{
echo "Conexуo efetuada";
}


 
if(($ret=socket_listen($sock,4))<0){
    echo"Nao foi possivel conectar".socket_strerror($ret);
    exit(1);
}else{
    echo "Conexуo efetuada";
}

$count=0;

do{
    if(($msgsock=socket_accept($sock))<0){
        echo "Nao foi possivel conectar!".socket_strerror($msgsock);
        break;
    }else{
        $msg="Ligaчуo ao cliente Efetuada";
        socket_write($msgsock,$msg, strlen($msg));


        echo "Leitura da ".++$count.".Њ mensagem enviada pelo cliente.";
        $buf=socket_read($msgsock,8192);


        $talkback = "conteudo da mensagem recebido: $buf";
        echo $talkback;


        if($count >= 5){
            echo "Limite de atendimentos foi atingido";
            break;
        }
    }

    socket_close($msgsock);

}while(true);


echo "A encerrar o Socket";
socket_close($sock);
echo "OK";
?>