<main>
    <section class="topoPadrao">
        <div class="container topo-cadastros">
            <h1 class="titulo3">Cadastro de vendedores</h1>
            <div class="btnsCadastro">
                <a class="btnCadastro btn btn-danger" href="lista-vendedores"><i class="fas fa-trash"></i>&nbsp;&nbsp;Excluir</a>
                <a class="btnCadastro btn btn-success" href="lista-vendedores"><i class="far fa-eye"></i>&nbsp;&nbsp;Vendedor Ativo</a>
                <a class="btnCadastro btn btn-primary" href="lista-vendedores"><i class="fas fa-list"></i>&nbsp;&nbsp;Ver todos</a>
            </div>
        </div>
    </section>

    <section class="cadastro">
        <div class="container">
            <form action="" class="formCadastro">
                <div class="secaoForm">
                    <h2 class="secaoForm__titulo">Seus dados</h2>
                    <label class="formCadastro-item">
                        <span class="formCadastro-item__label">Seu nome</span>
                        <input type="text" name="nome_responsavel" class="formCadastro-item__campo" required>
                    </label>
                    <label class="formCadastro-item">
                        <span class="formCadastro-item__label">Seu e-mail (será o login)</span>
                        <input type="email" name="email" class="formCadastro-item__campo" required>
                    </label>
                    <label class="formCadastro-item">
                        <span class="formCadastro-item__label">Seu CPF</span>
                        <input type="text" name="cpf" class="formCadastro-item__campo" required>
                    </label>
                    <label class="formCadastro-item">
                        <span class="formCadastro-item__label">Seu telefone</span>
                        <input type="text" name="telefone" class="formCadastro-item__campo" required>
                    </label>
                </div>

                <div class="secaoForm">
                    <h2 class="secaoForm__titulo">Dados da loja</h2>
                    <label class="formCadastro-item">
                        <span class="formCadastro-item__label">Nome fantasia</span>
                        <input type="text" name="nome_fantasia" class="formCadastro-item__campo" required>
                    </label>
                    <label class="formCadastro-item">
                        <span class="formCadastro-item__label">Razão social</span>
                        <input type="text" name="razao_social" class="formCadastro-item__campo" required>
                    </label>
                    <label class="formCadastro-item">
                        <span class="formCadastro-item__label">E-mail público</span>
                        <input type="email" name="email_loja" class="formCadastro-item__campo" required>
                    </label>
                    <label class="formCadastro-item">
                        <span class="formCadastro-item__label">CNPJ da loja</span>
                        <input type="text" name="cnpj" class="formCadastro-item__campo" required>
                    </label>
                    <label class="formCadastro-item">
                        <span class="formCadastro-item__label">Seu telefone</span>
                        <input type="text" name="telefone" class="formCadastro-item__campo" required>
                    </label>

                    <label class="formCadastro-item">
                        <span class="formCadastro-item__label">CEP</span>
                        <input type="text" name="cep" class="formCadastro-item__campo" required>
                    </label>

                    <label class="formCadastro-item">
                        <span class="formCadastro-item__label">Estado</span>
                        <select name="estado" class="formCadastro-item__select">
                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="DF">Distrito Federal</option>
                            <option value="ES">Espírito Santo</option>
                            <option value="GO">Goiás</option>
                            <option value="MA">Maranhão</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="PA">Pará</option>
                            <option value="PB">Paraíba</option>
                            <option value="PR">Paraná</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="RO">Rondônia</option>
                            <option value="RR">Roraima</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SP">São Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
                            <option value="EX">Estrangeiro</option>
                        </select>
                    </label>
                    
                    <label class="formCadastro-item">
                        <span class="formCadastro-item__label">Cidade</span>
                        <input type="text" name="cidade" class="formCadastro-item__campo" required>
                    </label>

                    <label class="formCadastro-item">
                        <span class="formCadastro-item__label">Rua</span>
                        <input type="text" name="rua" class="formCadastro-item__campo" required>
                    </label>

                    <label class="formCadastro-item">
                        <span class="formCadastro-item__label">Número / complemento</span>
                        <input type="text" name="numero_complemento" class="formCadastro-item__campo" required>
                    </label>


                    <div class="formCadastro__btn-wrapper">
                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i>&nbsp;&nbsp;Excluir</button>
                        <a href="lista-vendedores" class="btn btn-primary"><i class="fas fa-list"></i>&nbsp;&nbsp;Voltar</a>
                        <button type="submit" class="btn btn-success"><i class="fas fa-check"></i>&nbsp;&nbsp;Salvar</button>
                    </div>

                </div>
            </form>
        </div>
    </section>
</main>