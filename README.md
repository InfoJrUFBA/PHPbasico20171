# PHPbasico20171
Repositório para capacitação de PHP básico para PlugInfo 20171

Para os primeiros 3 desafios:
Este repositório é para uma capacitação de php básico e estrutura mvc, portanto as models não se comunicam com banco de dados algum. Por isso elas têm geradores de atributos aleatórios, para simular comunicação a um banco de dados qualquer. Não abra a model, ela não é uma verdadeira model, e se fosse, conteria cenas dos próximos capítulos do PlugInfo. Nas controllers tem métodos que recebem informações das models, e é ali que você irá resolver os primeiros 3 desafios. Pra saber o que cada coisa na controller faz, basta ler os comentários perto da linha.

Para os outros 8 desafios:
Se o enunciado não diz que funções prontas são proibidas, pode usá-las! Uma das partes mais importantes de desenvolvimento é saber navegar a documentação e conhecer as funções que ela oferece. Consulta à internet é liberadíssima.

As atividades NÃO foram ordenadas por dificuldade. Então se uma atividade parecer muito difícil, pode pular e tentar outra primeiro. Mas atenção, algumas atividades permitem que você use funções feitas em outras atividades. Se atente ao tipo de entrada, se é natural, inteiro, string, etc. Se uma questão recebe inteiros e seu método só funciona para números positivos, seu método está apenas "parcialmente" correto.

Suas respostas serão avaliadas pricipalmente com base em:
1. Lógica (se o método funciona corretamente, e se ele não tem coisas desnecessárias)
2. Legibilidade (se no evento de você ser atropelado por um buzu na saída da capacitação qualquer outro trainee conseguiria entender seu código)
3. Complexidade (se seu código tem a melhor complexidade, eficiência e tempo de execução)

Não se preocupe se não conseguir resolver todos os desafios. Alguns deles são difíceis. Tente todos, e caso tenha alguma dúvida não hesite em perguntar. Caso consiga uma resposta parcial, ou só consiga codar até certo ponto, mostre o código parcial mesmo. Comentar seu código pra explicar ele pro membro que vai corrigir não só é permitido, é recomendado para essa atividade.

PROCURAR AJUDA NO GOOGLE NÃO SÓ É PERMITIDO, É RECOMENDADO! BOA SORTE!




 - A primeira atividade é alterar o método UserController::printUserList() pra que ele imprima com os nomes em ordem alfabética.




 - A segunda atividade é alterar o método BusinessController::printBusinessList() pra que ele imprima também  nome de quem é o dono daquela empresa. O trainee deve usar o id no atributo owners_id.




 - A terceira atividade é usar os métodos UserController::getAllUsers() e BusinessController::getAllBusinesses() pra criar um novo método que organize o array de usuários retornado por getAllUsers() em ordem de empresa, no formato:

NomeDaEmpresa1
Empregado1
Empregado2

NomeDaEmpresa2
Empregado1
Empregado2
Empregado3

etc...




 - A quarta atividade é criar um método que recebe dois naturais, $a e $b, e retorna $a+$b. Mas usando APENAS loops, ifs, incremento e decremento. Ou seja, nada de '+', '-', '*', '/', etc. Nem funções prontas!




 - A quinta atividade é criar um método que recebe dois naturais, $a e $b, e retorna $a*$b. Mas usando APENAS loops, ifs, incremento e decremento. Ou seja, nada de '+', '-', '*', '/', etc. Nem funções prontas! Mas pode usar o método de soma feito na quarta atividade.




  - A sexta atividade é criar um método que recebe dois naturais, $a e $b, e retorna pow($a, $b). Mas usando APENAS loops, ifs, incremento e decremento. Ou seja, nada de '+', '-', '*', '/', etc. Nem funções prontas! Mas pode usar o método de soma feito na quarta atividade e o de multiplicação feito na quinta atividade.




  - A sétima atividade é criar um método, que recebe uma string $s e retorna strtolower($s), mas sem usar funções prontas, com a excessão de chr(), ord() e strlen()! Dica: Pesuise tabela ASCII, e sua relação com as funções chr() e ord().




   - A oitava atividade é criar um método que recebe um número natural e retorna seu equivalente em binário. Não pode usar funções prontas, com a excessão dos métodos criados em atividades anteriores.




  - A nona atividade é criar um método que recebe quatro inteiros $x1, $y1, $x2, $y2, coordenadas cartesianas de 2 pontos. Seu método deve retornar a distância entre os 2 pontos.




 - A décima atividade é criar um método que recebe duas strings $agulha e $palheiro. O método deve retornar true se $agulha é uma substring de $palheiro, ou false se não. Esse método deve ser case sensitive. O uso de funções prontas é proibido, com a excessão de strlen().




  - A décima primeira atividade é criar um método que tem a mesma responsabilidade que a décima atividade, mas dessa vez é case insensitive. O uso de funções prontas é proibido, com a excessão de chr(), ord(), strlen(), e outras atividades. Dica: Pesuise tabela ASCII, e sua relação com as funções chr() e ord().