import os
import nltk
import importlib
import math

from nltk.stem import PorterStemmer
from nltk.tokenize import sent_tokenize, word_tokenize
from nltk.corpus import stopwords

location = os.getcwd()
docloc = location + '/uploaded/doc/'

class FirstSentence:
    def KalimatPertama(namafile):
        namafile = docloc + namafile
        f = open(namafile, "r")
        File = f.read()

        idxTitik = File.find('.')

        hasil = File[:idxTitik]

        ''' KALAU MAU GANTI DI SINI YA AR
        print(hasil)
        '''

        return hasil
