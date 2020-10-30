def shift(s,n):
    r=s
    for i in range(n):
        r=r[-1:]+r[:-1]
    return r

lengh_key=10

#c='*\x02\x03\x14\x1c\x0c\x18N\x12\x13$\x0c\x03\x0f\x03\x13\x14Q\x1f\x136\x0c\x0f\x01$4\x00N\x12\x0c"\x19\x03\x13\x00\x1d\x17C\n\x1f'
c='|X69PmtD"_c\x05\x0c|\x13+8\x0e\'E6\n\x16{Nd8\x13~P0\x19H|@o\x127\x08\x18y_A8\x10mtD(_y_A0Tp8\x04"\x1b~Q\x0fa\x07t5Md\x125\x1d\x10{Nd:\x150A\'\x13\x0c0\x0f>*\x0e:\x1b~Q\x159\x065<Md\x12\'\x1a\x07{Nd8\x13=\x050\x19Q#Ijz\x0f(\x04y_A0\x00$j\x14:\x1b~Q\x16>Ijz\x05yE;XOr\x17/<Md\x12#\x1e\x038\r3<\x1f=\x1b~QJ2\x02+5T-\x1b~Q\x03{Nd:\x15 Sz^H|@&7\x03c\x1cp\x1b\x16"Ijz\x02\'R!\x0b\x12%\x06#sJjG6\x00W8\x0c)sJj\x190\x1b\x129\x065-\x021Ez\\H|@\x131\x02:Ty_A2\x02)sJjS6XOr\x164<\x03c\x1cp\x06R{Nd+T?\x022\x1eH|@!,\x15=Y6\x00H|@4j\x04;\x02\'XOr\n)?W;\\2\x06\x0b>\rmtD:D0\x1aH|@&*Md\x12 A\x01#\x063sJjZ6\x0bW{Nd8\t-\x1b~Q\x01a\x07tsJjScB\t"MmvG\x0e^<\x16B;\x0c%xG B6\x06\x19\x05\x0bt\x06\x0c\'\x01$\x1c=!\x0fs0\t=\x02+\x06=0Tpm\x04"L'
pl='cryptanalysis'

for i in range(len(c)-10):
        key=''
        for j in range(lengh_key):
            t=ord(pl[j])^ord(c[i+j])
            key+=chr(t)
        key=shift(key,i%lengh_key)
        print(key)
        res=''
        for j in range(len(c)):
            k=ord(c[j])^ord(key[j%lengh_key])
            res+=chr(k)
        print(res)


               
        
