FROM ubuntu:latest
FROM python:3.7

ENV PYTHONUNBUFFERED 1

COPY . /app
WORKDIR /app

RUN apt-get update
RUN apt-get install -y libsasl2-dev python-dev libldap2-dev libssl-dev
RUN pip install -r requirements.txt

ENV FLASK_APP=wsgi.py
ENV FLASK_ENV=development
CMD [ "gunicorn", "-b", "0.0.0.0:5656", "-w", "4", "wsgi:app" ]