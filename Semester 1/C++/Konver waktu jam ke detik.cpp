#include <iostream>
using namespace std;

int main()
{
	typedef struct{ int hh;
					int mm;
					int ss;
				  } Jam;
				  
	Jam J;
	int TotalDetik;
	
	//ALGORTIMA
	cout << " Jam: ";
	cin >> J.hh;
	
	cout << " Menit : ";
	cin >> J.mm;
	
	cout << " Detik: ";
	cin >> J.ss;
	
	//sebagai output
	TotalDetik = (J.hh*3600) + (J.mm*60) + J.ss;
	cout << "Total detik = " << TotalDetik << endl;
	
	return 0;
}
