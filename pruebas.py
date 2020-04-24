import re

contrasena = "keko20"

if re.fullmatch(r"^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,30}$", contrasena):
    print("Correo valido")
else:
    print("Correo invalido")