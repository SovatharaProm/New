public class Employee extends Person{
    private String office;
    private double salary;
    private String dateHired;

    public Employee(String name, String phoneNumber, String emailAddress, String office, double salary, String dateHired) {
        super(name, phoneNumber, emailAddress);
        this.office = office;
        this.salary = salary;
        this.dateHired = dateHired;
    }

    public String getOffice() {
        return office;
    }

    public void setOffice(String office) {
        this.office = office;
    }

    public double getSalary() {
        return salary;
    }



    public void setSalary(double salary) {
        this.salary = salary;
    }

    public String getDateHired() {
        return dateHired;
    }

    public void setDateHired(String dateHired) {
        this.dateHired = dateHired;
    }

    @Override
    public String toString() {
        return "Employee:\n" + super.toString() +
                "\nOffice=" + office +
                "\nSalary=" + salary +
                "\nDate Hired=" + dateHired;
    }
}