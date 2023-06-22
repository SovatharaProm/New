public class Staff extends Employee{
    private String title;

    public Staff(String name, String phoneNumber, String emailAddress, String office, double salary, String dateHired, String title) {
        super(name, phoneNumber, emailAddress, office, salary, dateHired);
        this.title = title;
    }

    public String getTitle() {
        return title;
    }

    public void setTitle(String title) {
        this.title = title;
    }

    @Override
    public String toString() {
        return "Staff:" + super.toString() + "\nTitle=" + title;
    }
}
