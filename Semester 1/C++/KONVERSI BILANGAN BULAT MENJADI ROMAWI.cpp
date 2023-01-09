#include<iostream>
using namespace std;

int main()
{
	int x;
	
	cout << "Konversi bilangan bulat menjadi angka romawi"<< endl;
	cout << "============================================="<< endl;
	
	cout << "Masukkan angka 1-10 : ";
	cin >> x;
	
	cout << "-----------------------------" << endl;
	if(x==1){
		cout << "I" << endl;
	}
	if(x==2){
		cout << "II" << endl;
	}
	if(x==3){
		cout << "III" << endl;
	}
	if(x==4){
		cout << "IV" << endl;
	}
	if(x==5){
		cout << "V" << endl;
	}
	if(x==6){
		cout << "VI" << endl;
	}
	if(x==7){
		cout << "VII" << endl;
	}
	if(x==8){
		cout << "VIII" << endl;
	}
	if(x==9){
		cout << "IX" << endl;
	}
	if(x==10){
		cout << "X" << endl;
	}
	else{
		cout << "x > 10 adalah error"<< endl;
	}
	
	return 0; 
}
