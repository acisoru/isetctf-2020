from os import system
from struct import unpack
from sys import stdin
from random import randint
print ('Send 4 bytes of bytecode size in little endian')
print ('and after that send the bytecode:', flush=True)
size = unpack('<I', stdin.buffer.read(4))[0]
bytecode = stdin.buffer.read(size)
name = ''.join([hex(randint(0, 256))[2:]  for i in range(5)])
tmp = open('/tmp/' + name , 'wb+')
tmp.write(bytecode)
tmp.close()
print (tmp.name)
system("./vm_pwn " + tmp.name)
