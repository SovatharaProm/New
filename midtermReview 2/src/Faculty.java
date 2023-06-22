public class Faculty extends Employee{
    private double officeHours;
    private String rank;

    public Faculty(String name, String phoneNumber, String emailAddress, String office, double salary, String dateHired, double officeHours, String rank) {
        super(name, phoneNumber, emailAddress, office, salary, dateHired);
        this.officeHours = officeHours;
        this.rank = rank;
    }


    public double getOfficeHours() {
        return officeHours;
    }

    public void setOfficeHours(double officeHours) {
        this.officeHours = officeHours;
    }

    public String getRank() {
        return rank;
    }

    public void setRank(String rank) {
        this.rank = rank;
    }

    @Override
    public String toString() {
        return "Faculty:\n" + super.toString() + "\nOffice Hours:" + officeHours
                + "\nRank:" + rank;
    }


}
