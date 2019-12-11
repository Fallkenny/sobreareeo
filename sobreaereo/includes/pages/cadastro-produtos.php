<main>
    
    <section class="topoPadrao">
        <div class="container topo-cadastros">
            <h1 class="titulo3">Cadastro de Produtos</h1>
            <div class="btnsCadastro">
                <a class="btnCadastro btn btn-primary" href="lista-produtos"><i class="fas fa-list"></i>&nbsp;&nbsp;Ver todos</a>
            </div>
        </div>
    </section>

    <section class="cadastro">
        <div class="container">
            <form action="classes/actionCadastraProduto.php" class="formCadastro" enctype="multipart/form-data" method="POST">
                <div class="secaoForm">
                    <h2 class="secaoForm__titulo">Informações do Produto</h2>
                <!--
                    <div class="formCadastro-imagem">                        
                        <label class="formCadastro-imagem-box">
                            <input type="file" id="file" name="img_produto" class="formCadastro-imagem-upload" required>                            
                        </label>
                    </div> 
                -->

                    <label class="formCadastro-item">
                        <span class="formCadastro-item__label">Descrição</span>
                        <input type="text" name="descricao-produto" class="formCadastro-item__campo" required>
                    </label>                    

                    <label class="formCadastro-item">
                        <span class="formCadastro-item__label">Categoria</span>
                        <select name="categoria-produto" class="formCadastro-item__select">
                            <option value="Acessórios de Informática">Acessórios de Informática</option>
                            <option value="Agro, Indústria e Comércio">Agro, Indústria e Comércio</option>
                            <option value="Alimentos e Bebidas">Alimentos e Bebidas</option>
                            <option value="Ar condicionado e Aquecedores">Ar condicionado e Aquecedores</option>
                            <option value="Artesanato">Artesanato</option>
                            <option value="Artigos de Festas">Artigos de Festas</option>
                            <option value="Áudio">Áudio</option>
                            <option value="Automotivo ">Automotivo </option>
                            <option value="Bebês">Bebês</option>
                            <option value="Beleza e Perfumaria">Beleza e Perfumaria</option>
                            <option value="Brinquedos">Brinquedos </option>
                            <option value="Cama, Mesa e Banho ">Cama, Mesa e Banho </option>
                            <option value="Casa e Construção">Casa e Construção</option>
                            <option value="Celulares e Smartphones">Celulares e Smartphones</option>
                            <option value="Câmeras Digitais e Filmadoras">Câmeras Digitais e Filmadoras</option>
                            <option value="Decoração">Decoração</option>
                            <option value="Eletrodomésticos">Eletrodomésticos </option>
                            <option value="Eletroportáteis">Eletroportáteis</option>
                            <option value="Enfeites de Natal">Enfeites de Natal</option>
                            <option value="Esporte e Lazer">Esporte e Lazer</option>
                            <option value="Filmes e Séries">Filmes e Séries</option>
                            <option value="Games">Games</option>
                            <option value="Gift Card">Gift Card</option>
                            <option value="Informática">Informática</option>
                            <option value="Instrumentos Musicais">Instrumentos Musicais</option>
                            <option value="Livros ">Livros </option>
                            <option value="Livros Importados">Livros Importados</option>
                            <option value="Malas, Mochilas e Acessórios">Malas, Mochilas e Acessórios</option>
                            <option value="Moda">Moda </option>
                            <option value="Móveis">Móveis </option>
                            <option value="Música">Música </option>
                            <option value="PC Gamer">PC Gamer </option>
                            <option value="Papelaria">Papelaria</option>
                            <option value="Pet Shop">Pet Shop </option>
                            <option value="Páscoa">Páscoa </option>
                            <option value="Relógios">Relógios </option>
                            <option value="Saúde">Saúde</option>
                            <option value="Sinalização e Segurança">Sinalização e Segurança</option>
                            <option value="Suplementos e Vitaminas">Suplementos e Vitaminas</option>
                            <option value="Telefonia Fixa ">Telefonia Fixa </option>
                            <option value="Tv e Home Theater">Tv e Home Theater</option>
                            <option value="Utilidades Domésticas">Utilidades Domésticas</option>
                            <option value="Vestuário Esportivo">Vestuário Esportivo</option>
                        </select>
                    </label>
                    <label class="formCadastro-item">
                        <span class="formCadastro-item__label">Marca</span>
                        <input type="text" name="marca" class="formCadastro-item__campo" required>
                    </label>
                    <label class="formCadastro-item">
                        <span class="formCadastro-item__label">Preço</span>
                        <input type="number" min="0.00" max="10000.00" step="0.01" name="preco" class="formCadastro-item__campo" required>
                    </label>
                    <label class="formCadastro-item-titulo">
                        <span class="formCadastro-item__label">Detalhamento do produto</span>
                        <textarea type="text" name="detalhes" placeholder="Descreva o produto" class="formCadastro-item__campo multiline" required></textarea>                        
                    </label>

                    <!-- <div class="formCadastro-imagem">                        
                        <label class="formCadastro-imagem-box">
                            <input type="file" id="file" name="img_produto" class="formCadastro-imagem-upload" required>                            
                        </label>
                    </div> -->

                </div>


                <script type="text/javascript">

                    function previewFiles(input) 
	                {
                    
                        if (input.files) {
                            var filesAmount = input.files.length;
                        
                            var div = document.getElementById('previewGallery');
                                    while(div.firstChild)
                                    {
                                        div.removeChild(div.firstChild);
                                    }

                            for (i = 0; i < filesAmount; i++) {
                                var reader = new FileReader();
                            
                                reader.onload = function(event) 
                                {
                                    
                                    $($.parseHTML('<div class="formCadastro-imagem formCadastro-imagem-box">'))
                                        .append($ ($.parseHTML('<img>') ).attr('src', event.target.result))
                                    .appendTo('#previewGallery');
                                }
                            
                                reader.readAsDataURL(input.files[i]);
                            }
                        }
                    
                    }
                </script>


                <div class="secaoForm" id="fotos">
                    <h2 class="secaoForm__titulo">Fotos do Produto</h2>
                    <label class="formCadastro-pic">
                        <input type="file" name="fotos[]" multiple onchange="previewFiles(this)">
                    </label>
                </div>

                <div id="previewGallery"></div>

                <div class="secaoForm">
                    <div class="formCadastro__btn-wrapper">
                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i>&nbsp;&nbsp;Excluir</button>
                        <a href="lista-produtos" class="btn btn-primary"><i class="fas fa-list"></i>&nbsp;&nbsp;Voltar</a>
                        <button type="submit" class="btn btn-success"><i class="fas fa-check"></i>&nbsp;&nbsp;Salvar</button>
                    </div>

                </div>
            </form>
        </div>
    </section>
</main>
