// C++ implementation of De-queue using circular
// array
#include <iostream>
using namespace std;

// Maximum size of array or Dequeue
#define MAX 100

// A structure to represent a Deque
class Deque {
	int arr[MAX];
	int front;
	int end;
	int size;

public:
	Deque(int size)
	{
		front = -1;
		end = 0;
		this->size = size;
	}



    bool isFull(){
	return ((front == 0 && end == size - 1) || front == end + 1);
    }


    bool isEmpty() { 
    return (front == -1); 
    }



void insertfront(int key)
{
	// check whether Deque if full or not
	if (isFull()) {
		cout << "Overflow\n" << endl;
		return;
	}

	// If queue is initially empty
	if (front == -1) {
		front = 0;
		end = 0;
	}

	// front is at first position of queue
	else if (front == 0)
		front = size - 1;

	else // decrement front end by '1'
		front = front - 1;

	// insert current element into Deque
	arr[front] = key;
}



void insertend(int key)
{
	if (isFull()) {
		cout << " Overflow\n " << endl;
		return;
	}

	// If queue is initially empty
	if (front == -1) {
		front = 0;
		end = 0;
	}

	// end is at last position of queue
	else if (end == size - 1)
		end = 0;

	// increment end end by '1'
	else
		end = end + 1;

	// insert current element into Deque
	arr[end] = key;
}


void deletefront()
{
	// check whether Deque is empty or not
	if (isEmpty()) {
		cout << "Queue Underflow\n" << endl;
		return;
	}

	// Deque has only one element
	if (front == end) {
		front = -1;
		end = -1;
	}
	else
		// back to initial position
		if (front == size - 1)
		front = 0;

	else // increment front by '1' to remove current
		// front value from Deque
		front = front + 1;
}


void deleteend()
{
	if (isEmpty()) {
		cout << " Underflow\n" << endl;
		return;
	}

	// Deque has only one element
	if (front == end) {
		front = -1;
		end = -1;
	}
	else if (end == 0)
		end = size - 1;
	else
		end = end - 1;
}



int getFront()
{
	// check whether Deque is empty or not
	if (isEmpty()) {
		cout << " Underflow\n" << endl;
		return -1;
	}
	return arr[front];
}


int getend()
{

	if (isEmpty() || end < 0) {
		cout << " Underflow\n" << endl;
		return -1;
	}
	return arr[end];
}

};


int main()
{
	Deque dq(5);


	cout << "Insert element at end end : 5 \n";
	dq.insertend(5);

	cout << "insert element at end end : 10 \n";
	dq.insertend(10);

	cout << "get end element "
		<< " " << dq.getend() << endl;

	dq.deleteend();
	cout << "After delete end element new end"
		<< " become " << dq.getend() << endl;

	cout << "inserting element at front end \n";
	dq.insertfront(15);

	cout << "get front element "
		<< " " << dq.getFront() << endl;

	dq.deletefront();

	cout << "After delete front element new "
		<< "front become " << dq.getFront() << endl;
	return 0;
}
