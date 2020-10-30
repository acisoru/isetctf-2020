#!/bin/bash
socat TCP-LISTEN:1337,fork,reuseaddr,bind=0.0.0.0 EXEC:"sudo -u nobody /task/vuln"
