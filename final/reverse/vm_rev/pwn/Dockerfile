FROM ubuntu:18.04
RUN apt-get update && apt-get install socat python3 -y
RUN useradd pwn -m
USER pwn
COPY . /home/pwn/
WORKDIR /home/pwn/
RUN echo "CTF{5up3r_34sy_VM_pwn}" > flag.txt
CMD socat TCP-LISTEN:1337,reuseaddr,fork EXEC:"python3 listen.py"
