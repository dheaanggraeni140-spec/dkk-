nilai =int(input("masukan nilai"))

if nilai< 0 or nilai > 100:
    print("nilai tidak valid")
elif nilai >= 85:
    print ("grade A")
elif nilai >= 70:
    print("grade B")
elif nilai >= 55:
    print("grade C")
elif nilai >= 40:
    print("grade D")
else:
    print("grade E")