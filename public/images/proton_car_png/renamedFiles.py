import os
import time

# Specify the folder path containing the files
folder_path = r"C:\laragon\www\protontype\public\images\proton_car_png\X50"

# Define dictionaries to map prefixes and colors
prefix_map = {"Back": "X50_Back", "Front": "X50_Front", "Side_1": "X50_Side_1", "Side_2": "X50_Side_2"}
color_map = {"Blue": "Blue", "White": "White", "Orange": "Orange", "Grey": "Grey", "Red": "Red", "Silver": "Silver"}

# Change directory to the specified folder
os.chdir(folder_path)

# Loop through files with the format "Prefix_X50_Color.png"
for file_name in os.listdir(folder_path):
    if file_name.endswith('.png'):
        parts = file_name.split('_')
        if len(parts) == 4:
            prefix, x_number, color, extension = parts
            if prefix in prefix_map and color in color_map:
                new_prefix = prefix_map[prefix]
                new_color = color_map[color]
                new_file_name = f"{x_number}_{new_prefix}_{new_color}.png"
                os.rename(file_name, new_file_name)
                print(f"Renamed: {file_name} to {new_file_name}")
            else:
                print(f"Skipped: {file_name} (Invalid prefix or color)")

# Wait for 10 seconds after all files have been renamed
time.sleep(10)
