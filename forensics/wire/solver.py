import dpkt
from dpkt.udp import UDP
from dpkt.ip import IP, IP_PROTO_UDP
import socket

f = open('wire.pcapng','rb')

pcap = dpkt.pcapng.Reader(f)
m=[]
d={100:'0',111:'1'}

for ts,buf in pcap:
    eth = dpkt.ethernet.Ethernet(buf)
    ip=eth.data
    udp=ip.data
    try:
        dst = socket.inet_ntoa(ip.dst)
        #print(dst)
    except:
        continue
    
    if type(udp) == UDP and dst == '192.168.43.135':
        #print(len(buf))
        m.append(d[len(buf)])
        
    
    
m=''.join(m)
print(m)
s=''
for i in range(0,len(m),8):
    t=int(m[i:i+8],2)
    s+=chr(t)
print(s)




