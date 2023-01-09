//Program Pendeteksi Gejalan Seseorang Terinfeksi Covid-19
//Dibuat oleh Timmothy James Wijaya_32200010
//Universitas Bunda Mulia

#include <iostream>
#include <string.h>
#include <conio.h>
using namespace std;

int main()
{

	string Nama_Pasien, Umur, NIK, Alamat, Nomor_Telepon;
	string Batuk_Kering, Kelemahan, Kelemahan_Otot, Bersin, Pilek, Demam_Tinggi, Nyeri_tubuh, Batuk;
	string Lendir, Demam_Ringan, Kesulitan_Bernapas, Hilangnya_indra_pengecap_dan_perasa, Sakit_Tubuh;
	
	int a;
	cout << "Berapa pasien yang mendaftar?";
	cin >> a;
	cout << "Jumlah Daftar Pasien : " << a << endl;
	
	cout << "Selamat datang di program pemeriksaan gejala terinfeksi penyakit COVID-19" << endl;
	cout << "====================================================================================" << endl;
	cout << "Masukkan data pasien" << endl;
	cout << "------------------" << endl;
	for (int i = 1; i <= a; i++){
	cout << "Nama Pasien : ";
	cin >> Nama_Pasien;
	cout << "Umur : ";
	cin >> Umur;
	cout << "NIK : ";
	cin >> NIK;
	cout << "Alamat : ";
	cin >> Alamat;
	cout << "Nomor Telepon : ";
	cin >> Nomor_Telepon;
	cout << "|----------------------------------------------------------|" << endl;
	cout << "Apakah " << Nama_Pasien << " mengalami batuk kering(Y/T)?";
	cin >> Batuk_Kering;
	cout << "Apakah " << Nama_Pasien << " mengalami bersin(Y/T)?";
	cin >> Bersin;
	cout << "Apakah " << Nama_Pasien << " terkena pilek(Y/T)?";
	cin >> Pilek;
	cout << "Apakah " << Nama_Pasien << " mengalami batuk biasa(Y/T)?";
	cin >> Batuk;
	cout << "Apakah " << Nama_Pasien << " mengalami kesulitan bernapas(Y/T)?";
	cin >> Kesulitan_Bernapas;
	cout << "Apakah " << Nama_Pasien << " terkena demam tinggi(Y/T)?";
	cin >> Demam_Tinggi;
	cout << "Apakah " << Nama_Pasien << " terkena demam ringan(Y/T)?";
	cin >> Demam_Ringan;
	cout << "Apakah " << Nama_Pasien << " merasakan hilangnya indra pengecap dan perasa(Y/T)?";
	cin >> Hilangnya_indra_pengecap_dan_perasa;
	cout << "Apakah hidung " << Nama_Pasien << " berlendir(Y/T)?";
	cin >> Lendir;
	cout << "Apakah tubuh " << Nama_Pasien << " terasa sakit(Y/T)?";
	cin >> Sakit_Tubuh;
	cout << "Apakah " << Nama_Pasien << " mengalami nyeri dibagian tubuh(Y/T)?";
	cin >> Nyeri_tubuh;
	cout << "Apakah tubuh " << Nama_Pasien << " terasa lemah(Y/T)?";
	cin >> Kelemahan;
	cout << "Apakah otot " << Nama_Pasien << " terasa lemah(Y/T)?";
	cin >> Kelemahan_Otot;
}

	if(Batuk_Kering=="Y"&&Bersin=="Y")
	
	{
		cout << " | Anda Hanya Terkena Polusi Udara | " << endl;
	}
	
	if(Batuk=="Y"&&Lendir=="Y"&&Bersin=="Y"&&Pilek=="Y")
	
	{
		cout << " | Anda Hanya Mengalami Pilek Biasa | " << endl;
	}
	
	if(Batuk=="Y"&&Lendir=="Y"&&Bersin=="Y"&&Pilek=="Y"&&Sakit_Tubuh=="Y"&&Kelemahan_Otot=="Y"&&Demam_Ringan=="Y")
	
	{
		cout << " | Anda Hanya Terkena Sakit Flu | " << endl;
	}
	
	if(Batuk_Kering=="Y"&&Bersin=="Y"&&Nyeri_tubuh=="Y"&&Kelemahan=="Y"&&Demam_Tinggi=="Y"&&Kesulitan_Bernapas=="Y"&&Hilangnya_indra_pengecap_dan_perasa=="Y")
	
	{
		cout << "| Anda Positif Corona | " << endl;
	}
	
	getch();
}
