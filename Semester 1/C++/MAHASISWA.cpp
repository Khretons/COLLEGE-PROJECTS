#include <iostream>
#include <conio.h>
using namespace std;

int main()
{
int i,j;
float ratarata;
string mhs1[6][3]={{"359601","Adi Purwanto","3.82"},{"359604","Fitria Susanti","2.97"},{"359605","Dewi Ramadhani","2.74"},{"359606","Andrie Yanto","3.02"},{"359608","Cahyo Kumolo","2.05"},{"359610","Anton Previanto","3.99"}},
       mhs2[6][3]={{"359603","Irwanti Sukma","2.81"},{"359609","Melati Rahmi","3.01"},{"359614","Gus Hamid","2.46"},{"359602","Basuki Rahmat","3.82"},{"359616","Kirana Dewi","2.97"},{"359607","Cantika Putri","2.74"}},
       mhs3[12][3];

cout<<"Matriks Mhs1"<<endl;
for (i=0;i<6;i++)
{
    for (j=0;j<3;j++)
   {
    cout<<mhs1[i][j]<<"    |    ";
    mhs3[i][j]=mhs1[i][j];
   }cout<<endl;
}
cout<<"\nMatriks Mhs2"<<endl;
for (i=0;i<6;i++)
{
    for (j=0;j<3;j++)
   {
    cout<<mhs2[i][j]<<"    |    ";
    mhs3[i+6][j]=mhs2[i][j];
   }cout<<endl;
}
cout<<"\nTabel Mahasiswa 3"<<endl;
for (i=0;i<12;i++)
{
    for (j=0;j<3;j++)
   {
    cout<<mhs3[i][j]<<"    |    ";
   }cout<<endl;
}
cout<<"\nnilai rata rata mahasiswa 3: " <<(3.82+2.97+2.74+3.02+2.05+3.99+2.81+3.01+2.46+3.82+2.97+2.74)/12;
getch();
}
