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


namafile = sys.argv[1]
namafile = docloc + namafile
f = open(namafile, "r")
File = f.read()

idxTitik = File.find('.')

hasil = File[:idxTitik]

print(hasil)
