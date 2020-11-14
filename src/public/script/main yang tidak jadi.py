import os
import nltk
import importlib
import math

from nltk.stem import PorterStemmer
from nltk.tokenize import sent_tokenize, word_tokenize
CK = importlib.import_module('cosineSim')

CK = CK.TiapDokumen

# Seharusnya jadi mainnya
Files = C.FilesInDirectory()
listSemuaKata = []
    
for tiapfile in Files:
    InitProses = CK.JadiinList(tiapfile)
    for isiFile in InitProses[1]:
        listSemuaKata.append(isiFile)
    DokumenTersedia.append(InitProses)

# Setiap term dari dalam filenya sudah ada
HimpSemuaKata = set(listSemuaKata)
