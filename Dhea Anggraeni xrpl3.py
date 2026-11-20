# menghitung rata rata spmb

a =float(input("nilai mtk"))
b =float(input("nilai b.indo"))
c =float(input("nilai b.inggris"))

#proses
nilai = ( a + b + c ) /3

if nilai >= 85 :
    print("LULUS")
elif nilai >= 75 :
    print("TIDAK LULUS")
else:
    print("PERLU DIPERBAIKI")
