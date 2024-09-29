#include<iostream>
using namespace std;

class Set{
 private:
 int i,j;

 public:
 void Subset(int *arrA,int n1, int *arrB, int n2){
    int c=0;

    for(i=0;i<n1;i++){
        for(j=0;j<n2;j++){
            if(arrA[i]== arrB[j])
            c++;
        if(c! = n1)
           cout<<"SET A is not a subset of SET B"<<endl;
        else
           cout<<"SET A is a subset of SET B"<<endl;
        }
    }
 }


int c1=0;

    for(i=0; i<n2 ; i++){
        for(j=0;j<n1;j++){
            if(arrB[i]== arrA[j])
            c1++;
        if(c! = n2)
           cout<<"SET B is not a subset of SET A"<<endl;
        else
           cout<<"SET B is a subset of SET A"<<endl;
        }
    }
 
 cout<<"........................................................................"<<endl;


 void UnionInter(int *SetA,int sizeA,int *SetB,int n2){
 

      int uSize=n1+n2;
      int USet[uSize];
      int unionSet[uSize];
      int iSet[uSize];
      int x=0,y=0;

         for(i=0;i<n1; i++)
         {
            USet[x]=SetA[i];
            x++;
         }

         for(i=0;i<n2;i++)
         {
            for(j=i+1;j<x;j++)
            {
               if(USet[i] == USet[j])
               {
                  iSet[y]=uSet[i];
                  y++;

                     for(int k=j;k<x-1;k++)
                     uSet[k]=uSet[k+1];
                     x--;
               }
               else{
                  continue;
               }

            }
         }
      cout<<"Union of two sets is :{";
         for(i=o;i<x;;i++)
            cout<< uSet[i] << " ";
            cou << "}";

            if(y! = 0)
            {
               cout<<"Intersection of two sets:{";
                 for(i=0;i<y;i++)
                     cout<< iSet[i] <<" ";
                       cout<<"}";

            }
            else{
               cout<<"Intersection not found";
            }
            cout<< endl;
            cout<< "..........................................................................";
 }

void Complement(int *SetA, int n1, int *SetB,int n2){

      int sizeU;
      cout<<"Enter the no. of elements of universal set: ";
      cin>>sizeU;

      cout<<"Enter the elements of universal set:";
      int U[sizeU];

      for(i=0;i<sizeU;i++)
      cin>>U[i];

      int AC[sizeU],p=0;c=0;

         for( i=0;i<sizeU;i++)
         {
            for(j=0;j<n1; j++)
            {
               if(I[i]==SetA[j])
               c++;

               else
                  continue;
            }
            if( c==0)
            {
               AC[p]=U[i];
               p++;
            }
            c=0;
         }
         cout<<endl;

         cout<<"Complement of SET A is:{";
            for(i=0; i<p; i++)
               cout<< AC[i] << " ";
                  cout<< "}"<<endl;


         int BC[sizeU],q=0,ctr=0;

         for(i=0;i<sizeU;i++)
         {
            for(j=0; j<n2;j++)
            {
              if(U[i] == SetB[j])
              ctr++;

              else
                  continue;
            }
            if(ctr ==0)
            {
               BC[q] =U[i];
               q++;
            }
            ctr=0;
         }
         cout<< "Complement of SET b is:{";
              for(i=0;i<q; i++)
              cout<< BC[i] << " ";
              cout<<"}" <<endl;
 
                  cout<<"................................................";
         }
 void setNsymDiff(int *setA,int n1,int *setB,int n2){
     int ABDif[100],q=0,ctr=0;

     for(i=0; i<n1; i++)
     {
      for(j=0; j<n2; j++)
      {
         if(setA[i] == setB[j])
         c++;

         else 
           continue;
      }

      if(ctr ==0)
      {
         ABDif[q]=setA[i];
         q++;
      }
         ctr=0;
     }
       cout<< "Set difference A-B is: {";
       for(i=0; i<q; i++)
         cout<< ABDif[i] << " ";
          cout<<"}"<< endl;

      int BADif[100],p=0,c=0;

      for(i=0;i<n2; i++)
      {
         for(j=0; j<n2; j++)
         {
            if(setB[i] == setA[j])
            c++;

            else  
               continue;
         }
           if(c == 0)
           {
             BADif[p]=setB[i];
             p++;
           }
           c=0;
      }

      cout< "Set difference B-A is:{";
         for(i=0;i<p;i++)
         {
            cout<< BADif[i]<< " ";
         }
         cout<<"}"<<endl;


         int uSize=q+p;
         int stmDif[uSize];
         int x=0,y=0;
         

         for(i=0; i<q; i++)
         {
            symDif[x]=ABDif[i];
            x++;
         }
         cout<< "Symmetric difference between two sets is:{";
            for(i=0;i<x;i++)
               cout<< symDif[i] << " ";
               cout<<"}";

               cout<< endl;
               cout<<"............................................................................"<< endl;
   }

   void cartesian(int *setA,int n1, int *setB,int n2)
   {
      int n1B, n2A, x=0,y=0;

      n1B=n1*n2;
      n2A=n2B;

      int AB[n1B*2],BA[n2A*2];

      for(i=0;i<n1;i++)
      {
         for(j=0;j<n2;j++)
         {
            BA[y++]=setB[i];
            BA[y++]=setA[j];
         }
      }
      cout<< "A X B ={";
      for(i=0;i<x;i++)
      {
         if(i%2 == 0)
            cout<<"(";
               cout<< AB[i] <<" ";

         if(i%2 !=0)
            cout<< ")";
      }
      cout<< "}" << endl;
      cout<< "B X A = {";
       for(i=0; i<y; i++)
       {
         if(i%2 == 0)
            cout<<"(";
               cout<< BA[i] <<" ";

         if(i%2 !=0)
            cout<< ")";
       }
       cout<< "}" << endl;
       
       cout<< "................................................"<< endl;
   }
   };

   int main()
   {
      cout<<endl;
      int i,n1,n2;

      cout<< "Enter the no.of elements in SET A:";
      cin>> n1;

      int arrA[n1];

      cout<< " Enter the elements:";
         for(i=0; i<n1; i++)
         cin>> arrA[i];

      cout<< "Enter the no.of elements in SET A:";
      cin>> n2;

      int arrB[n2];

      cout<< " Enter the elements:";
         for(i=0; i<n2; i++)
         cin>> arrB[i];

         cout<< "................................................" <<endl;

      SET ob;

      cout << "\tSUBSET\n" << endl;
      ob.Subset(arrA,n1,arrB,n2);

      
      cout << "\tUNION and INTERSECTION\n" << endl;
      ob.UnionInter(arrA,n1,arrB,n2);


      cout << "\tCOMPLEMENT\n" << endl;
      ob.Complement(arrA,n1,arrB,n2);


      cout << "\tSET and SYMMETRIC DIFFERENCE\n" << endl;
      ob.setNSymDiff(arrA,n1,arrB,n2);


      cout << "\tCARTESIAN PRODUCT\n" << endl;
      ob.cartesian(arrA,n1,arrB,n2);


      return 0;
   }
   