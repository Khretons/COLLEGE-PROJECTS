#include <iostream>
using namespace std;
  
int main()
{

int matriksA[10][10], matriksB[10][10], hasil[10][10], x, y, z, b, k;
int jumlah = 0;
 
 cout << "============================="<<endl;
 cout << "| PROGRAM PERKALIAN MATRIKS |"<<endl;
 cout << "============================="<<endl;
 cout << "Masukkan jumlah baris : ";
 cin >> b;
 cout << "Masukkan jumlah kolom : ";
 cin >> k;
 
 cout << endl;

//input matriks A 
 cout << "Matriks A"<<endl;
 cout << "---------"<<endl;
 for(x=1;x<=b;x++){
  for(y=1;y<=k;y++){
   cout << "Masukkan baris ke " << x << "kolom ke " << y << " : ";
   cin >> matriksA[x][y];
  }
 }
cout << endl;

//input matriks B
 cout << "Matriks B"<<endl;
 cout << "---------"<<endl;
 for(x=1;x<=b;x++){
  for(y=1;y<=k;y++){
   cout << "Masukkan baris ke " << x << "kolom ke " << y << " : ";
   cin >> matriksB[x][y];
  }
 }
cout << endl;
 
//output matriks A
 cout << "Matriks A"<<endl;
 cout << "---------"<<endl;
  for(x=1;x<=b;x++){
   for(y=1;y<=k;y++){
    cout << " " << matriksA[x][y];
   }
  cout << endl;
 }

//output matriks B
 cout << "Matriks B"<<endl;
 cout << "---------"<<endl;
  for(x=1;x<=b;x++){
   for(y=1;y<=k;y++){
    cout << " " << matriksB[x][y];
   }
  cout << endl;
 }
 
//perkalian matriks
  for(x=1;x<=b;x++){
   for(y=1;y<=k;y++){
    for(z=1;z<=5;z++){    
    jumlah = jumlah + matriksA[x][z]*matriksB[z][y];    
   }  
  hasil[x][y] = jumlah;
 jumlah = 0;
  }
 }
cout << endl;

//output perkalian matriks
 cout << "Hasil Perkalian Matriks"<<endl;
 cout << "-----------------------"<<endl;
  for(x=1;x<=b;x++){
   for(y=1;y<=k;y++){
    cout << hasil[x][y] << " ";
   }
  cout << endl;
  }
 cout << endl;
 
return 0;
}