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
ps = PorterStemmer()
stop_words = set(stopwords.words('english'))


namafile = sys.argv[1]
query = sys.argv[2]
# NAMAFILE BELUM DISERTAI DIREKTORI

# me return himpunan kata yang ada di dalam file dan query
# setelah difilter

# namafile ditambah dengan docloc
namafile = docloc + namafile
f = open(namafile, "r")
File = f.read()

stemFiltered = []
filteredQuery = []
stemFilteredQuery = []

isiQuery = word_tokenize(query)
# membersihkan stop words dari query
for isi in isiQuery:
    if isi not in stop_words:
        filteredQuery.append(isi)

# stem query nya
for isi in filteredQuery:
    stemFilteredQuery.append(ps.stem(isi))


# hilangkan stop words dari dokumen dulu
isiFile = word_tokenize(File)
filtered = [words for words in isiFile if not words in stop_words]
# membersihkan stop words terlebih dahulu

# ngestem tiap words yang ada di dokumen
for isi in filtered:
    stemFiltered.append(ps.stem(isi))

hasil = []

himpQuery = set(stemFilteredQuery)
for tiapkataquery in himpQuery:
    hasil.append([tiapkataquery, stemFiltered.count(tiapkataquery)])

for isi in hasil:
    print(isi[0])
