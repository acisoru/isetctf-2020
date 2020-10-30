#!/usr/bin/env python3

import sys

def dec(symbol):
	temp = symbol & 0b11111
	symbol >>= 5
	symbol ^= 5
	temp = temp ^ 17 ^ 13
	symbol = ((temp << 3) & 0b11111000) | (symbol & 0b111)
	symbol = ((symbol << 2) & 0b11111100) | ((symbol >> 6) & 0b11)
	symbol = ((symbol << 4) & 0b11110000) | ((symbol >> 4) & 0b1111)
	return symbol

if len(sys.argv) != 3:
	print("Usage:\n./solver.py <encrypted_file> <output_file>")
	exit(0)

data = b''
with open(sys.argv[1], 'rb') as f:
	data = f.read()

edata = [int(i) for i in data]

for i in range(len(edata)):
	edata[i] = dec(edata[i])

data = b''
for i in edata:
	data += bytes([i])

with open(sys.argv[2], 'wb') as f:
	f.write(data)
