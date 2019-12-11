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
                            <option value="">Acessórios de Informática</option>
                            <option value="">Agro, Indústria e Comércio</option>
                            <option value="">Alimentos e Bebidas</option>
                            <option value="">Ar condicionado e Aquecedores</option>
                            <option value="">Artesanato</option>
                            <option value="">Artigos de Festas</option>
                            <option value="">Áudio</option>
                            <option value="">Automotivo </option>
                            <option value="">Bebês</option>
                            <option value="">Beleza e Perfumaria</option>
                            <option value="">Brinquedos </option>
                            <option value="">Cama, Mesa e Banho </option>
                            <option value="">Casa e Construção</option>
                            <option value="">Celulares e Smartphones</option>
                            <option value="">Câmeras Digitais e Filmadoras</option>
                            <option value="">Decoração</option>
                            <option value="">Eletrodomésticos </option>
                            <option value="">Eletroportáteis</option>
                            <option value="">Enfeites de Natal</option>
                            <option value="">Esporte e Lazer</option>
                            <option value="">Filmes e Séries</option>
                            <option value="">Games</option>
                            <option value="">Gift Card</option>
                            <option value="">Informática</option>
                            <option value="">Instrumentos Musicais</option>
                            <option value="">Livros </option>
                            <option value="">Livros Importados</option>
                            <option value="">Malas, Mochilas e Acessórios</option>
                            <option value="">Moda </option>
                            <option value="">Móveis </option>
                            <option value="">Música </option>
                            <option value="">PC Gamer </option>
                            <option value="">Papelaria</option>
                            <option value="">Pet Shop </option>
                            <option value="">Páscoa </option>
                            <option value="">Relógios </option>
                            <option value="">Saúde</option>
                            <option value="">Sinalização e Segurança</option>
                            <option value="">Suplementos e Vitaminas</option>
                            <option value="">Telefonia Fixa </option>
                            <option value="">Tv e Home Theater</option>
                            <option value="">Utilidades Domésticas</option>
                            <option value="">Vestuário Esportivo</option>
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
                    function readURL(input) {
                        if (input.files && input.files[0]) {
                            var reader = new FileReader();
                        
                            reader.onload = function (e) {
                                $('#blah').attr('src', e.target.result);
                            }
                        
                            reader.readAsDataURL(input.files[0]);
                        }
                    }

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
                                    
                                    $($.parseHTML('<div class="formCadastro-imagem">'))
                                        .append($ ($.parseHTML('<img >') ).attr('src', event.target.result))
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
                        <input type="file" name="fotos" multiple onchange="previewFiles(this)">
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
