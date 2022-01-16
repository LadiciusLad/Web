import qrcode
import os
import sys
from PIL import Image, ImageDraw
name = sys.argv[2]
url = sys.argv[1]

img = qrcode.make()

message = ''
qr = qrcode.QRCode(
    version=1,
    error_correction=qrcode.constants.ERROR_CORRECT_H,
    box_size=10,
    border=4,
)
path = r'C:xampp\phpMyAdmin\htdocs\web\qrcode'
qr.add_data(url)
qr.make(fit=True)
img = qr.make_image(fill_color="black", back_color="white").convert('RGB')
if os.path.isfile('C:/xampp/phpMyAdmin/htdocs/web/qrcode/'+name+'.jpg'):
    message='error'
else:
    img.save('C:/xampp/phpMyAdmin/htdocs/web/qrcode/'+name+'.jpg','JPEG')
