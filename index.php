<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULÁRIO DE RESERVA HOTEL</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <!--div - form-corp-->
    <div class="corp">
        <h2 id="h2"><i class="fa fa-calendar"></i> Formulário de Reserva Hotel</h2>

        <!--form-->
        <form action="./sendEmail.php" method="post">
            <!--chegada-saida-->
            <div class="form-corp-date">
                        <div class="corp-form-date">
                            <label for="chegada">Chegada</label>
                                <input type="date" name="data-chegada" maxlength="50" required>
                        </div>

                    <div class="center-corp-form-date"></div>

                        <div class="corp-form-date">
                            <label for="saida">Saída</label>
                                <input type="date" name="data-saida" maxlength="50" required>
                        </div>
            </div>
            <!--nome-sobrenome-->
            <div class="form-corp-names">
                        <div class="corp-form-names">
                            <label for="nome">Nome</label>
                                <i class="fa fa-user"></i>
                                    <input type="text" name="nome" placeholder="Nome" maxlength="50" required>
                        </div>
                
                    <div class="center-form-corp-names"></div>
                    
                        <div class="corp-form-names">
                            <label for="sobrenome">Sobrenome</label>
                                <i class="fa fa-users"></i>
                                    <input type="text" name="sobrenome" placeholder="Sobrenome" maxlength="50" required>
                        </div>
               
            </div>
                    <!--email-->
                    <div class="email">
                        <label for="email">Email</label>
                            <i class="fa fa-envelope"></i>
                                <input type="email" name="email" placeholder="Email" maxlength="50" required>
                    </div>
                    <!--fone-->
                    <div class="fone">
                        <label for="fone">Telefone</label>
                            <i class="fa fa-phone"></i>
                                <input type="fone" name="fone" placeholder="Telefone" maxlength="50" required>
                    </div>
                
                <!--qtd-->
            <div class="form-corp-pessoas">
                    <div class="qtd-pessoas">
                        <label for="adultos">Adultos</label>
                            <select id="adultos" name="adultos">
                                <option selected="adultos" value="">Selecione</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                            </select>
                    </div>
                <div class="qtd-center"></div>
                    <div class="qtd-pessoas">
                        <!--qtd-->
                        <label for="criancas">Crianças</label>
                            <select id="criancas" name="criancas">
                                <option selected="criancas" value="">Selecione</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                    </div>
            </div>
            <!--preferencias-->
            <div class="form-corp">
                    <div class="preferencia">
                        <label for="preferencia">Preferências</label>
                            <select id="preferencia" name="preferencia">
                                <option selected="preferencia" value="">Selecione</option>
                                <option value="Frente para o mar">Frente para o mar</option>
                                <option value="Varanda">Varanda</option>
                            </select>
                    </div>
            </div>
                    <!--btn-->
                    <div id="btn">
                        <button type="submit" name="btn-submit" id="btn-submit">Reservar</button>
                    </div>
        </form>
    </div>
</body>
</html>