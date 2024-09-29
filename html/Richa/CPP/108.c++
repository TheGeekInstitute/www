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

    // Other set operations (Complement, set difference, symmetric difference, Cartesian product) can be implemented similarly
};

int main() {
    int n1, n2;

    cout << "Enter the number of elements in SET A: ";
    cin >> n1;

    int arrA[n1];

    cout << "Enter the elements of SET A: ";
    for (int i = 0; i < n1; i++)
        cin >> arrA[i];

    cout << "Enter the number of elements in SET B: ";
    cin >> n2;

    int arrB[n2];

    cout << "Enter the elements of SET B: ";
    for (int i = 0; i < n2; i++)
        cin >> arrB[i];

    cout << "................................................" << endl;

    Set ob;

    cout << "\tSUBSET" << endl;
    ob.Subset(arrA, n1, arrB, n2);

    cout << "\tUNION and INTERSECTION" << endl;
    ob.UnionInter(arrA, n1, arrB, n2);

    // Other set operations can be called similarly

    return 0;
}
