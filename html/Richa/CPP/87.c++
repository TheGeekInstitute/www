#include <iostream>
using namespace std;

int main() {
    int n = 0, i = 0, j = 0;

    cout << "Enter the size of matrix: ";
    cin >> n;

    // Declare matrices
    int mat1[n][n], mat2[n][n], mat3[n][n];

    // Input for mat1
    cout << "Enter elements of matrix 1:" << endl;
    for (i = 0; i < n; i++) {
        for (j = 0; j < n; j++) {
            cin >> mat1[i][j];
        }
    }

    // Display mat1
    cout << "Matrix 1:" << endl;
    for (i = 0; i < n; i++) {
        for (j = 0; j < n; j++) {
            cout << mat1[i][j] << " ";
        }
        cout << endl;
    }

    // Input for mat2
    cout << "Enter elements of matrix 2:" << endl;
    for (i = 0; i < n; i++) {
        for (j = 0; j < n; j++) {
            cin >> mat2[i][j];
        }
    }

    // Display mat2
    cout << "Matrix 2:" << endl;
    for (i = 0; i < n; i++) {
        for (j = 0; j < n; j++) {
            cout << mat2[i][j] << " ";
        }
        cout << endl;
    }

    // Add matrices mat1 and mat2 to mat3
    for (i = 0; i < n; i++) {
        for (j = 0; j < n; j++) {
            mat3[i][j] = mat1[i][j] + mat2[i][j];
        }
    }

    // Display mat3 (resultant matrix)
    cout << "Resultant Matrix (Sum of Matrices):" << endl;
    for (i = 0; i < n; i++) {
        for (j = 0; j < n; j++) {
            cout << mat3[i][j] << " ";
        }
        cout << endl;
    }

    return 0;
}
