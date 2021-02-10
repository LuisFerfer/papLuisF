<?php
?>
<script>
    var posicao=1;
    function swap(number){
        if(number==1){
            $.ajax({
    url:"Treino.html",
    success: function (result) {
                $('#content').html(result)
}
})
}}
</script>
