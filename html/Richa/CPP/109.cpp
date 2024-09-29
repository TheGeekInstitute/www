#include <iostream>
using namespace std;

class Set {
private:
    int i, j;

public:
    void Subset(int *arrA, int n1, int *arrB, int n2) {
        int c = 0;

        for (i = 0; i < n1; i++) {
            for (j = 0; j < n2; j++) {
                if (arrA[i] == arrB[j])
                    c++;
            }
        }
        if (c == n1)
            cout << "SET A is a subset of SET B" << endl;
        else
            cout << "SET A is not a subset of SET B" << endl;
    }

    void UnionInter(int *SetA, int n1, int *SetB, int n2) {
        int unionSize = n1 + n2;
        int USet[unionSize];
        int intersection[unionSize];
        int intersectionSize = 0;

        // Union
        for (i = 0; i < n1; i++) {
            USet[i] = SetA[i];
        }
        for (i = 0; i < n2; i++) {
            bool found = false;
            for (j = 0; j < n1; j++) {
                if (SetB[i] == SetA[j]) {
                    found = true;
                    break;
                }
            }
            if (!found) {
                USet[n1++] = SetB[i];
            } else {
                intersection[intersectionSize++] = SetB[i];
            }
        }

        cout << "Union of two sets is: {";
        for (i = 0; i < n1; i++)
            cout << USet[i] << " ";
        cout << "}" << endl;

        if (intersectionSize != 0) {
            cout << "Intersection of two sets: {";
            for (i = 0; i < intersectionSize; i++)
                cout << intersection[i] << " ";
            cout << "}" << endl;
        } else {
            cout << "Intersection not found" << endl;
        }
    }
    
void Complement(int *SetA, int n1, int *SetB, int n2) {
    int sizeU;
    cout << "Enter the number of elements of universal set: ";
    cin >> sizeU;

    cout << "Enter the elements of universal set: ";
    int U[sizeU];

    for (int i = 0; i < sizeU; i++)
        cin >> U[i];

    int AC[sizeU], p = 0, c = 0;

    for (int i = 0; i < sizeU; i++) {
        for (int j = 0; j < n1; j++) {
            if (U[i] == SetA[j])
                c++;
            else
                continue;
        }
        if (c == 0) {
            AC[p] = U[i];
            p++;
        }
        c = 0;
    }
    cout << endl;

    cout << "Complement of SET A is: {";
    for (int i = 0; i < p; i++)
        cout << AC[i] << " ";
    cout << "}" << endl;

    int BC[sizeU], q = 0, ctr = 0;

    for (int i = 0; i < sizeU; i++) {
        for (int j = 0; j < n2; j++) {
            if (U[i] == SetB[j])
                ctr++;
            else
                continue;
        }
        if (ctr == 0) {
            BC[q] = U[i];
            q++;
        }
        ctr = 0;
    }
    cout << "Complement of SET B is: {";
    for (int i = 0; i < q; i++)
        cout << BC[i] << " ";
    cout << "}" << endl;

    cout << "................................................" << endl;
}
void setNsymDiff(int *setA, int n1, int *setB, int n2) {
    int ABDif[100], q = 0, ctr = 0;

    for (int i = 0; i < n1; i++) {
        for (int j = 0; j < n2; j++) {
            if (setA[i] == setB[j])
                ctr++;
        }

        if (ctr == 0) {
            ABDif[q] = setA[i];
            q++;
        }
        ctr = 0;
    }

    cout << "Set difference A-B is: {";
    for (int i = 0; i < q; i++)
        cout << ABDif[i] << " ";
    cout << "}" << endl;

    int BADif[100], p = 0, c = 0;

    for (int i = 0; i < n2; i++) {
        for (int j = 0; j < n1; j++) {
            if (setB[i] == setA[j])
                c++;
        }
        if (c == 0) {
            BADif[p] = setB[i];
            p++;
        }
        c = 0;
    }

    cout << "Set difference B-A is: {";
    for (int i = 0; i < p; i++) {
        cout << BADif[i] << " ";
    }
    cout << "}" << endl;

    int symDif[q + p], x = 0;

    for (int i = 0; i < q; i++) {
        symDif[x] = ABDif[i];
        x++;
    }
    for (int i = 0; i < p; i++) {
        symDif[x] = BADif[i];
        x++;
    }

    cout << "Symmetric difference between two sets is: {";
    for (int i = 0; i < x; i++)
        cout << symDif[i] << " ";
    cout << "}" << endl;

    cout << "............................................................................" << endl;
}
void cartesian(int *setA, int n1, int *setB, int n2) {
    int n1B = n1 * n2;
    int n2A = n2 * n1;
    int x = 0, y = 0;

    int AB[n1B * 2], BA[n2A * 2];

    for (int i = 0; i < n1; i++) {
        for (int j = 0; j < n2; j++) {
            AB[y++] = setA[i];
            AB[y++] = setB[j];
        }
    }

    cout << "A X B = {";
    for (int i = 0; i < y; i++) {
        if (i % 2 == 0)
            cout << "(";
        cout << AB[i] << " ";

        if (i % 2 != 0)
            cout << ")";
    }
    cout << "}" << endl;

    cout << "B X A = {";
    for (int i = 0; i < y; i++) {
        if (i % 2 == 0)
            cout << "(";
        cout << AB[i + 1] << " ";

        if (i % 2 != 0)
            cout << ")";
    }
    cout << "}" << endl;

    cout << "................................................" << endl;
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
   


    
    

