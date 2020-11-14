import os
import nltk
import importlib
import math

from nltk.stem import PorterStemmer
from nltk.tokenize import sent_tokenize, word_tokenize

location = os.getcwd()
docloc = location + '/uploaded/doc/'

class TiapDokumen:
    ''' # FOR TESTING PURPOSE #
    def Testing():
        print('AAAAAA')
        return
    '''
    
    def JadiinList(namafile):
        # NAMAFILE BELUM DISERTAI DIREKTORI
        
        # me return "data" yang hampir mirip dengan yang diminta
        # judul dokumen (pada kasus ini namafile)
        # semua kata pada dokumen
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
        hasil.append(isiFile)
        hasil.append(len(isiFile))
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
        HimpQuery = set(TiapQuery)
        
        dotProduct = 0
        pjgQuery = 0
        pjgFile = 0
        
        isiFile = data[1]        
        stemQuery = []
        stemFile = []
        
        # Melakukan STEM terhadap query
        for isi in TiapQuery:
            stemQuery.append(ps.stem(isi))
        # Melakukan STEM terhadap isi File
        for isi in isiFile:
            stemFile.append(ps.stem(isi))

        # menghitung panjang vektor query (kuadratnya) dengan membandingkan
        # frekuensi kemunculan tiap kata pada query yang telah diSTEM
        for stemmed in set(stemQuery):
            pjgQuery += (stemQuery.count(stemmed))**2

        # menghitung panjang vektor file (kuadratnya) dengan membandingkan
        # frekuensi kemunculan tiap kata di dalam file yang telah diSTEM
        for stemmed in set(stemFile):
            pjgFile += (stemFile.count(stemmed))**2

        # menghitung dot product antara query dengan tiap kata di dalam file
        # mengalikan frekuensi kemunculan kata pada query dengan pada file
        for stemmed in set(stemQuery):
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
