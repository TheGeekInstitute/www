// C++ program to implement iterative Binary Search
#include <iostream>
using namespace std;

// An iterative binary search function.
int binarySearch(int arr[], int low, int high, int x)
{
    while (low <= high) {
        int mid = low + (high - low) / 2;

        // Check if x is present at mid
        if (arr[mid] == x){
            return mid;
        }

        // If x greater, ignore left half
        if (arr[mid] < x){
            low = mid + 1;

        }

        // If x is smaller, ignore right half
        else{
            high = mid - 1;

        }
    }

    // If we reach here, then element was not present
    return -1;
}

// Driver code
int main(void)
{
    int arr[5] = { 2, 3, 4, 10, 40 };
    int x = 10;
    int n = 5;
    int result = binarySearch(arr, 0, n , x);
    
   
   cout<<result;


    return 0;
}
