
<?php
function isAproved(){
           $pessoas = [
    'nome' => 'João De Deus',
    'notas' => [
        'matematica' => 10,
        'portugues' => 2,
        'historia' => 3,
        'filosofia' => 8,
        'sociologia' => 4,
        'fisica' => 8,
        'quimica' => 6,
    ]
    ];
     $notas = $pessoas['notas'];

     $notasAbaixoDeSeis = 0;
     $nome = $pessoas['nome'];

    foreach($notas as $materias => $notaluno  ){
      if($notaluno < 6){
          $notasAbaixoDeSeis++;
      }
    }
     if ($notasAbaixoDeSeis >= 3) {

         echo "$nome, Não passou de ano!";
     }
     else {
         echo "$nome, Passou de ano!";
     }
    }
///// isAproved();
function aritimeticAge(){
$pessoas = [
    ['nome' => 'João', 'idade' => 20],
    ['nome' => 'Maria', 'idade' => 30],
    ['nome' => 'José', 'idade' => 40],
    ['nome' => 'Ana', 'idade' => 50],
    ];
     $totalidades = 0;
    foreach($pessoas as $pessoa){
    
     $totalidade += $pessoa['idade'];
    }
     echo $totalidade/4;
}

///// $aritimeticAge();
function olderAge(){
    $pessoas = [
    ['nome' => 'João', 'idade' => 20],
    ['nome' => 'Maria', 'idade' => 30],
    ['nome' => 'José', 'idade' => 40],
    ['nome' => 'ana', 'idade' => 50],
];
$maisVelho = null;
$idadeMaisVelha = 0;
foreach ($pessoas as $pessoa){ 
       if ($pessoa['idade'] > $idadeMaisVelha) {
            $maisVelho = $pessoa;
            $idadeMaisVelha = $pessoa['idade'];
       }
}
echo "a pessoa mais velha(o) é {$maisVelho['nome']} com $idadeMaisVelha anos";

  
}
///// $olderAge();
function psswdCheck(){
    $senha = "SenhaForte123";
       if (strlen($senha) < 8) {
        echo "A senha é fraca.";
        return; 
    }


    if (!preg_match('/[A-Z]/', $senha)) {
        echo "A senha é fraca.";
        return; 
    }

   
    if (!preg_match('/[a-z]/', $senha)) {
        echo "A senha é fraca.";
        return; 
    }

    if (!preg_match('/[0-9]/', $senha)) {
        echo "A senha é fraca.";
        return; 
    }

  
    echo "A senha é forte!";
}
//// $psswdCheck();
function numberOfPosts(){
    $qtdautorpost = [];
    $posts = [
    [
        'post' => 'Estou aprendendo PHP', 
        'autor' => 'João'
    ],
    [
        'post' => 'Aprendi HTML, CSS e JavaScript', 
        'autor' => 'João'
    ],
    [
        'post' => 'Estou trabalhando em um projeto', 
        'autor' => 'Maria'
    ],
    [
        'post' => 'Estou estudando para o ENEM', 
        'autor' => 'José'
    ],
    [
        'post' => 'Fiz um curso de PHP', 
        'autor' => 'Maria'
    ],
    [
        'post' => 'Aprendi PHP', 
        'autor' => 'João'
    ],
    [
        'post' => 'Estou trabalhando em um site', 
        'autor' => 'João'
    ],
    [
        'post' => 'Terminei o curso de PHP', 
        'autor' => 'Maria'
    ]
];
foreach($posts as $post){
    $autorpost = $post["autor"];
      if (isset($qtdautorpost[$autorpost])) {
            $qtdautorpost[$autorpost]++;
       }
       else { $qtdautorpost[$autorpost] = 1;}
}
      var_dump($qtdautorpost);
}
////return numberOfPosts();
?>
