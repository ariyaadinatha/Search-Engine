import os

location = os.getcwd()
docloc = location + '/uploaded/doc'


counter = 0
txtfiles = []  # list to store all txt files found at location

for file in os.listdir(docloc):
    try:
        if file.endswith(".txt"):
            counter = counter+1
    except Exception as e:
        raise e
        print("No files found here!")

print(counter)
