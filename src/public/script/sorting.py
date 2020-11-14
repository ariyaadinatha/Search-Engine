import os
import nltk
import importlib
import math

from nltk.stem import PorterStemmer
from nltk.tokenize import sent_tokenize, word_tokenize
CK = importlib.import_module('cosineSim')

CK = CK.TiapDokumen
C = C.IsiDirektori

# Seharusnya jadi mainnya
Files = C.FilesInDirectory()
    
class ProsesLanjut:
    Hasil = []
    # di sini querynya udah ada
    Files = C.FilesInDirectory()
    for i in Files:
        Hasil.append(CK.CosineSimilarity(i, query))

    def SortCosineSim():
        JumlahDokumen = len(Hasil)
        for i in range(0, JumlahDokumen, 1):
            idxmax = i
            for j in range(i + 1, JumlahDokumen, 1):
                if(Hasil[idxmax][1] <= Hasil[j][1]):
                    idxmax = j
                    
            temp = Hasil[idxmax][1]
            Hasil[idxmax][1] = Hasil[j][1]
            Hasil[j][1] = temp

        return Hasil
