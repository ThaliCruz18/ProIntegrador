import qrcode
import smtplib
from email.mime.text import MIMEText
from email.mime.multipart import MIMEMultipart

# Genera el enlace con los parámetros para el registro
base_url = "192.168.243.100/registro/registroSalida.php?"#normalmente va a ser localhost seguido del nombre de la carpeta despues el nomnbre del arcivo php
parametros = {"curp": "GOPB020604HMCNRRA5"}  # datos que se van a enviar al archivo php para 
#registrar la salida, bastaria con enviar, la curp o rfc
enlace_registro = base_url + "&".join([f"{key}={value}" for key, value in parametros.items()])

# Genera el código QR
qr = qrcode.QRCode(
    version=1,
    error_correction=qrcode.constants.ERROR_CORRECT_L,
    box_size=10,
    border=4,
)
qr.add_data(enlace_registro)
qr.make(fit=True)
img = qr.make_image(fill_color="black", back_color="white")
img.save("registro_qr.png")##Nombre y ubicacion del qr generado
