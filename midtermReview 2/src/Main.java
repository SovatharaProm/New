public class Main {
    public static void main(String[] args) {
        Person person = new Person("PutmonyrathVann","09778577","pvann2@paragoniu.edu.kh");
        Student student = new Student("PutmonyrathVann","09778577","pvann2@paragoniu.edu.kh" ,"Sophomore");
        Employee employee = new Employee("PutmonyrathVann","09778577","pvann2@paragoniu.edu.kh","ParagonIU",2000.0, "March 23, 2022");
        Staff staff = new Staff("PutmonyrathVann","09778577","pvann2@paragoniu.edu.kh","ParagonIU",2000.0, "March 23, 2022", "Rookie");
        Faculty faculty = new Faculty("PutmonyrathVann","09778577","pvann2@paragoniu.edu.kh","ParagonIU",2000.0, "March 23, 2022",9.6,"Assistance");
        MyDate myDate = new MyDate(2023, "January", 25);

        System.out.println(person);
        System.out.println(student);
        System.out.println(employee);
        System.out.println(staff);
        System.out.println(faculty);
        System.out.println(myDate);
    }
}