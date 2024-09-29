#include <iostream>
using namespace std;



int main() {
    int rows, cols;
    
    cout << "Enter the number of rows and columns: ";
    cin >> rows >> cols;


    int arr[rows][cols];

    cout << "Enter the elements of the array:" << endl;

    // Input loop for rows and columns
    for (int i = 0; i < rows; ++i) {
        
        for (int j = 0; j < cols; ++j) {
        
            cin >> arr[i][j];
            
        }
    }

    // Displaying the array
    cout << "The entered array is:" << endl;
    for (int i = 0; i < rows; ++i) {
        for (int j = 0; j < cols; ++j) {
            cout << arr[i][j] << " ";
        }
        cout << endl;
    }

    return 0;
}