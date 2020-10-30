# Double echo

## Условие

> I just recently started learning C and wrote this little program. Well, what could be wrong here ?!
> nc localhost 8137

## Решение

> В бинарнике два раза вызывается printf с данными контролируемыми пользователем.
> Оба вызова приводят к уязвимости форматной строки. (fortmat string vulnerability)
> При первом вызове можно слить аддресс со стека, который поможет вычислить PIE_BASE.
> Далее, зная PIE_BASE можно вычислить аддресс переменной с флагом и при втором вызове прочитать флаг.
> Flag: Iset{r43D_wItH_pRInTf_4r3_p055Ib13}
