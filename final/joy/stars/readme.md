# Start

## Условие

> Вы любите считать звезды? Компьютер любит.
> Правила этой игры просты. Всего 100 звездочек.
> Вы с ботом берете звезды по очереди, но
> забирать можно от 1 до 3 звездочек.
> Оставьте последнюю звезду компьютеру и выиграете флаг.
>
> nc address 44405

## Решение

> Решение: Чтобы осталась одна звезда, надо чтоб до этого осталось 5, а до этого 9 и так далее.
> В общем виде это учловие выглядит так: n%4==1. Первый ход у нас оставляем 97, потом 93, 89, ...
> 13, 9, 5, 1. Можно написать скрипт, а можно и вручную позабирать звездочки, их всего 100.
> флаг - iset{I_lik3_lo0king_4t_th3_st4r5}
