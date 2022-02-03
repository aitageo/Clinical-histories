#por aitageo

import fitz
import re
import os
import subprocess
import colorama
from colorama import *
init()


end_color = Fore.LIGHTWHITE_EX

pdf = os.path("http://localhost:8282/javascript_1/usuarios.html")
print(pdf)
document = fitz.open(pdf)

page = document.loadPage(0)
text = page.getText("text")

palabra = "nombre"

if re.search(palabra,text) is not None:
    print(Fore.YELLOW +"Palabra encontrada")

else:
    print("No se encontro el dato")
