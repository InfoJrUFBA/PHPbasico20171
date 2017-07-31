# PHPbasico20171
Repositório para capacitação de PHP básico para PlugInfo 20171


Este repositório é para uma capacitação de php básico e estrutura mvc, portanto as models não se comunicam com banco de dados algum. Por isso elas têm geradores de atributos aleatórios, para simular queries a um banco de dados qualquer. Os método com nome começando por getAll retornam um array de objetos. Os métodos com nome começando com apenas get retornam um objeto. Os métodos com nome começando com print imprimem atributos dos objetos do array retornado pelo método com getAll no nome.

Se o enunciado não diz que funções prontas são proibidas, pode usá-las! Uma das partes mais importantes de desenvolvimento é saber navegar a documentação e conhecer as funções que ela oferece. Consulta à internet é liberadíssima.

As atividades NÃO foram ordenadas por dificuldade. Então se uma atividade parecer muito difícil, pode pular e tentar outra primeiro. Mas atenção, algumas atividades permitem que você use o código feito pra responder outras atividades. Se atente ao tipo de entrada, se é natural, inteiro, string, etc. Se uma questão recebe inteiros e seu método só funciona para números positivos, seu método está apenas "parcialmente" correto.

Suas respostas serão avaliadas pricipalmente com base em:
1. Lógica (se o método funciona corretamente, e se ele não tem coisas desnecessárias)
2. Legibilidade (se no evento de você ser atropelado por um buzu na saída da capacitação qualquer outro trainee conseguiria entender seu código)
3. Complexidade (se seu código tem a melhor complexidade, eficiência e tempo de execução)

Não se preocupe se não conseguir resolver todos os desafios. Alguns deles são difíceis. Tente todos, e caso tenha alguma dúvida não hesite em perguntar. Caso consiga uma resposta parcial, ou só consiga codar até certo ponto, mostre o código parcial mesmo. O uso de comentários para explicação não só é permitido, como é recomendado para essa atividade.

BOA SORTE!




 - A primeira atividade é manipular o método UserController::printUserList() pra que ele imprima com os nomes em ordem alfabética.




 - A segunda atividade é manipular o método BusinessController::printBusinessList() pra que ele imprima também  nome de quem é o dono daquela empresa. O trainee deve usar o id no atributo owners_id.




 - A terceira atividade é usar os métodos UserController::getAllUsers() e BusinessController::getAllBusinesses() pra criar um novo método que organize o array de usuários retornado por getAllUsers() em ordem de empresa, no formato:

NomeDaEmpresa1
Empregado1
Empregado2

NomeDaEmpresa2
Empregado1
Empregado2
Empregado3

etc...




 - A quarta atividade é criar um método que recebe dois inteiros, $a e $b, e retorna $a+$b. Mas usando APENAS loops, ifs, incremento e decremento. Ou seja, nada de '+', '-', '*', '/', etc. Nem funções prontas! Não se preocupe com números negativos, por enquanto...




 - A quinta atividade é criar um método que recebe dois inteiros, $a e $b, e retorna $a*$b. Mas usando APENAS loops, ifs, incremento e decremento. Ou seja, nada de '+', '-', '*', '/', etc. Nem funções prontas! Mas pode usar o método de soma feito na quarta atividade. Não se preocupe com números negativos, por enquanto...




  - A sexta atividade é criar um método que recebe dois inteiros, $a e $b, e retorna pow($a, $b). Mas usando APENAS loops, ifs, incremento e decremento. Ou seja, nada de '+', '-', '*', '/', etc. Nem funções prontas! Mas pode usar o método de soma feito na quarta atividade e o de multiplicação feito na quinta atividade. Não se preocupe com números negativos, por enquanto...




  - A sétima atividade é criar um método, que recebe uma string $s e retorna strtolower($s), mas sem usar funções prontas, com a excessão de chr(), ord() e strlen()! Dica: Tabela ASCII.




   - A oitava atividade é criar um método que recebe um número natural e retorna seu equivalente em binário. Não pode usar funções prontas, com a excessão dos métodos criados em atividades anteriores.




  - A nona atividade é criar um método que recebe quatro inteiros $x1, $y1, $x2, $y2, coordenadas cartesianas de 2 pontos. Seu método deve retornar a distância entre os 2 pontos.




 - A décima atividade é criar um método que recebe duas strings $agulha e $palheiro. O método deve retornar true se $agulha é uma substring de $palheiro, ou false se não. Esse método deve ser case sensitive. O uso de funções prontas é proibido, com a excessão de strlen().




  - A décima primeira atividade é criar um método que tem a mesma responsabilidade que a décima atividade, mas dessa vez é case insensitive. O uso de funcções prontas é proibido, com a excessão de chr(), ord(), strlen(), e outras atividades. Dica: Tabela ASCII



  # As respostas estão na pasta respostas