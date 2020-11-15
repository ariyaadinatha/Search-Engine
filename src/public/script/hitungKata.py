import os
import nltk
import importlib
import math

from nltk.stem import PorterStemmer
from nltk.tokenize import sent_tokenize, word_tokenize
from nltk.corpus import stopwords

location = os.getcwd()
docloc = location + '/uploaded/doc/'

class HitungKata:
    ''' # FOR TESTING PURPOSE #
    def Testing():
        print('AAAAAA')
        return
    '''
    
    stop_words = set(stopwords.words('english'))
    
    def ListTiapKata(namafile):
        # NAMAFILE BELUM DISERTAI DIREKTORI
        
        # ngereturn semua kata pada dokumen (setelah stopwords dihilangkan dan distem)

        # namafile ditambah dengan docloc
        namafile = docloc + namafile
        f = open(namafile, "r")
        File = f.read()
        
        isiFile = word_tokenize(File)
        filteredFile = [words for words in isiFile if not words in stop_words]
        
        hasil = filteredFile

    def BanyakKata(namafile):
        # me return data yang diminta
        # banyaknya kata pada dokumen (sudah difilter)
        
        data = ListTiapKata(namafile)
        # isi data sesuai pada fungsi di atas

        ''' KALAU MAU NGEPRINT, GANTI DI SINI YA AR
        print(len(data))
        '''
        return len(data)
