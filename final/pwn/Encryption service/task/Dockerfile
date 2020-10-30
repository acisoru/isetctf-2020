FROM ubuntu:18.04

RUN apt-get update && apt-get install socat sudo -yqq \
  && rm -rf /var/lib/apt/lists/*
WORKDIR /task

COPY ./vuln .
COPY ./libc.so.6 .
COPY ./server.sh /
COPY ./flag.txt .

EXPOSE 1337

ENTRYPOINT /server.sh

