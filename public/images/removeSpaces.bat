@echo off
setlocal enabledelayedexpansion

set "folderPath=C:\laragon\www\protontype\public\images\proton_car_png\Iriz"

cd "%folderPath%"

for %%F in (*) do (
    set "fileName=%%~nF"
    set "fileNameNoSpaces=!fileName: =_!"
    if not "%%~nF"=="!fileNameNoSpaces!" (
        ren "%%F" "!fileNameNoSpaces!%%~xF"
        echo Renamed: "%%F" to "!fileNameNoSpaces!%%~xF"
    )
)

timeout /nobreak /t 5 >nul

endlocal
