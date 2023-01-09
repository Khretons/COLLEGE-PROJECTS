// TUGAS KELOMPOK PEMDAS
// ANGGOTA KELOMPOK :
// Timmothy James Wijaya, Feri Andika, Jorio Francesco, Wilson Ang Jaya, Reynardi Gunawan

#include <iostream>
#include <string.h>
using namespace std;

// DEKLARASI
int matriks1[20][30], matriks2[20][30], invers_matriks2[20][30], penjumlahan[20][30], pengurangan[20][30], perkalian[20][30], pembagian[20][30], n, b, k, x, y;

// penjumlahan
void jumlah(){

cout << " Hasil Penjumlahan : " << endl;
cout << " ------------------- " << endl;
	for (x=1;x<=b;x++){
		for (y=1;y<=k;y++){
			penjumlahan[x][y]=matriks1[x][y]+matriks2[x][y];
				cout << " " << penjumlahan[x][y];
		}
		cout << endl;
	}
cout << endl;
}

// pengurangan
void kurang(){
	
cout << " Hasil Perkurangan : " << endl;
cout << " ------------------- " << endl;
	for (x=1;x<=b;x++){
		for (y=1;y<=k;y++){
			pengurangan[x][y]=matriks1[x][y]-matriks2[x][y];
				cout << " " << pengurangan[x][y];
		}	
		cout << endl;	
	}
cout << endl;
}

// perkalian
void kali(){
		
cout << " Hasil Perkalian : " << endl;
cout << " ----------------- " << endl;
	for (x=1;x<=b;x++){
		for (y=1;y<=k;y++){
		perkalian[x][y]=matriks1[x][y]*matriks2[x][y];			
			cout << " " << perkalian[x][y];
		}
		cout << endl;
	}
cout << endl;
}
		
// nama kelompok
void nama()
	{
	string Nama[5]={"Timmothy James Wijaya", "Feri Andika", "Jorio Francesco", "Wilson Ang Jaya", "Reynardi Gunawan"};
	
	cout << " ============================ " << endl;
	cout << " Anggota Kelompok : " << endl;
		for (int n=0; n <= 4; n++){			
			cout << n+1 << ". " << Nama[n]; 
			cout << endl;
		}
	cout << " ============================ ";
	}

// main program

int main()
{
	cout << " == Program Matematika Matriks == " << endl;
	cout << " ================================ " << endl;
	cout << " Masukkan Jumlah Baris : ";
	cin >> b;
	
	cout << " Masukkan Jumlah Kolom : ";
	cin >> k;
	
	cout << endl;
	
	cout << " Matriks 1 " << endl;
	cout << " ========= " << endl;
	for (x=1;x<=b;x++){
		for (y=1;y<=k;y++){
			cout << " Masukkan baris ke " << x << " kolom ke " << y << " : ";
				cin >> matriks1[x][y];
		}	
	}
cout << endl;

	cout << " Matriks 2 " << endl;
	cout << " ========= " << endl; 
	for (x=1;x<=b;x++){
		for (y=1;y<=k;y++){
			cout << " Masukkan baris ke " << x << " kolom ke " << y << " : ";
				cin >> matriks2[x][y];
		}		
	}
cout << endl;

	jumlah();
	kurang();
	kali();
	nama();
	return 0;
}
