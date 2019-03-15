#include<iostream>
using namespace std;

long HCFOf2(long a, long b){
  while(a!=b){
    if(a<b) b-=a;
    else a-=b;
  }
  return a;
}

long LCMOf2(long a, long b){
  return a*b/HCFOf2(a,b);
}

long LCMOfArray(int arr[],int size){
  long LCM = arr[0];
  cout<<"Hi!";
  for(int i=1 ; i<size; i++){
    LCM = LCMOf2(LCM, arr[i]);
  }
  return LCM;
}

long HCFOfArray(int arr[], int size){
  long HCF = arr[0];
  for(int i=0; i<size; i++){
    HCF = HCFOf2(HCF, arr[i]);
  }
  return HCF;
}

long getTotalX(long LCM, long HCF){
  int count = 0;
  long tempLCM = LCM;
  while(HCF >= tempLCM){
    if(HCF%tempLCM == 0) count++;
    tempLCM+=LCM;
  }
  return count;
}

int main(){
  int n, m;
  cin>>n>>m;
  int a[n], b[m];

  for(int i=0; i<n;i++){
    cin>>a[i];
  }
  cout<<"Hi2!";
  for(int i=0; i<m;i++){
    cout<<"H ";
    cin>>b[i];

    cout<<b[i]<<"Hi"<<i<<" ";
  }
  cout<<"Hi!";

  cout<<getTotalX(LCMOfArray(a,n),HCFOfArray(b,m));
}
