import os
import nltk
import importlib
import math

from nltk.stem import PorterStemmer
from nltk.tokenize import sent_tokenize, word_tokenize
from nltk.corpus import stopwords

location = os.getcwd()
docloc = location + '/uploaded/doc/'

class TiapDokumen:
    ''' # FOR TESTING PURPOSE #
    def Testing():
        print('AAAAAA')
        return
    '''
    
    stop_words = set(stopwords.words('english'))
    
    def JadiinList(namafile):
        # NAMAFILE BELUM DISERTAI DIREKTORI
        
        # me return "data" yang hampir mirip dengan yang diminta
        # judul dokumen (pada kasus ini namafile)
        # semua kata pada dokumen (setelah stopwords dihilangkan dan distem)
        # banyaknya kata pada dokumen (tanda baca tidak dihilangkan)
        # kalimat pertama

        hasil = [namafile]
        

        # namafile ditambah dengan docloc
        namafile = docloc + namafile
        f = open(namafile, "r")
        File = f.read()
        
        idxTitik = File.find('.')
        # idxTitik adalah indeks titik berada
        
        isiFile = word_tokenize(File)
        filteredFile = [words for words in isiFile if not words in stop_words]
        
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
        '''
        
        hasil.append(filteredFile)
        hasil.append(len(filteredFile))
        hasil.append(File[:idxTitik])

        return hasil

    def CosineSimilarity(namafile, query):
        # me return data yang diminta
        # judul dokumen (pada kasus ini namafile)
        # nilai cosinus (dalam persen)
        # banyaknya kata pada dokumen (tanda baca tidak dihilangkan)
        # kalimat pertama
        
        data = JadiinList(namafile)
        # isi data sesuai pada fungsi di atas
        
        hasil = [namafile]
        
        TiapQuery = word_tokenize(query)
        filteredQuery = [words for words in TiapQuery if not words in stop_words]
        himpQuery = set(filteredQuery)
        
        dotProduct = 0
        pjgQuery = 0
        pjgFile = 0
        
        isiFile = data[1]        
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
        hasil.append(hasilCosine)
        hasil.append(data[2])
        hasil.append(data[3])

        return hasil
