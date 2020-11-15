import os
import nltk
import importlib
import math

from nltk.stem import PorterStemmer
from nltk.tokenize import sent_tokenize, word_tokenize
from nltk.corpus import stopwords

location = os.getcwd()
docloc = location + '/uploaded/doc/'
ps = PorterStemmer()

class TiapDokumen:
    ''' # FOR TESTING PURPOSE #
    def Testing():
        print('AAAAAA')
        return
    '''
    
    stop_words = set(stopwords.words('english'))
    
    def JadiinList(namafile, query):
        # NAMAFILE BELUM DISERTAI DIREKTORI
        
        # me return himpunan kata yang ada di dalam file dan query
        # setelah difilter

        # namafile ditambah dengan docloc
        namafile = docloc + namafile
        f = open(namafile, "r")
        File = f.read()
        
        idxTitik = File.find('.')
        # idxTitik adalah indeks titik berada
        
        isiFile = word_tokenize(File)
        filtered = [words for words in isiFile if not words in stop_words]
        # membersihkan stop words terlebih dahulu

        stemFiltered = []

        isiQuery = word_tokenize(query)
        # membersihkan stop words dari query
        for isi in isiQuery:
            if isi not in stop_words:
                filtered.append(isi)

        # ngestem tiap words yang ada
        for isi in filtered:
            stemFiltered.append(ps.stem(isi))
            
        ''' # FOR TESTING PURPOSE #
        for isi in listIsi:
            hasilstem = ps.stem(isi)
            listStemmed.append(hasilstem)
            
        frekIsi = []
        elmtIsi = []
        listIsi = set(isiFile)
        listStemmed = []

        for isi in listIsi:
            elmtIsi.append(isi)
            elmtIsi.append(listStemmed.count(ps.stem(isi)))
            frekIsi.append(elmtIsi)
        # FOR TESTING PURPOSE # '''

        ''' KALAU ARRAY PAKE YANG INI
        return stemFiltered
        '''

        # ngereturn himpunan kata yang udah difilter
        return set(stemFiltered)

