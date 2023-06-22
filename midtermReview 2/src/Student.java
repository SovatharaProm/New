public class Student extends Person{
    public static String status;

    public static String getStatus() {
        return status;
    }

    public Student(String name, String phoneNumber, String emailAddress, String status) {
        super(name, phoneNumber, emailAddress);
        this.status = status;
    }

    public static void setStatus(String status) {
        Student.status = status;
    }

    @Override
    public String toString() {
        return "Student:\n" + super.toString() + "\nStatus:" + status;
    }
}
