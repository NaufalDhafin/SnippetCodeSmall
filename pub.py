import os

com = input("Publish : ")
os.system("git add .")
os.system(f'git commit -m "{com}"')
os.system('git push')
print("\n\n Berhasil Upload")