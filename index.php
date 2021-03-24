<?php include_once("includes/bodybase.inc.php");
top();
?>

    <script>
        var stage=1;
        $('document').ready(function (){
            swap(stage);
        });


    </script>


		<!-- Banner -->
			<section id="banner">


			</section>

		<!-- Two -->
			<section id="two" class="wrapper style2 special">
				<div class="container">
					<header class="major">
						<h2>Vermo!</h2>
						<p>Treine o seu cérebro.</p>
					</header>

				</div>
			</section>

    <div class="modal fade" id="perdemo" data-backdrop="static" data-keyboard="false" tabindex="-1"
         aria-labelledby="perdemoLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form class=contact-form method=post enctype=multipart/form-data>

                    <div class="modal-header">
                        <h5 class="modal-title" id="perdemoLabel">Perdeste</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <span id="perdemoMsg"></span>

                    </div>
                    <div class="modal-footer">
                        <div class="col-lg-7 meio">
                            <button type="button" class="btn btn-secondary pull-left" data-dismiss="modal">Fechar</button>
                        </div>
                        <div class="col-lg-5 meio">
                            <button onclick="DeleteTableUtilizador();" type="button" id="eliminar"
                                    class="btn btn-danger pull-right ">Eliminar
                            </button>
                        </div>
                    </div>
            </div>
            <input type="hidden" id="PerfilID">
            </form >
        </div>
    </div>

	<?php bottom(); ?>