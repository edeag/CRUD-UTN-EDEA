# CRUD
La base de datos utilizada tiene 4 parametros: "id" (primary key), "email", "password" y "username"

⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣀⣠⣤⣤⣤⣤⣤⣤⣤⣤⣤⣤⣀⣀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢸⣿⣟⡿⣽⢯⡿⣽⢯⡿⣽⣻⢾⣽⣻⣟⡿⣷⣶⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣠⣞⠛⢺⣿⡽⣯⢿⡽⣯⣟⡷⣯⣟⣾⣳⢯⣟⡷⣿⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢰⢿⣉⡶⢰⣿⣿⣿⣿⣿⣷⣯⣿⣷⣿⣾⣽⣻⢾⣽⣻⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣀⣄⣀⣀⠀⠀⠀⠀⠀⠀⠘⣦⣭⣴⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣾⣟⠀⠀⠀⠀⠀⠀⠀⠀⢀⣀⣠⣤⣤⣶⣄⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⣼⣿⣻⣟⣿⣻⢿⣶⡶⣤⣴⣿⣿⢿⣽⣳⣟⣾⣳⣟⡾⣽⢾⡽⣞⣷⣻⣞⡷⣯⢿⡽⣿⣶⣄⣤⣤⣶⡾⣿⣟⡿⣯⣟⡷⣯⢿⡆⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⢀⣿⢷⣻⣞⡷⣯⣟⡾⣽⣿⣿⣻⣞⡿⣞⣷⣻⣞⡷⣯⢿⡽⣯⢿⡽⣞⡷⣯⣟⣯⡿⣽⣿⣻⡽⣯⣟⡾⣽⣳⢯⣟⡷⣯⢿⡽⣯⣧⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⣸⡿⣯⢷⣯⣟⡷⣯⢿⣿⣻⣞⡷⣯⢿⡽⣞⡷⣯⢿⡽⣯⢿⡽⣯⢿⣽⣻⠷⣯⣟⣿⡿⣷⣯⣟⡷⣯⣟⡷⣯⣟⡾⣽⢯⡿⣽⣳⢿⡀⠀
⠀⠀⠀⠀⠀⠀⠀⢀⣿⡽⣯⣟⡾⣾⡽⣯⣿⢷⣻⢾⡽⣯⣿⣻⣽⣻⡽⣯⢿⡽⣯⢿⣽⣻⢾⣽⣻⢷⣻⣞⣿⣿⣷⢯⣟⡷⣯⣟⡷⣯⢿⡽⣯⣟⡷⣯⢿⣇⠀
⠀⠀⠀⠀⠀⠀⠀⠘⢿⣽⣳⢯⣟⣷⣻⣿⢯⡿⣽⢯⣟⣷⣿⣳⢯⣷⣻⡽⣯⢿⣽⣻⣾⣽⣻⢾⡽⣯⢷⣻⣞⣿⣿⣟⡾⣽⣳⢯⡿⣽⢯⣟⣷⣯⣿⡽⠿⠋⠀
⠀⠀⠀⠀⠀⠀⠀⠀⣠⣾⣿⡿⣿⣞⣷⣿⢯⡿⣽⣻⢾⣽⣷⢯⣟⣾⣳⢿⣽⣻⢾⣽⣷⢯⣟⣯⢿⡽⣯⢷⣻⣞⣿⣿⣽⣳⢯⡿⣽⢯⣟⣿⣻⣟⣿⣻⣷⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⣿⣟⡾⣽⣳⣟⣾⣟⣯⣟⡷⣯⣟⣾⣿⣻⣞⡷⣯⣟⡾⣽⣻⢾⣿⣻⢾⡽⣯⢿⡽⣯⢷⣻⢾⣿⣷⢯⡿⣽⢯⣟⣾⣳⣟⣾⣳⣟⣾⡇⠀
⠀⠀⠀⠀⠀⠀⠀⢀⣿⣼⣻⢧⡿⣼⣿⣻⣼⣻⠿⣧⣟⡟⢿⣧⣟⡿⣧⣟⡿⣧⣟⣿⠸⣿⣟⣿⣻⣟⣿⣻⣟⡿⣟⣿⣿⣿⣿⣿⣿⡼⣧⢿⡼⣧⢿⣼⣻⡇⠀
⠀⠀⠀⠀⠀⠀⠀⠘⠿⣾⡽⣯⣟⡷⣿⣳⢯⣟⣿⣳⣿⠁⢸⡷⣯⣟⡷⣯⣟⡷⣯⡟⢀⡹⣾⣷⣻⣞⣷⣻⢾⣽⣻⢾⣿⢾⣟⣯⢷⣻⡽⣯⢿⣽⣻⠾⠟⠁⠀
⠀⠀⠀⠀⠀⠀⠀⠀⣠⣶⣿⡿⣾⣽⣿⣽⡿⣞⣷⣻⠏⠉⠓⢿⣷⣯⣿⣳⢯⣟⣿⠛⠉⠀⠈⠳⣿⣞⡷⣯⣟⡾⣯⣟⣿⡿⣿⣞⣯⢷⣻⡽⣿⢿⡿⣿⢷⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⣿⡽⣾⣽⣳⣿⣿⣿⣻⡽⣾⣿⡀⠀⠀⠀⠹⢾⣿⠻⣟⣾⡏⠀⠀⠀⠀⠀⠈⠛⢿⣷⣯⢿⡽⣿⣿⣿⣿⣟⡾⣯⢷⣻⡽⣯⢿⣽⣻⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⢺⣟⡷⣯⢷⣻⣿⢷⣯⣿⣿⣽⡆⠀⠀⡤⣤⣤⡛⠀⠈⠉⠀⠀⣤⣦⣤⡄⠀⠀⣸⣯⣿⠛⢻⣿⢿⣿⠋⢻⣿⣽⣯⢷⣻⣽⣻⢾⡯⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠈⠛⢿⣽⣯⢷⡿⣿⡍⠘⣿⣻⣷⠶⠿⠿⠟⠛⠋⠀⠀⠀⠀⠈⠛⠛⠛⠛⠛⠛⣿⡿⡟⠀⢀⣿⡿⠁⠀⠀⣼⡿⣞⣯⢷⣿⣟⠉⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⣶⣿⣟⡾⣯⢿⣽⠇⠀⠻⣯⣿⡄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣿⡿⠁⠀⡼⠋⠀⠀⠀⠀⠘⠿⣽⣾⣻⢾⣽⡿⠀⠀⠀
⠀⢀⣀⣀⠀⠀⠀⠀⠀⠙⢷⣯⣿⠉⠉⠉⠀⠀⠀⠙⣿⡹⣄⠀⠀⠀⠀⢀⡤⠦⣄⠀⠀⠀⠀⠀⢀⣾⣿⣁⡤⠚⠁⠀⠀⠀⠀⠀⠀⠀⠀⢀⣿⡿⠞⠁⠀⠀⠀
⠀⢸⡄⠈⠳⣄⠀⠀⠀⠀⠀⠙⠻⣦⡀⠀⠀⠀⠀⠀⠀⠀⠈⠓⢤⣀⠀⠀⢧⡀⢘⡇⠀⣀⡤⠞⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠞⠋⠀⠀⠀⠀⠀⠀
⠀⠀⠹⣆⠀⠈⢦⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠉⠒⠶⣥⠾⠛⠉⠁⣇⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠉⢣⡀⠀⠙⢆⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⡴⢛⠻⠒⠒⠛⠋⠹⡄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⢰⠋⠙⢦⡀⠈⠱⣆⣀⠴⠚⠉⠙⡦⠀⠀⠀⠀⣀⣀⡤⣶⣾⡟⢡⣾⣧⠀⠀⠀⠀⣰⣿⠛⢉⠙⠓⢦⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⣴⠋⠳⣄⠀⠙⢦⠀⠈⠁⠀⣠⠖⠋⠁⠀⠀⠀⡼⢩⠀⢠⣿⡟⡰⣿⣿⣿⡄⠀⢀⣼⣿⡏⢠⠀⠱⢄⠀⠙⢦⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⣿⣄⠀⠈⠳⣄⣀⡗⠀⠀⣸⠃⠀⠀⠀⠀⢀⡾⠁⣼⠀⣼⣿⠞⢡⣿⣿⡏⢳⣠⠞⣿⣿⠁⠸⡀⠑⢌⠰⡀⠀⠙⢦⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⢳⡀⠙⠦⣄⡰⠃⠀⠀⣀⣯⡀⠀⠀⠀⢀⡜⡄⢠⡇⢠⣿⡿⠀⣿⣿⣿⡇⣰⠳⠾⠿⠯⢤⣴⠃⡀⠀⠑⢌⠢⡀⠀⠙⣦⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠈⠳⢤⣼⢀⡀⠖⠋⠁⠀⣸⠂⠀⢀⡞⡜⠀⣼⠀⣼⣿⠇⣸⣿⣿⣿⡇⠧⢤⣤⣀⣀⣸⠃⠀⣏⠢⡀⠀⠑⡌⠢⡀⢈⡿⠋⠢⡄⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⣼⠉⠀⢀⣠⠴⠚⣇⢀⡶⣞⡀⠁⠊⡌⢠⣿⡾⢠⣿⣿⣿⣿⡃⠀⢠⣿⣿⠀⠆⡆⢀⢿⡀⢌⠢⡄⠀⠱⣼⠏⠀⠐⢄⠈⠳⡀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠘⠲⡚⠉⠀⠀⠀⠹⡟⠀⢀⠉⠓⢦⠇⣼⣿⠇⣼⣿⣿⣿⣿⠀⠀⣼⣿⡇⠀⢠⠁⠸⣸⠓⢄⡑⢌⢲⡴⠁⠠⡈⠦⠀⠑⢄⣌⡧⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⣇⠀⠀⠀⠀⠀⢷⠀⠌⡸⠀⣸⢠⣿⡟⢰⣿⣿⣿⣿⣿⠀⢀⣿⣿⠁⢀⡜⠀⠇⡏⠀⠀⠙⣦⠙⢆⡑⢄⠀⠱⣉⢆⣠⠟⠳⢄⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⢸⡀⠀⠀⠀⠀⠸⣧⡸⠁⢠⡏⣼⣷⢃⣿⣿⣿⣿⣿⣿⠀⢸⣿⡾⠀⡄⠇⢐⢰⡇⠀⠀⠀⠈⠳⣄⠘⠢⡑⠄⢈⡼⣃⡤⠀⠀⠙⢦⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠈⣇⠀⠀⠀⠀⠀⢹⡄⠀⣸⢡⣿⡾⢸⣿⣿⣿⣿⣿⡏⠀⣾⣷⡇⢀⢸⠀⠘⣼⠀⠀⠀⠀⠀⠀⠈⠑⢤⣈⡴⠟⠉⠁⠀⠀⠀⠀⠀⢧⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⢹⠀⠀⠀⠀⠀⠀⢻⣹⠃⣾⣿⠃⠈⢿⣿⣿⡿⠋⠀⠀⣿⣾⠃⡸⠄⠀⡇⣯⠀⢠⣠⣤⡀⣀⠤⠚⠉⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣸⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⣇⠀⠀⠀⠀⠀⠀⢹⣶⣿⣯⣀⣀⣀⣛⣋⣀⣀⣀⢸⣿⣿⠀⣇⣁⣬⠤⠼⠶⢿⠀⠀⠹⡄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣰⠋⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢿⡀⠀⠀⠀⠀⢠⠟⣿⣯⣟⣿⣻⣟⡿⣽⣻⢯⣟⡿⣟⣿⡏⠀⠀⠀⠀⠀⠀⠘⣇⠀⠀⢻⡄⠀⠀⠀⠀⢀⣀⡤⠴⠒⠋⠉⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠳⢤⣀⣀⣠⠎⣾⡿⣯⣟⣿⣻⣟⡿⣟⡿⣿⣾⣿⢿⣾⣷⡀⠀⠀⠀⠀⠀⠀⠘⢀⠀⠀⢳⣤⠤⠖⠊⠉⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢸⣿⣽⣳⣟⣾⣳⢯⡿⣽⣻⢷⣻⣞⣯⢿⡽⣧⠀⠀⠀⠀⠀⠀⢀⡸⢧⣀⡸⠃⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣿⡟⣾⢳⡟⣾⣽⣯⡟⣷⣯⡟⣷⢻⡞⣯⡟⣿⣧⠀⠀⣤⣶⠚⠉⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢰⣿⡽⣯⢿⣽⣳⣟⡾⣽⣳⢯⡿⣽⢯⡿⣽⣻⢷⣻⣶⣶⠋⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣿⣯⢿⣽⣻⣞⡷⣯⣟⡷⣯⢿⡽⣯⢿⣽⣳⢯⣟⡷⣯⢿⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢸⣿⣞⡿⣞⡷⣯⣟⡷⣯⢿⡽⣯⢿⣽⣻⢾⣽⣻⢾⡽⣯⢿⡇⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠘⣷⣯⢿⣽⣻⢷⣻⣿⣽⣯⣿⣽⣻⢾⣽⣻⢾⡽⣯⢿⣽⣻⡇⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣿⣯⣟⡾⣽⢯⡷⣯⣟⡿⣽⣿⣟⡿⣾⡽⣯⢿⣽⣻⣞⡷⣧⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣿⡷⣯⢿⡽⣯⣟⡷⣯⣟⡷⣿⣯⣟⣷⣻⣽⣻⣞⡷⣯⣟⣷⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢿⡿⣽⢯⣟⡷⣯⣟⡷⣯⣟⣿⣟⣾⣳⣟⣾⣳⢯⣟⡷⣯⣿⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢸⣿⣽⣻⢾⣽⣳⢯⣟⡷⣯⣿⣿⣳⣟⣾⣳⢯⣟⡾⣽⣳⢿⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢸⣿⢾⣽⣻⢾⣽⣻⢾⣽⣳⣿⣿⢷⣻⢾⣽⣻⢾⡽⣯⣟⣿⡄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠸⣟⡿⣾⣽⣻⢾⣽⣻⣞⣷⣻⣿⡿⣽⣻⢾⡽⣯⣟⣷⣻⢾⡇⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣿⣟⡷⣯⣟⡿⣞⣷⣻⢾⣽⣿⣟⡷⣯⢿⣽⣳⣟⡾⣽⣻⡇⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣿⢯⣟⡷⣯⢿⡽⣾⣽⣻⢾⣿⣯⢿⣽⣻⣞⡷⣯⣟⡷⣯⡇⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣻⡿⣾⡽⣯⢿⣽⣳⢯⣟⣯⣿⣿⣻⣞⡷⣯⣟⡷⣯⣟⣷⡇⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
