#!/bin/bash
sudo rm -r ping.txt
ping $1 -c 5 >> ping.txt