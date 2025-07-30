<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/createStyle.css">
    <link rel="stylesheet" href="../css/menuStyle.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Relatório de presença - EBD</title>
</head>
<body>
    <!-- MENU -->
    <div id="menu">
        <div class="boxesMenu" id="boxLogo">
            <p>EBD</p>
        </div>
        <div id="boxMenuLinks">
            <a href="createReports.php" class="menuLinks">Criar</a>
            <a href="accessReports.php" class="menuLinks">Consultar</a>
            <a href="students.php" class="menuLinks">Alunos</a>
        </div>
    </div>
    <!-- Fim do MENU -->

    <div id="main">
        <form action="" method="post">
            <h1>Criar Relatórios</h1>
            <div class="subMain" id="selectTri-group">
                <!-- Estudar php para botar o id do trimestre em value e o trimestre respectivo no texto para o usuário -->
                <span>
                    <label for="id-select-trimester">Trimestre</label>
                    <select name="select-trimester" id="id-select-trimester">
                        <option value="*ID DO TRIMESTRE*">2025/1</option>
                    </select>
                </span>
                <span>
                    <label for="id-select-group">Turma</label>
                    <select name="select-group" id="id-select-group">
                        <option value="crianças">Crianças</option>
                        <option value="jovens">Jovens</option>
                        <option value="adultos">Adultos</option>
                    </select>
                </span>
                <!-- Fazer a lógica do botão para aparecer os alunos -->
                <button id="selectTri-group-confirm">Confirmar</button>
            </div>
            <div class="subMain">
                <div id="boxStudents">
                    <!-- Definir para a tabela só aparecer quando tiver algum aluno cadastrado no trimestre e turma + mensagem de quando nao houver aluno ou não tiver algum trimestre/turma solicitado-->
                    <table>
                        <thead>
                            <tr>
                                <!-- Definir um número para cada um e organizar alfabeticamente -->
                                <th>N°</th>
                                <th>Nome</th>
                                <th>Presença</th>
                                <th>Matriculado</th>
                                <th>Bíblias</th>
                                <th>Revistas</th>
                                <th>Pontuação</th>
                            </tr>
                        </thead>
                        <!-- Definir um loop para criar um tr para cada aluno -->
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Elias Alves Lima</td>
                                <td><input type="checkbox" name="nPresencaCheckbox" id="idPresencaCheckbox" checked></td>
                                <td>Ícone Certo/Errado</td>
                                <td><input type="checkbox" name="nBibliasCheckbox" id="idBibliasCheckbox"></td>
                                <td><input type="checkbox" name="nRevistasCheckbox" id="idRevistasCheckbox"></td>
                                <td>+7</td>
                            </tr>
                        </tbody>

                    </table>
                </div>
            </div>
            <div class="subMain">
                <div id="boxClassData">
                    <div class="classDataChildren" id="generalData">
                        <span>
                            <label for="idMatriculados">Matriculados</label>
                            <input type="number" name="nMatriculados" id="idMatriculados" readonly>
                            
                        </span>
                        <span>
                            <label for="idBiblia">Bíblias</label>
                            <input type="number" name="nBiblia" id="idBiblia" readonly>
                        </span>
                        <span>
                            <label for="idPresencaTotal">Presença Total</label>
                            <input type="number" name="nPresencaTotal" id="idPresencaTotal" readonly>
                        </span>
                        <span>
                            <label for="idVisitantes">Visitantes</label>
                            <input type="number" name="nVisitantes" id="idVisistantes" readonly>
                        </span>
                        <span>
                            <label for="idRevistas">Revistas</label>
                            <input type="number" name="nRevistas" id="idRevistas" readonly>
                        </span>
                        <span>
                            <label for="idFaltas">Faltas</label>
                            <input type="number" name="nFaltas" id="idFaltas" readonly>
                        </span>
                        <span>
                            <label for="idLicao">Lição</label>
                            <input type="number" name="nLicao" id="idLicao" min="1" max="12" required>
                        </span>
                        <span>
                            <label for="idOferta">Oferta</label>
                            <input type="number" name="nOferta" id="idOferta" min="0" required pattern="[0-9]{2}.[0-9]{2}">
                        </span>
                        <span>
                            <label for="idData">Data</label>
                            <input type="date" name="nData" id="idData" required>
                            
                        </span>
                    </div>
                    <div class="classDataChildren" id="addStudent-image">
                        <button>Adicionar Vis/Mat</button>
                        <span>
                            <label for="idAddImages">Adicionar imagens:</label>
                            <input type="file" name="nAddImages" id="idAddImages" value="Adicionar imagens">
                        </span>
                    </div>
                    <div class="classDataChildren" id="saveResetFormulary">
                        <input type="submit" value="Salvar">
                        <input type="reset" value="Resetar">
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>