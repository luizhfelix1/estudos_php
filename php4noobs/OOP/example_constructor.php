<?php

//Atributo:
echo "Nome de usuário: " . $danielhe4rt->username;

//Métodos:
echo "Saldo: " . $danielhe4rt->getMoney();

if ($danielhe4rt->canBuy($woodenSword)) {
    echo $danielhe4rt->username . ', voce pode comprar a' . $woodenSword->name . '!';
} else {
    echo $danielhe4rt->username . ', cario tiozão ce tá liso hein? Vai ter como comprar a ' . $woodenSword->name . ' não';     
}

if ($danielhe4rt->canBuy($silverSword)) {
    echo $danielhe4rt->username . ', você pode comprar a' . $silverSword->name . '!';
} else {
    echo $danielhe4rt->username . ', cario tiozão tem nem pra espada de madeira e quer a ' . $silverSword->name . ' num fode né!';

}