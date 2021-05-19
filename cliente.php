<?php
$ip='127.0.0.1';
$port=5006;

error_reporting(E_ALL);

echo "Criação do Socket para a comunicação";

$socket=socket_create(AF_INET,SOCK_STREAM,SOL_TCP);
if($socket < 0){
echo "Nao foi possivel conectar! Motivo:".socket_strerror($socket);
}else{
    echo "OK";
}

echo "Estebelecendo ligação com '$ip' porta '$port' <br />...<br/>";
$result = socket_connect($socket, $ip, $port);
if($result < 0) {
    echo "A função socket_connect() falhou! Motivo: ($result)" .socket_strerror($result)."<br/> ";
}else{
    echo "OK<br/>";
}

$in = "Oi servidor! Como tens passado?";
$out = '';

if(!socket_write($socket, $in, strlen($in))) {
    echo "A função socket_write() falhou! Motivo: ".socket_strerror($socket). "<br />";
} else{
    echo "Mensagem enviada ao servidor com sucesso!<br />";
    echo "Informação enviada: <font color='red'>" .$in. "</font><br/>";
}

while($out = socket_read($socket, 8192)) {
    echo "Mensagem de retorno do servidor recebida com sucesso! <br/>";
    echo "Informação recebida: <font color='red'>" .$out. "</font><br />";
}




echo "A encerrar o Socket";
socket_close($socket);
echo "OK";
?>