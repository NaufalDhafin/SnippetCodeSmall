import os

com = input("Publish : ")
os.system("git add .")
os.system(f'git commit -m "{com}"')
os.system('git push -u origin main')
print("\n\n Berhasil Upload")