import os

location = os.getcwd()
docloc = location + '/uploaded/doc'

class IsiDirektori:
    def FilesInDirectory():
        txtfiles = []  # list to store all txt files found at location

        for file in os.listdir(docloc):
            try:
                if file.endswith(".txt"):
                    txtfiles.append(file)
            except Exception as e:
                return []

        return txtfiles
