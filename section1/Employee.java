
public class Employee {
    private double salary;
    private int workingHours;

    public void getInfo(double salary, int workingHours) {
        this.salary = salary;
        this.workingHours = workingHours;
        // addSal();
        // addWork();
    }

    public double addSal() {
        // if(salary < 5000) {
        //     salary += 50;
        //     // salary = salary + 50;
        // }
        // return salary;
        return salary < 5000 ? salary += 50: salary;
    }

    public double addWork() {
        if(workingHours > 6) {
            salary += 30;
        }
        return salary;
    }

    public double getSalary() {
        return salary;
    }

    public void setSalary(double salary) {
        this.salary = salary;
    }

    public int getWorkingHours() {
        return workingHours;
    }

    public void setWorkingHours(int workingHours) {
        this.workingHours = workingHours;
    }

    public static void main(String[] args) {
        Employee employee = new Employee();
        employee.getInfo(5500, 8);
        // employee.addSal();
        // employee.addWork();
        System.out.println("Salary: " + employee.getSalary());
        System.out.println("Working Hours: " + employee.getWorkingHours());
    }
}
