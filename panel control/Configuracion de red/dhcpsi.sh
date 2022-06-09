#!/bin/bash
sudo rm -r /etc/netplan/01-network-manager-all.yaml
cp 02-network-manager-all.yaml /etc/netplan/01-network-manager-all.yaml
sudo systemctl restart systemd-networkd.service
sudo netplan apply