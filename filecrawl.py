import os

files = []
for dirname, dirnames, filenames in os.walk('.'):
    for filename in filenames:
    	if filename.endswith(".html"):
        	files.append(os.path.join(dirname, filename))
print(files)
for filename in files:
	f = open(filename, "r+")
	print(f.read())

print("----------------------")
print(open("./index2.html", "r+").read())