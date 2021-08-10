@echo off
set Programm=docker desktop
tasklist |find /i "%Programm%" >nul
if %errorlevel% == 0 (
echo +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
echo +                                                                                                                                                                     +
echo +                                                                                                                                                                     +
echo +                                                                                                                                                                     +
echo +                                                                                                                                                                     +
echo +             HERZLICH WILLKOMMEN                                                                                                                                     +
echo +                                                                                                                                                                     +
echo +             .....IHRE Docker Desktop Software ist gestartet, es kann losgehen                                                                                       +
echo +                                                                                                                                                                     +
echo +             unser Modularbeit mit dem Namen Mediengutschein wird gestartet                                                                                          +
echo +                                                                                                                                                                     +
echo +				sobald Docker fertig gestartet ist, können Sie im Browser die Webseite Mediengutschein unter:                                                          +                                                                               +
echo +                                                                                                                                                                     +
echo +                 https://localhost.ch                                                                                                                                +
echo +                                                                                                                                                                     +
echo +                                                                                                                                                                     +
echo +                                                                                                                                                                     +
echo +                                                                                                                                                                     +
echo +                                                                                                                                                                     +
echo +                                                                                                                                                                     +
echo +                                                                                                                                                                     +
echo +                                                                                                                                                                     +
echo +                                                                                                                                                                     +
echo +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
echo 
echo Bitte Enter drücken um die Mediengutschein 
echo 
) else (
echo +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
echo +                                                                                                                                                                     +
echo +                                                                                                                                                                     +
echo +                                                                                                                                                                     +
echo +                                                                                                                                                                     +
echo +             HERZLICH WILLKOMMEN                                                                                                                                     +
echo +                                                                                                                                                                     +
echo +             .....oh...nein, Ihre Docker Desktop Software ist leider nicht gestartet.                                                                                +
echo +                                                                                                                                                                     +
echo +                                                                                                                                                                     +
echo +                                                                                                                                                                     +
echo +                                                                                                                                                                     +
echo +                                                              ###### BITTE DOCKER DESKTOP STARTEN   #####                                                            +
echo +                                                                                                                                                                     +
echo +                                                                                                                                                                     +
echo +                                                                                                                                                                     +
echo +                                                                                                                                                                     +
echo +             sobald Sie dies gemacht haben und dann diese Fenster mit ENTER bestätigt habe, geht es weiter mit unserer Modularbeit.                                  +
echo +                                                                                                                                                                     +
echo +				Wenn es dann geklappt hat, so können Sie im Browser die Webseite Mediengutschein unter:                                                                +                                                                               +
echo +                                                                                                                                                                     +
echo +                 https://localhost.ch                                                                                                                                +
echo +                                                                                                                                                                     +
echo +                                                                                                                                                                     +
echo +                                                                                                                                                                     +
echo +                                                                                                                                                                     +
echo +                                                                                                                                                                     +
echo +                                                                                                                                                                     +
echo +                                                                                                                                                                     +
echo +                                                                                                                                                                     +
echo +                                                                                                                                                                     +
echo +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
echo Bitte den "%Programm%" starten und danach hier Enter drücken
)
pause
docker compose up