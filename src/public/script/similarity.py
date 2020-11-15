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


query = sys.argv[1]
namafile = sys.argv[2]


# NAMAFILE BELUM DISERTAI DIREKTORI

# ngereturn semua kata pada dokumen (setelah stopwords dihilangkan dan distem)

# namafile ditambah dengan docloc
namafile = docloc + namafile
f = open(namafile, "r")
File = f.read()

isiFile = word_tokenize(File)
filteredFile = [words for words in isiFile if not words in stop_words]

hasil = filteredFile

# me return nilai cosinus (dalam persen)


isiFile = hasil
# isiFile dari fungsi ListTiapKata

TiapQuery = word_tokenize(query)
filteredQuery = [words for words in TiapQuery if not words in stop_words]
himpQuery = set(filteredQuery)

dotProduct = 0
pjgQuery = 0
pjgFile = 0

stemQuery = []
stemFile = []

# Melakukan STEM terhadap query
for isi in filteredQuery:
    stemQuery.append(ps.stem(isi))
    himpStemQuery = set(stemQuery)

# Melakukan STEM terhadap isi File
for isi in isiFile:
    stemFile.append(ps.stem(isi))
    himpStemFile = set(stemFile)

# menghitung panjang vektor query (kuadratnya) dengan membandingkan
# frekuensi kemunculan tiap kata pada query yang telah diSTEM
for stemmed in himpStemQuery:
    pjgQuery += (stemQuery.count(stemmed)) ** 2

# menghitung panjang vektor file (kuadratnya) dengan membandingkan
# frekuensi kemunculan tiap kata di dalam file yang telah diSTEM
for stemmed in set(himpStemFile):
    pjgFile += (stemFile.count(stemmed)) ** 2

# menghitung dot product antara query dengan tiap kata di dalam file
# mengalikan frekuensi kemunculan kata pada query dengan pada file
for stemmed in himpStemQuery:
    frekQuery = stemQuery.count(stemmed)
    frekFile = stemFile.count(stemmed)
    dotProduct += frekQuery * frekFile

# hasil kali panjang (kuadrat)
panjangKuadrat = pjgQuery * pjgFile

# menghitung hasil cosinus dan dikonversi ke persen
hasilCosine = 100 * dotProduct / (panjangKuadrat ** 0.5)

# memasukkan data yang harus di print pada search engine ke dalam list
hasilSimilarity = float("%0.2f" % hasilCosine)

print(hasilSimilarity)
