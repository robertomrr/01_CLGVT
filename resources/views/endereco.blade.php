<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
        <title>ViaCEP Webservice</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Adicionando Javascript -->
        <script>
            function limpa_formulário_cep() {
                    //Limpa valores do formulário de cep.
                    document.getElementById('rua').value=("");
                    document.getElementById('bairro').value=("");
                    document.getElementById('cidade').value=("");
                    document.getElementById('uf').value=("");
                    document.getElementById('ibge').value=("");
            }

            function meu_callback(conteudo) {
                if (!("erro" in conteudo)) {
                    //Atualiza os campos com os valores.
                    document.getElementById('rua').value=(conteudo.logradouro);
                    document.getElementById('bairro').value=(conteudo.bairro);
                    document.getElementById('cidade').value=(conteudo.localidade);
                    document.getElementById('uf').value=(conteudo.uf);
                    document.getElementById('ibge').value=(conteudo.ibge);
                } //end if.
                else {
                    //CEP não Encontrado.
                    limpa_formulário_cep();
                    alert("CEP não encontrado.");
                }
            }
                
            function pesquisacep(valor) {

                //Nova variável "cep" somente com dígitos.
                var cep = valor.replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        document.getElementById('rua').value="...";
                        document.getElementById('bairro').value="...";
                        document.getElementById('cidade').value="...";
                        document.getElementById('uf').value="...";
                        document.getElementById('ibge').value="...";

                        //Cria um elemento javascript.
                        var script = document.createElement('script');

                        //Sincroniza com o callback.
                        script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                        //Insere script no documento e carrega o conteúdo.
                        document.body.appendChild(script);

                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            };
        </script>
    </head>

    <body>
        <h1 class="text-center text-2xl font-bold">Exemplo de Busca de Endereço Através do CEP</h1>
        <!-- Pin to top right corner -->
        <div class="container mx-auto relative h-16 w-11/12 ... bg-blue-300">
            <div class="relative top-0 right-0 p-3">
                <a href="{{ route('dashboard') }}"><button  class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Voltar para o dasboard</button></a>  
            </div>
        </div>

        <div class="container mx-auto">
            <!-- Inicio do formulario -->
            <form method="get" action=".">
                <label>Cep:
                <input name="cep" type="text" id="cep" value="" size="10" maxlength="9"
                    onblur="pesquisacep(this.value);" /></label><br />
                <label>Rua:
                <input name="rua" type="text" id="rua" size="60" /></label><br />
                <label>Bairro:
                <input name="bairro" type="text" id="bairro" size="40" /></label><br />
                <label>Cidade:
                <input name="cidade" type="text" id="cidade" size="40" /></label><br />
                <label>Estado:
                <input name="uf" type="text" id="uf" size="2" /></label><br />
                <label>IBGE:
                <input name="ibge" type="text" id="ibge" size="8" /></label><br />
            </form>
        </div>
    </body>

</html>