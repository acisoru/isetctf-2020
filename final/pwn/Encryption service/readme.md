# Encryption service

## Условие

> From the point of view of cryptography, it is absolutely unbreakable cipher.
> But maybe there are other vulnerabilities?

## Решение

> В данной программе уязвимость заключается в копировании не учитывая границы массивов.
> Сложность добавляет то, что подаваемые данные ксорятся с 1337.
> Эксплоит состоит из двух ступеней. Сначала необходимо слить записи из GOT, чтобы вычислить libc base, и прыгнуть обратно в vuln.
> Затем уже вызвать шелл гаджетами из libc.
> flag: Iset{G00d_3NcRyPT0r_w1Th0uT_vUlN5}
