def encrypt(message):
	m = [int(i) for i in message]
	while len(m) % 3 != 0:
		m.append(0)
	i = 0
	chain = 0x065536
	for i in range(0, len(m), 3):
		current = ((m[i] & 0xff) << 16 ) | ((m[i+1] & 0xff) << 8) | (m[i+2] & 0xff)
		current ^= chain
		chain = current & 0xaaaaaa
		current ^= 0xaaaaaa
		m[i+2] = (current >> 16) & 0xff
		m[i+1] = (current >> 8) & 0xff
		m[i] = current & 0xff
	return m

def decrypt(d):
	chain = 0
	for i in range(0, len(d), 3):
		current = (d[i] & 0xff) | ((d[i+1] & 0xff) << 8) | ((d[i+2] & 0xff) << 16)
		current ^= 0xaaaaaa
		tmp = current & 0xaaaaaa
		if i == 0:
			current ^= 0x065536
		else:
			current ^= chain
		chain = tmp
		d[i] = (current >> 16) & 0xff
		d[i+1] = (current >> 8) & 0xff
		d[i+2] = (current) & 0xff
	return d

a = encrypt(b'Iset{l0l_suCh_4N_1nc0nv3n1enT_Br0ws3r}')
print(a)
b = decrypt(a)
print(''.join([chr(i) for i in b]))
