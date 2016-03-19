@echo off
rem This batch file will create abc.txt and def.txt with 
rem lines of text written to the files.
cls
cd "%userprofile%\Desktop"
wmic bios get serialnumber  > "CODE.txt"
cd "C:\wamp"
wmic bios get serialnumber >"p.txt"
cmd.exe  /a /c TYPE c:\wamp\p.txt   >   c:\wamp\petro.txt

exit
