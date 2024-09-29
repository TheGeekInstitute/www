#include <iostream>
#include <string>

using namespace std;

int length() {
    string name;
   
  
    cout << "Enter a string: ";
    getline(cin, name);
 
    int length = name.length();

    cout << "Length of the string is: " << length << endl;
   
cout<<"\n\n";

return 0;
}



int concate() {
    string name1, name2, concatenatedS;
   
   
    cout << "Enter the first string: ";
    getline(cin, name1);
   
    cout << "Enter the second string: ";
    getline(cin, name2);
   
    concatenatedS = name1+name2;
    cout << "The Concatenated string: " << concatenatedS << endl;

cout<<"\n\n";
    return 0;
}



int reverse() {
    string course, reversed;
   

    cout << "Enter a string: ";
    getline(cin, course);
   
 
    for (int i = course.length() - 1; i >= 0; --i) {
        reversed += course[i];
    }

    cout << "Reversed string: " << reversed << endl;
    cout<<"\n\n";
    return 0;
}

int uccase(){
    string str;
   
   
    cout << "Enter a string: ";
    getline(cin, str);
   
   
    for (char &c :  str) {
        if (isupper(c)) {
            c = tolower(c);
        } else if (islower(c)) {
            c = toupper(c);
        }
    }

    cout << "String with changed case: " << str << endl;
    cout<<"\n\n";
   
    return 0;
}



int compare() {
    string name1, name2;

    cout << "Enter the first string: ";
    getline(cin, name1);

    cout << "Enter the second string: ";
    getline(cin, name2);

    if (name1 == name2) {
        cout << "Both strings are equal." << endl;
    } else{
        cout << "The strings are not same" << endl;
    }

     
    cout<<"\n\n";

    return 0;
}

int address() {
    string s1, s2;

    cout << "Enter the first string: ";
    getline(cin, s1);

    cout << "Enter the second string: ";
    getline(cin, s2);

    cout << "The address of the first string: " << &s1 << endl;
    cout << "The address of the second string: " << &s2 << endl;
    cout<<"\n\n";

    return 0;
}


    int main(){
      
      char ch;

       
    cout << "Enter your choice: ";
    cin >> ch;

     switch (ch) {
        case 'l':
            cout << "Result: " << length() << endl;
            break;
        case 'c':
            cout << "Result: " << concate() << endl;
            break;
        case 'r':
            cout << "Result: " << reverse() << endl;
            break;
        case 'u':
            cout << "Result: " << uccase() << endl;
            break;
        case 'k':
            cout << "Result: " << compare() << endl;
            break;
        case 'a':
            cout << "Result: " << address() << endl;
            break;
            
        default:
            cout << "Invalid " << endl;
    }



        return 0;
    }