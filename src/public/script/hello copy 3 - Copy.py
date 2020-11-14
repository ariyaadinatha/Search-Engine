import os

location = os.getcwd()
docloc = location + '/uploaded/doc'


counter = 0
txtfiles = []  # list to store all txt files found at location
filebeginwithhello = []  # list to keep all files that begin with 'hello'
otherfiles = []  # list to keep any other file that do not match the criteria

for file in os.listdir(docloc):
    try:
        if file.endswith(".txt"):
            print("txt file found:\t"), file
            txtfiles.append(str(file))
            counter = counter+1

        # because some files may start with hello and also be a txt file
        elif file.startswith("hello") and file.endswith(".txt"):
            print("txt file found:\t"), file
            txtfiles.append(str(file))
            counter = counter+1

        elif file.startswith("hello"):
            print("hello files found: \t"), file
            filebeginwithhello.append(file)
            counter = counter+1

        else:
            otherfiles.append(file)
            counter = counter+1
    except Exception as e:
        raise e
        print("No files found here!")

print("Total files found:\t"), counter
