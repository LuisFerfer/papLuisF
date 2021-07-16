<?php
include_once ("includes/body.inc.php");
include_once ("includes/config.inc.php");
top();


$sql2="select * from utilizadores where utilizadorId=".$_SESSION['id'];
$res2=mysqli_query($con,$sql2);
$dados=mysqli_fetch_array($res2);
if($dados['utilizadorTipo']=='admin'){


    ?>
    <header id="header">
        <h1><a href="index.php"><img src="images/vermopreto.png"></a></h1>
        <nav id="nav">
            <!--  <ul> <a href="perfil.php?id=<?php echo $_SESSION['id'] ?>"><img onclick="atualiza(0)" src="images/pt.png" style="  width:50px; height: 20px " >
                <a href="perfilingles.php?id=<?php echo $_SESSION['id'] ?>"><img onclick="atualizaingles(0)" src="images/eng.png" style="width: 50px; height: 20px">
-->         <a href="backoffice.php" style="color: black">Backoffice</a>
            <a href="index.php" style="color: black">FrontOffice</a>

            <!--<li><a href="elements.html">Elements</a></li>-->
            <!-- <?php if(isset($_SESSION['id'])){ ?>
                        <li><a href="perfil.php?id=<?php echo $_SESSION['id'] ?>" style="color: black"><?php echo $_SESSION['nome'] ?></a></li>
                        <?php
                $id = $_SESSION['id'];
                $sql = "select utilizadorTipo from utilizadores where utilizadorId = ".$id;
                $nibbas = mysqli_query($con, $sql);
                $dados = mysqli_fetch_array($nibbas);
                if ($dados['utilizadorTipo'] == "admin"){
                    ?>
                            <li><a href="backoffice.php" style="color: black">Backoffice</a></li>
                            <?php
                }
                ?>
                        <li><button class="button small" style="background-color: #aaaaaa; color: #8d93a0 ; " onclick="window.location.href='logout.php'">Sair</button> </li>
                    <?php } else{ ?>
                        <li><a  ><button class="button special" onclick="document.getElementById('id01').style.display='block'; document.getElementById('teste001').style.overflow='hidden'" style="background-color: #aaaaaa; width:auto;">Registar</button></a></li>
                        <li><a  ><button class="button special" onclick="document.getElementById('id02').style.display='block'; document.getElementById('teste001').style.overflow='hidden'" style="background-color: #aaaaaa; width:auto;">Entrar</button></a></li>
                        <?php
            }
            ?> -->
            </ul>
        </nav>
    </header>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <table class="table" style="color: #FFFFFF; font-weight: bold; font-size: 20px; text-align: center">
        <tr>
            <th>User Id</th>
            <th>User Nome</th>
            <th>User Estado</th>
            <th>User Tipo</th>
            <th>Opções</th>
        </tr>

        <?php
        $con=mysqli_connect(HOST, USER,PASSWORD,DATABASE);
        $sql="select * from utilizadores inner join perfis on utilizadorId = perfilId";
        $res=mysqli_query($con,$sql);
        while ($dados=mysqli_fetch_array($res)){
            ?>
            <tr style="color: black">
                <td><?php echo $dados["utilizadorId"]?></td>
                <td><?php echo $dados["perfilNome"]?></td>

                <form action="AJAX/AJAXUpdateState.php?id=<?php echo $dados["utilizadorId"]; ?>" method="post" >
                    <td><select name="utilizadorEstado" id="select1" onchange="alterarTexto(<?php echo $dados["utilizadorEstado"]?>)">
                            <option><?php echo $dados["utilizadorEstado"]?></option>

                            <option>
                                <?php
                                if($dados["utilizadorEstado"] == 'ativo' ){
                                    echo "inativo";
                                }
                                elseif ($dados["utilizadorEstado"] == 'inativo' ){
                                    echo "ativo";

                                }else{
                                    echo "ativo";
                                }
                                ?></option>



                        </select></td>


                    <td><select name="utilizadorTipo" id="select2">
                            <option value="<?php echo $dados["utilizadorTipo"]?>"><?php echo $dados["utilizadorTipo"]?></option>
                            <option>
                                <?php
                                if($dados["utilizadorTipo"] == 'utilizador' ){
                                    echo "admin";
                                }elseif($dados["utilizadorTipo"] == 'admin' ){
                                    echo "utilizador";
                                }else{
                                    echo "utilizador";
                                }

                                ?>
                            </option>


                        </select><label style="color:#FFF;" id="textChange2"></label></td>
                    <td><button type="submit" class="btn btn-primary">Update</button></td>
                </form>
            </tr>
            <?php
        }
        ?>

    </table>


    <script>
        function alterarTexto(value){
            value = this.value
            alert(  value  );
            if(document.getElementById("#select1").valueOf(this) != value){
                document.getElementById("#textChange2").innerText = "Altera��es!";
            }
        }

    </script>


    <?php
}else{
    header("location: backoffice.php");
}


bottom();
?>
