#include <iostream>

using namespace std;

// Function to perform binary search
int binarySearch(int arr[], int size, int key) {
    int low = 0;
    int high = size - 1;

    while (low <= high) {
        int mid = low + (high - low) / 2;

        // If the key is present at the middle
        if (arr[mid] == key) {
            return mid;
        }

        // If the key is greater, ignore left half
        if (arr[mid] < key) {
            low = mid + 1;
        }
        // If the key is smaller, ignore right half
        else {
            high = mid - 1;
        }
    }

    // If the key is not found in the array
    return -1;
}

int main() {
    int size;
    cout << "Enter the size of the sorted array: ";
    cin >> size;

    int arr[size];
    cout << "Enter elements of the sorted array:" << endl;
    for (int i = 0; i < size; ++i) {
        cout << "Enter element " << i + 1 << ": ";
        cin >> arr[i];
    }

    int key;
    cout << "Enter the element to search: ";
    cin >> key;

    int index = binarySearch(arr, size, key);
    if (index != -1) {
        cout << "Element " << key << " found at index " << index << "." << endl;
    } else {
        cout << "Element " << key << " not found in the array." << endl;
    }

    return 0;
}
