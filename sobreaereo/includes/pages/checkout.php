<main>
    <section class="topoPadrao">
        <div class="container topo-cadastros">
            <h1 class="titulo3">Checkout</h1>
        </div>
    </section>

    <section class="cadastro">
        <div class="container">
            <form action="" class="formCadastro">
                <div class="secaoForm">
                    <h2 class="secaoForm__titulo">Seus dados</h2>
                    <label class="formCadastro-item">
                        <span class="formCadastro-item__label">Seu nome</span>
                        <input type="text" name="nome" class="formCadastro-item__campo" required>
                    </label>
                    <label class="formCadastro-item">
                        <span class="formCadastro-item__label">Seu e-mail</span>
                        <input type="email" name="email" class="formCadastro-item__campo" required>
                    </label>
                    <label class="formCadastro-item">
                        <span class="formCadastro-item__label">Seu telefone</span>
                        <input type="text" name="telefone" class="formCadastro-item__campo" required>
                    </label>
                    <label class="formCadastro-item">
                        <span class="formCadastro-item__label">Sua senha</span>
                        <input type="password" name="senha" class="formCadastro-item__campo" required>
                    </label>
                </div>

                <div class="secaoForm">
                    <h2 class="secaoForm__titulo">Dados de entrega</h2>
                    
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
                        <span class="formCadastro-item__label">Número</span>
                        <input type="text" name="numero" class="formCadastro-item__campo" required>
                    </label>
                    <label class="formCadastro-item">
                        <span class="formCadastro-item__label">Complemento</span>
                        <input type="text" name="complemento" class="formCadastro-item__campo">
                    </label>


                    

                </div>

                <div class="secaoForm">
                    <h2 class="secaoForm__titulo">Dados de pagamento</h2>

                    <label class="formCadastro-item">
                        <span class="formCadastro-item__label">Nome do titular</span>
                        <input type="text" name="cc_nome" class="formCadastro-item__campo">
                    </label>
                    <label class="formCadastro-item">
                        <span class="formCadastro-item__label">Número</span>
                        <input type="text" name="cc_numero" class="formCadastro-item__campo">
                    </label>
                    <label class="formCadastro-item">
                        <span class="formCadastro-item__label">Validade</span>
                        <input type="text" name="cc_validade" class="formCadastro-item__campo">
                    </label>
                    <label class="formCadastro-item">
                        <span class="formCadastro-item__label">CVV</span>
                        <input type="number" name="cc_cvv" class="formCadastro-item__campo">
                    </label>

                    
                </div>

                <div class="secaoForm">
                    <div class="formCadastro__btn-wrapper">
                        <button type="submit" class="btn btn-success"><i class="fas fa-check"></i>&nbsp;&nbsp;Finalizar</button>
                    </div>

                </div>
            </form>
        </div>
    </section>
</main>

<script>
    $(function(){
        
    })

</script>