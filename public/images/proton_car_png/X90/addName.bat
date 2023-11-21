@echo off
setlocal enabledelayedexpansion

set "directories=C:\laragon\www\protontype-livewire\public\images\proton_car_png\X90\red C:\laragon\www\protontype-livewire\public\images\proton_car_png\X90\silver C:\laragon\www\protontype-livewire\public\images\proton_car_png\X90\white"

for %%D in (%directories%) do (
    echo Adding "side_" to file names in %%D...

    for %%F in ("%%D\*.*") do (
        set "filename=%%~nxF"
        if not "!filename:~0,5!"=="side_" (
            ren "%%F" "side_!filename!"
            echo Added "side_!filename!" in %%D
        ) else (
            echo "side_!filename!" already exists in %%D, skipping.
        )
    )
)

echo Process completed.
timeout /t 2 >nul
exit