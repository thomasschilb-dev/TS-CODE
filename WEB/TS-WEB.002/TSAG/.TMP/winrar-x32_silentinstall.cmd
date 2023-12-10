@ECHO OFF
Color 0A
mode con:cols=100 lines=18
@cls
echo. 
echo. 
echo.                           http://thomasschilb.net - We are waiting for You!!!
echo.
echo.                                   The program is being installed...
echo.
echo.                                  Wait for the operation to complete.
@echo off
FOR %%i IN ("winrar-x32-620.exe") DO Set FileName="%%i"
%FileName% /VERYSILENT /I /EN