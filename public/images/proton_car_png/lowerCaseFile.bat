#!/bin/bash

# Specify the directory where the files are located
directory="C:/laragon/www/protontype/public/images/proton_car_png/X90"

# Iterate through all files in the directory
for file in "$directory"/*; do
    # Extract file name and extension
    filename=$(basename -- "$file")
    extension="${filename##*.}"
    filename_without_extension="${filename%.*}"

    # Convert filename to lowercase
    new_filename=$(echo "$filename_without_extension" | tr '[:upper:]' '[:lower:]')

    # Rename the file maintaining the original format
    mv "$directory/$filename" "$directory/$new_filename.$extension"

    echo "Renamed file: $filename to $new_filename.$extension"
done

# Display a message
echo "Renaming completed."

# Delay for 5 seconds before closing the prompt
sleep 5
