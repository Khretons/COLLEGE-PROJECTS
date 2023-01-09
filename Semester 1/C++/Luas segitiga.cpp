//Timmothy James Wijaya 32200010

#include <iostream>
using namespace std;

void LuasSegitiga()
{
	int a, t, N;
	float luas (float a, float t);
	
	cout << "Total segitiga yang akan dihitung : ";
	cin >> N;
	for( int i = 1; i <= N; i++){
	cout << "----------------------------" << endl;
	cout << "Masukkan panjang alas : ";
	cin >> a;
	cout << "Masukkan tinggi segitiga : ";
	cin >> t;
	
	cout << "Luas segitiga adalah : " << 0.5*a*t << endl;
	}
}

int main()
{
	LuasSegitiga();
}
