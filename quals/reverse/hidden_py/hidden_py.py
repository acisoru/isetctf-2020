import binascii
import os
from Crypto.Cipher import AES
import json
from sympy.combinatorics.permutations import Permutation
import hashlib

md5='3ee0ec20f3b9df9f52830e5595d61a7b'

ciphertext=b'\xb2"_\x9c4V\xce\x95\x16\xcb\xc4\xff\x18M`\x1c\xf8\xf8Xl\xaa\xbcv\xb9\x11\xff\xa3\xb5\x06\xdcG7\xba\x8b\xae\xd84\n\xc5\x82\xf5\x81v\x0c\xfc\xd9ma'
enc=binascii.hexlify(ciphertext).upper().decode()
IV=b'\x00\x00\x00\x00\x00\x00\x00\x00\x00\x00\x00\x00\x00\x00\x00\x00'
print('Enter 8 chars: ')
k=input()
x='101C0DE1C0DE1DEAD1BEEF10'+k.upper()
h=hashlib.md5(x.encode()).hexdigest()
if h==md5:
    print('[+] Decrypting flag: ')
    key = binascii.unhexlify(x)
    encryptor = AES.new(key, AES.MODE_CBC, IV=IV)
    enc=binascii.unhexlify(enc)
    result = encryptor.decrypt(enc)
    #print(binascii.hexlify(result).upper())
    q=binascii.hexlify(result).upper()
    b=bytes.fromhex(q.decode())
    print(b)
    
else:
    print('[-] Wrong input. Try again)')

