#!/bin/bash

# Define folder path and log file name
folder_path="C:\laragon\www\protontype\public\images\proton_car_png\X90"
log_file="filename.log"

# Create log files for different categories
categories=("Blue" "Red" "White" "Silver" "Brown" "Grey")
for category in "${categories[@]}"; do
    touch "${category}_${log_file}"
done

# Iterate through files in the folder
for file in "${folder_path}"/*; do
    if [ -f "$file" ]; then
        # Extract category from file name
        category=$(echo "$file" | grep -oE '_(Blue|Red|White|Silver|Brown|Grey)\.png$' | sed 's/_//' | sed 's/\.png//')
        
        # Log file name into the respective category log file
        if [[ "${categories[@]}" =~ "${category}" ]]; then
            echo "$file" >> "${category}_${log_file}"
        fi
    fi
done
