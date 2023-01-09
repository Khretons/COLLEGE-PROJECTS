#include <iostream.>
using namespace std;

int main()
{
	int x,y;
	int matriks1[2][3]={{2,4,6},{3,6,9}};
	int matriks2[2][3]={{1,3,5},{4,8,12}};
	int matriks3[2][3];
	
		cout << "Penjumlahan Matriks"<<endl;
		cout << "-----------------------"<<endl;
		cout << "Matriks Pertama : "<< endl;
	
	for(int x=0;x<2;x++)
	{
		for(int y=0;y<3;y++)
	{
		
		cout << matriks1[x][y]<<" ";
	}
		cout << endl;
	}
	cout << endl;
	
		cout << "-------------------"<<endl;
			cout << "Matriks Kedua : "<< endl;
	for(int x=0;x<2;x++)
	{
		for(int y=0;y<3;y++)
		{
			cout << matriks2[x][y]<<" ";
		}
	cout << endl;
	}
cout << endl;

			cout << "------------------"<<endl;
			cout << "Jumlah Matriks pertama & kedua : "<< endl;
	for(int x=0;x<2;x++)
	{
		for(int y=0;y<3;y++)
		{
			matriks3[x][y]=matriks1[x][y]+matriks2[x][y];
		
			cout << matriks3[x][y]<<" ";
		}
		cout << endl;
	}
	return 0;
}

