@echo off

rem cd c:\dmsystem
rem if /I "%cd%"=="C:\DMSYSTEM" goto InDMSys
if exist c:\dmsystem\*.* goto InDMSys
goto EndCmd


:InDMSys
echo c:\dmsystem found
start http://www.davisonsoftware.com/files/downloads/DM_HIWaterServ.exe


:EndCmd
