import os
import nltk
import importlib
import math
import sys

from nltk.stem import PorterStemmer
from nltk.tokenize import sent_tokenize, word_tokenize
from nltk.corpus import stopwords

location = os.getcwd()
docloc = location + '/uploaded/doc/'


stop_words = set(stopwords.words('english'))

namafile = sys.argv[1]
# NAMAFILE BELUM DISERTAI DIREKTORI

# ngereturn semua kata pada dokumen (setelah stopwords dihilangkan dan distem)
# namafile ditambah dengan docloc
namafile = docloc + namafile
f = open(namafile, "r")
File = f.read()

isiFile = word_tokenize(File)
filteredFile = [words for words in isiFile if not words in stop_words]

hasil = filteredFile

# me return data yang diminta
# banyaknya kata pada dokumen (sudah difilter)

data = hasil
# isi data sesuai pada fungsi di atas
''' KALAU MAU NGEPRINT, GANTI DI SINI YA AR
    print(len(data))
    '''
print(len(data))
