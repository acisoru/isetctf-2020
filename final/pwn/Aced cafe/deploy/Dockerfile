FROM ubuntu:18.04
RUN apt update && apt -y install gcc socat sudo
RUN mkdir /task
WORKDIR /task
COPY vuln.c .
COPY flag.txt .
COPY server.sh /
RUN gcc -fno-stack-protector /task/vuln.c -o /task/vuln
RUN rm -rf /task/vuln.c
RUN chmod +x /task/vuln
RUN chmod +x /server.sh
EXPOSE 1337
ENTRYPOINT /server.sh
