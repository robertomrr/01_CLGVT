<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <title>Modal Example</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Adicione um link para o estilo CSS da modal -->
    <!-- <link rel="stylesheet" href="modal.css"> -->
<style>
    /* Estilo da modal */
    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0,0,0);
        background-color: rgba(0,0,0,0.4);
    }

    /* Estilo do conteúdo da modal */
    .modal-content {
        background-color: #fefefe;
        margin: 15% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
    }

    /* Estilo do botão de fechamento */
    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
}

</style>
</head>
<body>

    <!-- Botão para abrir a modal -->
    <button id="openModalBtn" 
            class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded inline-flex items-center">
        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
        <span>Abrir Modal Click Livre</span>
    </button>

    <a  href="" 
        class="ppl_model"
        data-bs-toggle="modal" 
        data-bs-target="#myModalTarget"
        ><button  class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded" type="submit">Exibir Click interno obrigatório</button></a>

    <a href="{{ route('dashboard'    ) }}">
        <button  class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Voltar para o dasboard</button>
    </a>
    <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->

    <!-- A modal -->
    <div id="myModal" class="modal">
        <!-- Conteúdo da modal -->
        <div class="modal-content">
            <span class="close" id="closeModalBtn">&times;</span>
            <p>Conteúdo da modal aqui.</p>
            <p>Click livre.</p>
        </div>
    </div>

    <!-- A modal target-->
    <div id="myModalTarget" class="modal fade">
        <!-- Conteúdo da modal target-->
        <div class="modal-content">
            <span class="close" id="closeModalBtnTarget">&times;</span>
            <p>Conteúdo da modal target aqui.</p>
            <p>Click interno obrigatório.</p>
        </div>
    </div>


<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX   Scripts XXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
<!-- Script JavaScript para manipular a modal -->
<script>
    // Obtém elementos DOM
    var openModalBtn = document.getElementById("openModalBtn");
    var closeModalBtn = document.getElementById("closeModalBtn");
    var modal = document.getElementById("myModal");

    // Adiciona um ouvinte de evento ao botão de abertura
    openModalBtn.addEventListener("click", function() {
        modal.style.display = "block";
    });

    // Adiciona um ouvinte de evento ao botão de fechamento
    closeModalBtn.addEventListener("click", function() {
        modal.style.display = "none";
    });

    // Adiciona um ouvinte de evento ao clicar fora da modal para fechar
    window.addEventListener("click", function(event) {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    });
</script>

<script>
    $(document).ready(function(){
        
        var modal = document.getElementById("myModalTarget");
        var closeModalBtnTarget = document.getElementById("closeModalBtnTarget");
        
        console.log('Documento is ready...');
        $(document).on('click','.ppl_model', function(e){
            e.preventDefault();
            console.log('Target');
            modal.style.display = "block";
        } )
        // Adiciona um ouvinte de evento ao botão de fechamento
        closeModalBtnTarget.addEventListener("click", function() {
        modal.style.display = "none";
    });
    });
</script>
</body>
</html>
